<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 30px; text-align: center; border-radius: 10px 10px 0 0; }
        .content { background: #f9fafb; padding: 30px; border-radius: 0 0 10px 10px; }
        .button { display: inline-block; background: #3B82F6; color: white; padding: 12px 30px; text-decoration: none; border-radius: 5px; margin: 20px 0; }
        .footer { text-align: center; margin-top: 30px; color: #6B7280; font-size: 12px; }
        .order-details { background: white; padding: 20px; border-radius: 8px; margin: 20px 0; }
        .detail-row { display: flex; justify-content: space-between; padding: 10px 0; border-bottom: 1px solid #E5E7EB; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1 style="margin: 0;">Invoice for Order #{{ $order->id }}</h1>
        </div>
        <div class="content">
            <p>Dear {{ $order->user->name }},</p>
            <p>Thank you for your order! Please find your invoice attached to this email.</p>
            
            <div class="order-details">
                <h3 style="margin-top: 0; color: #3B82F6;">Order Summary</h3>
                <div class="detail-row">
                    <span><strong>Order Number:</strong></span>
                    <span>#{{ $order->id }}</span>
                </div>
                <div class="detail-row">
                    <span><strong>Order Date:</strong></span>
                    <span>{{ $order->created_at->format('M d, Y') }}</span>
                </div>
                <div class="detail-row">
                    <span><strong>Total Amount:</strong></span>
                    <span><strong>৳{{ number_format($order->total, 2) }}</strong></span>
                </div>
                <div class="detail-row">
                    <span><strong>Payment Method:</strong></span>
                    <span>{{ ucfirst($order->payment_method) }}</span>
                </div>
                <div class="detail-row" style="border-bottom: none;">
                    <span><strong>Status:</strong></span>
                    <span>{{ ucfirst($order->status) }}</span>
                </div>
            </div>

            <p>You can track your order status anytime by logging into your account.</p>
            
            <center>
                <a href="{{ route('user.orders.show', $order->id) }}" class="button">View Order Details</a>
            </center>

            <p>If you have any questions, please don't hesitate to contact us.</p>
            
            <p>Best regards,<br><strong>{{ \App\Models\Setting::get('company_name', 'Your Company Name') }}</strong></p>
        </div>
        <div class="footer">
            <p>This is an automated email. Please do not reply to this message.</p>
            <p>&copy; {{ date('Y') }} {{ \App\Models\Setting::get('company_name', 'Your Company Name') }}. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
