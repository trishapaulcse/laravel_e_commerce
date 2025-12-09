<?php

namespace App\Services;

use App\Models\Invoice;
use App\Models\Order;
use Barryvdh\DomPDF\Facade\Pdf;

class InvoiceService
{
    public function generate(Order $order)
    {
        $invoiceNumber = 'INV-' . date('Y') . '-' . str_pad($order->id, 6, '0', STR_PAD_LEFT);
        
        $invoice = Invoice::create([
            'order_id' => $order->id,
            'invoice_number' => $invoiceNumber,
            'qr_code' => $this->generateQRCode($invoiceNumber)
        ]);

        return $invoice;
    }

    public function generatePDF(Invoice $invoice)
    {
        $order = $invoice->order()->with('items.item', 'user')->first();
        $pdf = Pdf::loadView('invoices.pdf', compact('invoice', 'order'));
        
        $filename = 'invoice_' . $invoice->invoice_number . '.pdf';
        $path = 'invoices/' . $filename;
        
        $pdf->save(storage_path('app/public/' . $path));
        
        $invoice->update(['pdf_path' => $path]);
        
        return $path;
    }

    private function generateQRCode($data)
    {
        return base64_encode($data);
    }
}
