<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Website\ProductController;
use App\Http\Controllers\Website\CartController;
use App\Http\Controllers\Website\CheckoutController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

// ============================================
// AUTH ROUTES
// ============================================
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Dashboard redirect based on role
Route::get('/dashboard', function() {
    if(auth()->user()->hasRole('admin')) {
        return redirect()->route('admin.dashboard');
    }
    return redirect()->route('user.dashboard');
})->middleware('auth')->name('dashboard');

// ============================================
// WEBSITE ROUTES (Public Frontend)
// ============================================
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'index'])->name('website.home');

// Categories
Route::prefix('categories')->name('website.categories.')->group(function () {
    Route::get('/', [App\Http\Controllers\Website\CategoryController::class, 'index'])->name('index');
    Route::get('/{id}', [App\Http\Controllers\Website\CategoryController::class, 'show'])->name('show');
});

// Products
Route::prefix('products')->name('website.products.')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('index');
    Route::get('/{id}', [ProductController::class, 'show'])->name('show');
});

// Cart
Route::prefix('cart')->name('website.cart.')->group(function () {
    Route::get('/', [CartController::class, 'index'])->name('index');
    Route::post('/add', [CartController::class, 'add'])->name('add');
    Route::post('/{id}/update', [CartController::class, 'update'])->name('update');
    Route::post('/{id}/remove', [CartController::class, 'remove'])->name('remove');
});

// Checkout (Guest allowed)
Route::prefix('checkout')->name('website.checkout.')->group(function () {
    Route::get('/', [CheckoutController::class, 'index'])->name('index');
    Route::post('/', [CheckoutController::class, 'store'])->name('store');
});

// Reviews
Route::middleware('auth')->post('/reviews', [App\Http\Controllers\Website\ReviewController::class, 'store'])->name('website.reviews.store');

// Payment
Route::middleware('auth')->prefix('payment')->name('website.payment.')->group(function () {
    Route::post('/{orderId}/process', [App\Http\Controllers\Website\PaymentController::class, 'process'])->name('process');
    Route::get('/bkash/callback', [App\Http\Controllers\Website\PaymentController::class, 'bkashCallback'])->name('bkash.callback');
    Route::get('/nagad/callback', [App\Http\Controllers\Website\PaymentController::class, 'nagadCallback'])->name('nagad.callback');
});

// CMS Pages
Route::get('/page/{slug}', [App\Http\Controllers\Website\PageController::class, 'show'])->name('website.page.show');

// Blog
Route::prefix('blogs')->name('website.blogs.')->group(function () {
    Route::get('/', [App\Http\Controllers\Website\BlogController::class, 'index'])->name('index');
    Route::get('/{slug}', [App\Http\Controllers\Website\BlogController::class, 'show'])->name('show');
});

// Contact
Route::get('/contact', [App\Http\Controllers\Website\ContactController::class, 'index'])->name('website.contact');
Route::post('/contact', [App\Http\Controllers\Website\ContactController::class, 'store'])->name('website.contact.store');

// ============================================
// USER PANEL ROUTES (Customer Dashboard)
// ============================================
Route::middleware('auth')->prefix('user')->name('user.')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\UserPanel\DashboardController::class, 'index'])->name('dashboard');
    
    // Profile
    Route::get('/profile', [App\Http\Controllers\UserPanel\ProfileController::class, 'index'])->name('profile');
    Route::put('/profile', [App\Http\Controllers\UserPanel\ProfileController::class, 'update'])->name('profile.update');
    
    // Addresses
    Route::get('/addresses', [App\Http\Controllers\UserPanel\AddressController::class, 'index'])->name('addresses');
    Route::post('/addresses', [App\Http\Controllers\UserPanel\AddressController::class, 'store'])->name('addresses.store');
    Route::delete('/addresses/{id}', [App\Http\Controllers\UserPanel\AddressController::class, 'destroy'])->name('addresses.destroy');
    
    // Orders
    Route::get('/orders', [App\Http\Controllers\UserPanel\OrderController::class, 'index'])->name('orders.index');
    Route::get('/orders/{id}', [App\Http\Controllers\UserPanel\OrderController::class, 'show'])->name('orders.show');
    Route::get('/orders/{id}/invoice', [App\Http\Controllers\UserPanel\OrderController::class, 'invoice'])->name('orders.invoice');
    Route::get('/orders/{id}/invoice/download', [App\Http\Controllers\UserPanel\OrderController::class, 'downloadInvoice'])->name('orders.invoice.download');
    Route::post('/orders/{id}/invoice/email', [App\Http\Controllers\UserPanel\OrderController::class, 'emailInvoice'])->name('orders.invoice.email');
    
    // Wallet
    Route::get('/wallet', [App\Http\Controllers\UserPanel\WalletController::class, 'index'])->name('wallet');
    Route::post('/wallet/add-funds', [App\Http\Controllers\UserPanel\WalletController::class, 'addFunds'])->name('wallet.addFunds');
    
    // Membership
    Route::get('/memberships', [App\Http\Controllers\UserPanel\MembershipController::class, 'index'])->name('memberships');
    Route::post('/memberships/{id}/purchase', [App\Http\Controllers\UserPanel\MembershipController::class, 'purchase'])->name('memberships.purchase');
    
    // Wishlist
    Route::get('/wishlist', [App\Http\Controllers\UserPanel\WishlistController::class, 'index'])->name('wishlist.index');
    Route::post('/wishlist', [App\Http\Controllers\UserPanel\WishlistController::class, 'store'])->name('wishlist.store');
    Route::delete('/wishlist/{id}', [App\Http\Controllers\UserPanel\WishlistController::class, 'destroy'])->name('wishlist.destroy');
    
    // Order Tracking
    Route::get('/orders/{order}/tracking', [App\Http\Controllers\UserPanel\OrderController::class, 'tracking'])->name('orders.tracking');
});

