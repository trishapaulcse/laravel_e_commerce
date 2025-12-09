<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Invoice #{{ $order->id }}</title>
    <style>
        body { font-family: Arial, sans-serif; font-size: 14px; color: #333; }
        .header { text-align: center; margin-bottom: 30px; border-bottom: 3px solid #4F46E5; padding-bottom: 20px; }
        .company-name { font-size: 28px; font-weight: bold; color: #4F46E5; margin-bottom: 5px; }
        .invoice-title { font-size: 24px; font-weight: bold; margin-top: 10px; }
        .info-section { margin-bottom: 30px; }
        .info-row { display: flex; justify-content: space-between; margin-bottom: 20px; }
        .info-box { width: 48%; }
        .info-box h3 { font-size: 16px; margin-bottom: 10px; color: #4F46E5; border-bottom: 2px solid #E5E7EB; padding-bottom: 5px; }
        table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
        th { background-color: #4F46E5; color: white; padding: 12px; text-align: left; font-weight: bold; }
        td { padding: 10px; border-bottom: 1px solid #E5E7EB; }
        .text-right { text-align: right; }
        .total-section { margin-top: 20px; text-align: right; }
        .total-row { display: flex; justify-content: flex-end; margin-bottom: 8px; }
        .total-label { width: 150px; font-weight: bold; }
        .total-value { width: 120px; text-align: right; }
        .grand-total { font-size: 18px; color: #4F46E5; font-weight: bold; border-top: 2px solid #4F46E5; padding-top: 10px; margin-top: 10px; }
        .footer { margin-top: 40px; text-align: center; font-size: 12px; color: #6B7280; border-top: 1px solid #E5E7EB; padding-top: 20px; }
    </style>
</head>
<body>
    <div class="header">
        <div class="company-name">{{ \App\Models\Setting::get('company_name', 'Your Company Name') }}</div>
        <div>{{ \App\Models\Setting::get('company_address', '123 Business Street, City, Country') }}</div>
        <div>Phone: {{ \App\Models\Setting::get('company_phone', '+880 1234567890') }} | Email: {{ \App\Models\Setting::get('company_email', 'info@company.com') }}</div>
        <div class="invoice-title">INVOICE</div>
    </div>

    <div class="info-section">
        <div class="info-row">
            <div class="info-box">
                <h3>Bill To:</h3>
                <strong>{{ $order->user->name }}</strong><br>
                {{ $order->user->email }}<br>
                {{ $order->user->phone }}<br>
                {{ $order->shipping_address }}
            </div>
            <div class="info-box">
                <h3>Invoice Details:</h3>
                <strong>Invoice #:</strong> {{ $order->id }}<br>
                <strong>Date:</strong> {{ $order->created_at->format('M d, Y') }}<br>
                <strong>Status:</strong> {{ ucfirst($order->status) }}<br>
                <strong>Payment:</strong> {{ ucfirst($order->payment_method) }}
            </div>
        </div>
    </div>

    <table>
        <thead>
            <tr>
                <th>Item</th>
                <th>SKU</th>
                <th class="text-right">Price</th>
                <th class="text-right">Qty</th>
                <th class="text-right">Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach($order->items as $item)
            <tr>
                <td>{{ $item->product->title }}</td>
                <td>{{ $item->product->sku ?? 'N/A' }}</td>
                <td class="text-right">৳{{ number_format($item->price, 2) }}</td>
                <td class="text-right">{{ $item->quantity }}</td>
                <td class="text-right">৳{{ number_format($item->price * $item->quantity, 2) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="total-section">
        <div class="total-row">
            <div class="total-label">Subtotal:</div>
            <div class="total-value">৳{{ number_format($order->items->sum(fn($i) => $i->price * $i->quantity), 2) }}</div>
        </div>
        <div class="total-row">
            <div class="total-label">Shipping:</div>
            <div class="total-value">৳50.00</div>
        </div>
        <div class="total-row grand-total">
            <div class="total-label">Grand Total:</div>
            <div class="total-value">৳{{ number_format($order->total, 2) }}</div>
        </div>
    </div>

    <div class="footer">
        <p>Thank you for your business!</p>
        <p>This is a computer-generated invoice and does not require a signature.</p>
    </div>
</body>
</html>
