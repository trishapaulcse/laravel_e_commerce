<?php

namespace App\Services;

use App\Models\Order;
use App\Models\OrderPayment;

class PaymentService
{
    public function processPayment(Order $order, $paymentMethod, $paymentData = [])
    {
        switch ($paymentMethod) {
            case 'bkash':
                return $this->processBkash($order, $paymentData);
            case 'nagad':
                return $this->processNagad($order, $paymentData);
            case 'cod':
                return $this->processCOD($order);
            default:
                return ['success' => false, 'message' => 'Invalid payment method'];
        }
    }

    private function processBkash($order, $data)
    {
        // bKash API integration
        $transactionId = 'BKH' . time() . rand(1000, 9999);
        
        OrderPayment::create([
            'order_id' => $order->id,
            'payment_method' => 'bkash',
            'transaction_id' => $transactionId,
            'amount' => $order->total_amount,
            'status' => 'completed'
        ]);

        $order->update(['status' => 'processing']);

        return ['success' => true, 'transaction_id' => $transactionId];
    }

    private function processNagad($order, $data)
    {
        // Nagad API integration
        $transactionId = 'NGD' . time() . rand(1000, 9999);
        
        OrderPayment::create([
            'order_id' => $order->id,
            'payment_method' => 'nagad',
            'transaction_id' => $transactionId,
            'amount' => $order->total_amount,
            'status' => 'completed'
        ]);

        $order->update(['status' => 'processing']);

        return ['success' => true, 'transaction_id' => $transactionId];
    }

    private function processCOD($order)
    {
        OrderPayment::create([
            'order_id' => $order->id,
            'payment_method' => 'cod',
            'amount' => $order->total_amount,
            'status' => 'pending'
        ]);

        $order->update(['status' => 'pending']);

        return ['success' => true, 'message' => 'Order placed with Cash on Delivery'];
    }
}