// ============================================
// ADMIN PANEL ROUTES
// ============================================
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    
    // Categories
    Route::resource('categories', App\Http\Controllers\Admin\CategoryController::class);
    
    // Products
    Route::resource('products', App\Http\Controllers\Admin\ProductController::class);
    
    // Orders
    Route::get('orders', [App\Http\Controllers\Admin\OrderController::class, 'index'])->name('orders.index');
    Route::get('orders/{id}', [App\Http\Controllers\Admin\OrderController::class, 'show'])->name('orders.show');
    Route::put('orders/{id}/status', [App\Http\Controllers\Admin\OrderController::class, 'updateStatus'])->name('orders.updateStatus');
    
    // Coupons
    Route::resource('coupons', App\Http\Controllers\Admin\CouponController::class);
    
    // Memberships
    Route::resource('memberships', App\Http\Controllers\Admin\MembershipController::class);
    
    // Bundles
    Route::resource('bundles', App\Http\Controllers\Admin\BundleController::class);
    
    // Units
    Route::resource('units', App\Http\Controllers\Admin\UnitController::class);
    
    // Brands
    Route::resource('brands', App\Http\Controllers\Admin\BrandController::class);
    
    // Discounts
    Route::resource('discounts', App\Http\Controllers\Admin\DiscountController::class);
    
    // VAT
    Route::resource('vats', App\Http\Controllers\Admin\VatController::class);
    
    // Offers
    Route::resource('offers', App\Http\Controllers\Admin\OfferController::class);
    
    // Roles & Permissions
    Route::resource('roles', App\Http\Controllers\Admin\RoleController::class);
    
    // Banners
    Route::resource('banners', App\Http\Controllers\Admin\BannerController::class);
    
    // Payment Gateways
    Route::get('payment-gateways', [App\Http\Controllers\Admin\PaymentGatewayController::class, 'index'])->name('payment-gateways.index');
    Route::get('payment-gateways/{id}/edit', [App\Http\Controllers\Admin\PaymentGatewayController::class, 'edit'])->name('payment-gateways.edit');
    Route::put('payment-gateways/{id}', [App\Http\Controllers\Admin\PaymentGatewayController::class, 'update'])->name('payment-gateways.update');
    
    // CMS Pages
    Route::resource('pages', App\Http\Controllers\Admin\PageController::class);
    
    // Blog
    Route::resource('blogs', App\Http\Controllers\Admin\BlogController::class);
    
    // Contacts
    Route::get('contacts', [App\Http\Controllers\Admin\ContactController::class, 'index'])->name('contacts.index');
    Route::get('contacts/{id}', [App\Http\Controllers\Admin\ContactController::class, 'show'])->name('contacts.show');
    Route::post('contacts/{id}/reply', [App\Http\Controllers\Admin\ContactController::class, 'reply'])->name('contacts.reply');
    
    // Customers
    Route::resource('customers', App\Http\Controllers\Admin\CustomerController::class);
    
    // Shipping Methods
    Route::resource('shipping-methods', App\Http\Controllers\Admin\ShippingMethodController::class);
    
    // Settings
    Route::get('settings', [App\Http\Controllers\Admin\SettingController::class, 'index'])->name('settings.index');
    Route::post('settings', [App\Http\Controllers\Admin\SettingController::class, 'update'])->name('settings.update');
    
    // Reports
    Route::get('reports/purchase', [App\Http\Controllers\Admin\ReportController::class, 'purchaseReport'])->name('reports.purchase');
    
    // Order Tracking
    Route::get('orders/{order}/tracking', [App\Http\Controllers\Admin\OrderController::class, 'tracking'])->name('orders.tracking');
    Route::post('orders/{order}/tracking', [App\Http\Controllers\Admin\OrderTrackingController::class, 'store'])->name('orders.tracking.store');
    
    // Activity Logs
    Route::get('logs', [App\Http\Controllers\Admin\ActivityLogController::class, 'index'])->name('logs.index');
    
    // Invoices
    Route::get('orders/{id}/invoice', [App\Http\Controllers\Admin\OrderController::class, 'invoice'])->name('orders.invoice');
    Route::get('orders/{id}/invoice/download', [App\Http\Controllers\Admin\OrderController::class, 'downloadInvoice'])->name('orders.invoice.download');
    Route::post('orders/{id}/invoice/email', [App\Http\Controllers\Admin\OrderController::class, 'emailInvoice'])->name('orders.invoice.email');
});

