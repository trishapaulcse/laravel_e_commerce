# Routes Reference Guide

## Website Routes (Public Access)

### Homepage
```
GET  /                          → Website\HomeController@index
```

### Products
```
GET  /products                  → Website\ProductController@index
GET  /products/{slug}           → Website\ProductController@show
```

### Cart
```
GET     /cart                   → Website\CartController@index
POST    /cart/add               → Website\CartController@add
DELETE  /cart/{id}              → Website\CartController@remove
```

### Checkout (Requires Auth)
```
GET   /checkout                 → Website\CheckoutController@index
POST  /checkout                 → Website\CheckoutController@store
```

---

## User Panel Routes (Requires Authentication)

### Dashboard
```
GET  /user/dashboard            → UserPanel\DashboardController@index
```

### Profile
```
GET  /user/profile              → UserPanel\ProfileController@index
PUT  /user/profile              → UserPanel\ProfileController@update
```

### Orders
```
GET  /user/orders               → UserPanel\OrderController@index
GET  /user/orders/{id}          → UserPanel\OrderController@show
```

### Addresses
```
GET     /user/addresses         → UserPanel\AddressController@index
POST    /user/addresses         → UserPanel\AddressController@store
DELETE  /user/addresses/{id}    → UserPanel\AddressController@destroy
```

---

## Admin Panel Routes (Requires Authentication + Admin Role)

### Dashboard
```
GET  /admin/dashboard           → Admin\DashboardController@index
```

### Categories (Resource Routes)
```
GET     /admin/categories           → Admin\CategoryController@index
GET     /admin/categories/create    → Admin\CategoryController@create
POST    /admin/categories           → Admin\CategoryController@store
GET     /admin/categories/{id}      → Admin\CategoryController@show
GET     /admin/categories/{id}/edit → Admin\CategoryController@edit
PUT     /admin/categories/{id}      → Admin\CategoryController@update
DELETE  /admin/categories/{id}      → Admin\CategoryController@destroy
```

### Products (Resource Routes)
```
GET     /admin/products             → Admin\ProductController@index
GET     /admin/products/create      → Admin\ProductController@create
POST    /admin/products             → Admin\ProductController@store
GET     /admin/products/{id}        → Admin\ProductController@show
GET     /admin/products/{id}/edit   → Admin\ProductController@edit
PUT     /admin/products/{id}        → Admin\ProductController@update
DELETE  /admin/products/{id}        → Admin\ProductController@destroy
```

### Orders
```
GET  /admin/orders               → Admin\OrderController@index
GET  /admin/orders/{id}          → Admin\OrderController@show
PUT  /admin/orders/{id}/status   → Admin\OrderController@updateStatus
```

### Coupons (Resource Routes)
```
GET     /admin/coupons              → Admin\CouponController@index
GET     /admin/coupons/create       → Admin\CouponController@create
POST    /admin/coupons              → Admin\CouponController@store
GET     /admin/coupons/{id}         → Admin\CouponController@show
GET     /admin/coupons/{id}/edit    → Admin\CouponController@edit
PUT     /admin/coupons/{id}         → Admin\CouponController@update
DELETE  /admin/coupons/{id}         → Admin\CouponController@destroy
```

### Memberships (Resource Routes)
```
GET     /admin/memberships          → Admin\MembershipController@index
GET     /admin/memberships/create   → Admin\MembershipController@create
POST    /admin/memberships          → Admin\MembershipController@store
GET     /admin/memberships/{id}     → Admin\MembershipController@show
GET     /admin/memberships/{id}/edit → Admin\MembershipController@edit
PUT     /admin/memberships/{id}     → Admin\MembershipController@update
DELETE  /admin/memberships/{id}     → Admin\MembershipController@destroy
```

---

## Route Naming Convention

All routes follow Laravel's naming convention:

### Website Routes
- `home` - Homepage
- `products.index` - Product listing
- `products.show` - Product details
- `cart.index` - View cart
- `cart.add` - Add to cart
- `cart.remove` - Remove from cart
- `checkout.index` - Checkout page
- `checkout.store` - Place order

### User Panel Routes
- `user.dashboard` - User dashboard
- `user.profile` - View profile
- `user.profile.update` - Update profile
- `user.orders.index` - Order list
- `user.orders.show` - Order details
- `user.addresses` - Address list
- `user.addresses.store` - Add address
- `user.addresses.destroy` - Delete address

### Admin Panel Routes
- `admin.dashboard` - Admin dashboard
- `admin.categories.*` - Category CRUD
- `admin.products.*` - Product CRUD
- `admin.orders.index` - Order list
- `admin.orders.show` - Order details
- `admin.orders.updateStatus` - Update order status
- `admin.coupons.*` - Coupon CRUD
- `admin.memberships.*` - Membership CRUD

---

## Usage Examples

### In Blade Templates
```blade
<!-- Link to homepage -->
<a href="{{ route('home') }}">Home</a>

<!-- Link to product details -->
<a href="{{ route('products.show', $product->slug) }}">View Product</a>

<!-- Link to user dashboard -->
<a href="{{ route('user.dashboard') }}">My Dashboard</a>

<!-- Link to admin products -->
<a href="{{ route('admin.products.index') }}">Manage Products</a>
```

### In Controllers
```php
// Redirect to homepage
return redirect()->route('home');

// Redirect to product details
return redirect()->route('products.show', $product->slug);

// Redirect to admin dashboard with success message
return redirect()->route('admin.dashboard')->with('success', 'Action completed');
```

### Form Actions
```blade
<!-- Add to cart form -->
<form action="{{ route('cart.add') }}" method="POST">
    @csrf
    <!-- form fields -->
</form>

<!-- Update profile form -->
<form action="{{ route('user.profile.update') }}" method="POST">
    @csrf
    @method('PUT')
    <!-- form fields -->
</form>

<!-- Delete category form -->
<form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>
```

---

## Middleware Applied

### Public Routes
- No middleware (accessible to everyone)

### User Panel Routes
- `auth` - Requires user to be logged in

### Admin Panel Routes
- `auth` - Requires user to be logged in
- TODO: Add `role:admin` middleware for admin-only access

---

## API Routes (Future Implementation)

When implementing API for mobile app, create in `routes/api.php`:

```php
Route::prefix('v1')->group(function () {
    Route::get('products', [API\ProductController::class, 'index']);
    Route::get('products/{id}', [API\ProductController::class, 'show']);
    
    Route::middleware('auth:sanctum')->group(function () {
        Route::get('orders', [API\OrderController::class, 'index']);
        Route::post('orders', [API\OrderController::class, 'store']);
    });
});
```
