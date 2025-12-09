<?php

namespace App\Mail;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InvoiceMail extends Mailable
{
    use Queueable, SerializesModels;

    public $order;

    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    public function build()
    {
        $pdf = \PDF::loadView('admin.orders.invoice-pdf', ['order' => $this->order]);
        $companyName = \App\Models\Setting::get('company_name', 'Your Company Name');
        
        return $this->subject('Invoice #' . $this->order->id . ' - ' . $companyName)
                    ->view('emails.invoice')
                    ->attachData($pdf->output(), 'invoice-' . $this->order->id . '.pdf', [
                        'mime' => 'application/pdf',
                    ]);
    }
}
