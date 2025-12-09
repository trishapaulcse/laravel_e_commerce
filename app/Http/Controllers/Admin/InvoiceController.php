<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use App\Services\InvoiceService;

class InvoiceController extends Controller
{
    protected $invoiceService;

    public function __construct(InvoiceService $invoiceService)
    {
        $this->invoiceService = $invoiceService;
    }

    public function download($id)
    {
        $invoice = Invoice::with('order')->findOrFail($id);
        
        if (!$invoice->pdf_path) {
            $this->invoiceService->generatePDF($invoice);
        }
        
        return response()->download(storage_path('app/public/' . $invoice->pdf_path));
    }
}
