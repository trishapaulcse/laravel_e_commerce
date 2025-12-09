<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Invoice #{{ $invoice->invoice_number }}</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .header { text-align: center; margin-bottom: 30px; }
        .invoice-details { margin-bottom: 20px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        .total { text-align: right; font-weight: bold; }
    </style>
</head>
<body>
    <div class="header">
        <h1>INVOICE</h1>
        <p>Invoice #{{ $invoice->invoice_number }}</p>
        <p>Date: {{ $invoice->created_at->format('d M Y') }}</p>
    </div>

    <div class="invoice-details">
        <p><strong>Customer:</strong> {{ $order->user->name }}</p>
        <p><strong>Email:</strong> {{ $order->user->email }}</p>
        <p><strong>Phone:</strong> {{ $order->user->phone }}</p>
        <p><strong>Order #:</strong> {{ $order->order_number }}</p>
    </div>

    <table>
        <thead>
            <tr>
                <th>Item</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach($order->items as $item)
            <tr>
                <td>{{ $item->item->title }}</td>
                <td>{{ $item->quantity }}</td>
                <td>{{ number_format($item->price, 2) }} BDT</td>
                <td>{{ number_format($item->total_price, 2) }} BDT</td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3" class="total">Subtotal:</td>
                <td>{{ number_format($order->subtotal ?? $order->total_amount, 2) }} BDT</td>
            </tr>
            <tr>
                <td colspan="3" class="total">VAT:</td>
                <td>{{ number_format($order->vat_amount ?? 0, 2) }} BDT</td>
            </tr>
            <tr>
                <td colspan="3" class="total">Discount:</td>
                <td>{{ number_format($order->discount_amount ?? 0, 2) }} BDT</td>
            </tr>
            <tr>
                <td colspan="3" class="total">Total:</td>
                <td>{{ number_format($order->total_amount, 2) }} BDT</td>
            </tr>
        </tfoot>
    </table>

    <div style="margin-top: 30px; text-align: center;">
        <img src="data:image/png;base64,{{ $invoice->qr_code }}" alt="QR Code" width="100">
    </div>
</body>
</html>
