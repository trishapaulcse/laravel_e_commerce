# E-Commerce Platform - Setup Guide

## Project Structure

The project is organized into 3 main sections:

### 1. **Website (Public Frontend)**
- **Controllers**: `app/Http/Controllers/Website/`
- **Views**: `resources/views/website/`
- **Routes**: Prefix: `/`

### 2. **User Panel (Customer Dashboard)**
- **Controllers**: `app/Http/Controllers/UserPanel/`
- **Views**: `resources/views/user-panel/`
- **Routes**: Prefix: `/user`

### 3. **Admin Panel**
- **Controllers**: `app/Http/Controllers/Admin/`
- **Views**: `resources/views/admin/`
- **Routes**: Prefix: `/admin`

## Installation Steps

### 1. Install Dependencies
```bash
composer install
npm install
```

### 2. Environment Setup
```bash
cp .env.example .env
php artisan key:generate
```

### 3. Database Configuration
Update `.env` file:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=adorsholipi
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Run Migrations
```bash
php artisan migrate
```

### 5. Seed Database (Optional)
```bash
php artisan db:seed
```

### 6. Build Assets
```bash
npm run dev
```

### 7. Start Server
```bash
php artisan serve
```

## Available Routes

### Website Routes
- `GET /` - Homepage
- `GET /products` - Product listing
- `GET /products/{slug}` - Product details
- `GET /cart` - Shopping cart
- `POST /cart/add` - Add to cart
- `GET /checkout` - Checkout page

### User Panel Routes (Requires Authentication)
- `GET /user/dashboard` - User dashboard
- `GET /user/profile` - User profile
- `GET /user/orders` - Order history
- `GET /user/addresses` - Manage addresses

### Admin Panel Routes (Requires Authentication)
- `GET /admin/dashboard` - Admin dashboard
- `GET /admin/categories` - Manage categories
- `GET /admin/products` - Manage products
- `GET /admin/orders` - Manage orders
- `GET /admin/coupons` - Manage coupons
- `GET /admin/memberships` - Manage memberships

## Models Created

1. **Category** - Product categories with parent-child support
2. **Product** - Products with pricing, stock, VAT
3. **Unit** - Product units (KG, Piece, Liter)
4. **Brand** - Product brands
5. **Order** - Customer orders
6. **OrderItem** - Order line items
7. **Address** - User addresses
8. **Coupon** - Discount coupons
9. **Discount** - General discounts
10. **Vat** - Tax rules
11. **Membership** - Membership plans
12. **Bundle** - Product bundles

## Next Steps

1. Create authentication system (Laravel Breeze/Sanctum)
2. Add product image upload functionality
3. Implement payment gateway integration
4. Add PDF invoice generation
5. Create email notifications
6. Implement search and filters
7. Add reviews and ratings
8. Create admin role-based access control (RBAC)

## Development Notes

- All controllers are organized by section (Website/UserPanel/Admin)
- Views follow the same structure
- Models include proper relationships
- Migrations are ready to run
- Routes are grouped by functionality
