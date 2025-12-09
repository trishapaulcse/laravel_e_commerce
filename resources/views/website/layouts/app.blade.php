<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'E-Commerce Store')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
    function addToCart(productId, price) {
        const qty = document.getElementById('quantity')?.value || 1;
        fetch('{{ route('website.cart.add') }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({product_id: productId, price: price, quantity: qty})
        })
        .then(res => res.json())
        .then(data => {
            if(data.success) {
                const badge = document.getElementById('cart-count');
                badge.textContent = data.cart_count;
                badge.classList.remove('hidden');
                alert('Product added to cart!');
            }
        });
    }
    
    function buyNow(productId, price) {
        const qty = document.getElementById('quantity')?.value || 1;
        fetch('{{ route('website.cart.add') }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({product_id: productId, price: price, quantity: qty})
        })
        .then(res => res.json())
        .then(data => {
            if(data.success) {
                window.location.href = '{{ route('website.checkout.index') }}';
            }
        });
    }
    </script>
</head>
<body class="bg-gray-50">
    @include('website.layouts.header')
    
    <main>
        @yield('content')
    </main>
    
    @include('website.layouts.footer')
</body>
</html>
