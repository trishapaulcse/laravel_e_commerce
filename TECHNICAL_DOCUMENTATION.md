# Laravel E-Commerce Platform - Technical Documentation

## Table of Contents
1. [System Overview](#system-overview)
2. [Architecture](#architecture)
3. [Admin Panel](#admin-panel)
4. [User Panel](#user-panel)
5. [Website (Public Frontend)](#website-public-frontend)
6. [Database Structure](#database-structure)
7. [API Endpoints](#api-endpoints)
8. [Services & Utilities](#services--utilities)
9. [Security Features](#security-features)
10. [Installation & Setup](#installation--setup)

---

## System Overview

### Technology Stack
- **Framework:** Laravel 11.x
- **PHP Version:** 8.2+
- **Database:** MySQL 8.0+
- **Frontend:** Blade Templates, Bootstrap 5.3
- **PDF Generation:** DomPDF
- **Authentication:** Laravel Sanctum
- **Payment Gateways:** bKash, Nagad, Cash on Delivery

### Project Structure
```
laravel_e_commerce/
├── app/
│   ├── Http/Controllers/
│   │   ├── Admin/          (24 controllers)
│   │   ├── UserPanel/      (8 controllers)
│   │   └── Website/        (6 controllers)
│   ├── Models/             (25+ models)
│   ├── Services/           (3 services)
│   └── Mail/               (2 mailable classes)
├── database/
│   ├── migrations/         (7 migration files)
│   └── seeders/            (13 seeders)
├── resources/views/
│   ├── admin/              (63+ blade files)
│   ├── user-panel/         (10 blade files)
│   ├── website/            (8+ blade files)
│   ├── emails/             (2 email templates)
│   └── invoices/           (1 PDF template)
└── routes/
    └── web.php             (120+ routes)
```

---

## Architecture

### MVC Pattern
- **Models:** Eloquent ORM with relationships
- **Views:** Blade templating engine
- **Controllers:** Organized by namespace (Admin, UserPanel, Website)

### Service Layer
- **PaymentService:** Handles payment processing
- **InvoiceService:** Generates invoices and PDFs
- **CartService:** Cart calculations with VAT and coupons

### Design Patterns
- Repository Pattern (Models)
- Service Pattern (Business Logic)
- Observer Pattern (Activity Logging)
- Factory Pattern (Seeders)

---

## Admin Panel

### Access
- **URL:** `/admin/dashboard`
- **Middleware:** `auth`
- **Roles:** Super Admin, Manager, Accountant, Publisher

### Controllers (24 Total)

#### 1. DashboardController
**Route:** `GET /admin/dashboard`
**Features:**
- Total orders count
- Total products count
- Total users count
- Recent orders (last 10)

#### 2. CategoryController (CRUD)
**Routes:**
- `GET /admin/categories` - List all
- `GET /admin/categories/create` - Create form
- `POST /admin/categories` - Store
- `GET /admin/categories/{id}/edit` - Edit form
- `PUT /admin/categories/{id}` - Update
- `DELETE /admin/categories/{id}` - Delete

**Features:**
- Parent/child categories
- Slug auto-generation
- Status management (active/inactive)

#### 3. ProductController (CRUD)
**Routes:** Resource routes
**Features:**
- Product management with images
- Category, brand, unit assignment
- SKU, barcode, stock tracking
- Cost price, selling price
- VAT applicable flag
- Discount management
- Status control

#### 4. OrderController
**Routes:**
- `GET /admin/orders` - List with filters
- `GET /admin/orders/{id}` - Order details
- `PUT /admin/orders/{id}/status` - Update status
- `GET /admin/orders/{order}/tracking` - Tracking page

**Features:**
- Order status management
- Assign delivery agent
- Generate invoice PDF
- Cancel/refund processing
- Print packing slips

#### 5. CouponController (CRUD)
**Features:**
- Coupon code generation
- Fixed/percentage discount
- Min order amount
- Max discount limit
- Usage limits
- Validity period

#### 6. MembershipController (CRUD)
**Features:**
- Membership plans
- Duration in days
- Free delivery option
- Extra discount percentage
- Cashback percentage
- Priority support flag

#### 7. BundleController (CRUD)
**Features:**
- Bundle products together
- Base price calculation
- Discount on bundles
- Final price auto-calculation

#### 8. UnitController (CRUD)
**Features:** KG, Piece, Liter, Set management

#### 9. BrandController (CRUD)
**Features:** Brand management with slug

#### 10. DiscountController (CRUD)
**Features:**
- Applies to: Item, Category, Bundle, Cart
- Fixed/percentage type
- Validity dates

#### 11. VatController (CRUD)
**Features:**
- VAT rules management
- Percentage/fixed type
- Applies to: All, Category, Item
- Priority system

#### 12. OfferController (CRUD)
**Features:**
- Buy X Get Y
- Cart discount
- Membership-only offers
- Banner images

#### 13. RoleController (CRUD)
**Features:**
- Role creation
- Permission assignment
- User count per role

#### 14. BannerController (CRUD)
**Features:**
- Banner images
- Position ordering
- Link URLs

#### 15. PaymentGatewayController
**Routes:**
- `GET /admin/payment-gateways` - List
- `GET /admin/payment-gateways/{id}/edit` - Edit
- `PUT /admin/payment-gateways/{id}` - Update

**Features:**
- API credentials management
- Sandbox/live mode toggle
- Active/inactive status

#### 16. PageController (CRUD)
**Features:**
- CMS pages (About, Terms, Privacy)
- SEO metadata
- Slug management

#### 17. BlogController (CRUD)
**Features:**
- Blog posts
- Author tracking
- Published/draft status
- Published date

#### 18. ContactController
**Routes:**
- `GET /admin/contacts` - List
- `GET /admin/contacts/{id}` - View
- `POST /admin/contacts/{id}/reply` - Send reply

**Features:**
- View contact submissions
- Reply via email
- Status tracking

#### 19. CustomerController (CRUD)
**Features:**
- Customer management
- View orders
- View addresses
- Create/edit customers

#### 20. ShippingMethodController (CRUD)
**Features:**
- Shipping methods
- Cost management
- Delivery time estimates

#### 21. SettingController
**Routes:**
- `GET /admin/settings` - View
- `POST /admin/settings` - Update

**Features:**
- Company information
- Social media links
- SMTP settings
- SMS API settings

#### 22. ReportController
**Routes:**
- `GET /admin/reports/purchase` - Purchase report

**Features:**
- Date range filtering
- Total revenue
- Total orders
- Top 10 products
- Revenue per product

#### 23. OrderTrackingController
**Routes:**
- `POST /admin/orders/{order}/tracking` - Add tracking

**Features:**
- Add tracking updates
- Status, location, description
- Timestamp tracking

#### 24. ActivityLogController
**Routes:**
- `GET /admin/logs` - View logs

**Features:**
- User activity tracking
- Model changes
- Action logging

#### 25. InvoiceController
**Routes:**
- `GET /admin/invoices/{id}/download` - Download PDF

**Features:**
- Generate invoice PDF
- Download invoice
- QR code generation

### Admin Views (63+ Files)
```
admin/
├── dashboard.blade.php
├── categories/ (index, create, edit)
├── products/ (index, create, edit)
├── orders/ (index, show, tracking)
├── coupons/ (index, create, edit)
├── memberships/ (index, create, edit)
├── bundles/ (index, create, edit)
├── units/ (index, create, edit)
├── brands/ (index, create, edit)
├── discounts/ (index, create, edit)
├── vats/ (index, create, edit)
├── offers/ (index, create, edit)
├── roles/ (index, create, edit)
├── banners/ (index, create, edit)
├── payment-gateways/ (index, edit)
├── pages/ (index, create, edit)
├── blogs/ (index, create, edit)
├── contacts/ (index, show)
├── customers/ (index, create, edit, show)
├── shipping-methods/ (index, create, edit)
├── settings/ (index)
├── reports/ (purchase)
└── logs/ (index)
```

---

## User Panel

### Access
- **URL:** `/user/dashboard`
- **Middleware:** `auth`
- **Role:** Customer (no admin role)

### Controllers (8 Total)

#### 1. DashboardController
**Route:** `GET /user/dashboard`
**Features:**
- Total orders count
- Pending orders count
- Wishlist items count
- Wallet balance
- Recent orders (last 5)
- Personal purchase report (top 10 products)

#### 2. ProfileController
**Routes:**
- `GET /user/profile` - View profile
- `PUT /user/profile` - Update profile

**Features:**
- Update name, email, phone
- Update gender, date of birth
- Avatar upload

#### 3. AddressController
**Routes:**
- `GET /user/addresses` - List addresses
- `POST /user/addresses` - Add address
- `DELETE /user/addresses/{id}` - Delete address

**Features:**
- Multiple addresses
- Set default address
- Address management

#### 4. OrderController
**Routes:**
- `GET /user/orders` - List orders
- `GET /user/orders/{id}` - Order details
- `GET /user/orders/{order}/tracking` - Track order

**Features:**
- View all orders with pagination
- Order details with items
- Prices, discount, VAT breakdown
- Shipment tracking
- Status timeline
- Reorder option
- Invoice PDF download
- Return/refund request
- Review & rating

#### 5. WalletController
**Routes:**
- `GET /user/wallet` - View wallet
- `POST /user/wallet/add-funds` - Add funds

**Features:**
- Wallet balance
- Add funds
- Transaction history
- Credit/debit tracking

#### 6. MembershipController
**Routes:**
- `GET /user/memberships` - View plans
- `POST /user/memberships/{id}/purchase` - Purchase

**Features:**
- View membership plans
- Active membership display
- Purchase membership
- Membership benefits visibility
- Validity tracking

#### 7. WishlistController
**Routes:**
- `GET /user/wishlist` - View wishlist
- `POST /user/wishlist` - Add to wishlist
- `DELETE /user/wishlist/{id}` - Remove from wishlist

**Features:**
- Add products to wishlist
- View all wishlist items
- Remove items
- Quick add to cart

#### 8. ReviewController
**Routes:**
- `POST /user/reviews` - Submit review

**Features:**
- Rate products (1-5 stars)
- Write review text
- Upload review images

### User Panel Views (10 Files)
```
user-panel/
├── dashboard.blade.php
├── profile/
│   ├── index.blade.php
│   └── addresses.blade.php
├── orders/
│   ├── index.blade.php
│   ├── show.blade.php
│   └── tracking.blade.php
├── wallet/
│   └── index.blade.php
├── membership/
│   └── index.blade.php
├── wishlist/
│   └── index.blade.php
└── layouts/
    └── app.blade.php
```

---

## Website (Public Frontend)

### Controllers (6 Total)

#### 1. HomeController
**Route:** `GET /`
**Features:**
- Banner slider
- Category showcase
- Featured products
- Offer section
- Membership promotion

#### 2. ProductController
**Routes:**
- `GET /products` - Product listing
- `GET /products/{slug}` - Product details

**Features:**
- Pagination
- Filters (category, price, brand, rating)
- Sort (popularity, price, newest)
- Multiple images
- VAT included/excluded label
- Customer reviews
- Related products
- Bundle suggestions

#### 3. CartController
**Routes:**
- `GET /cart` - View cart
- `POST /cart/add` - Add to cart
- `DELETE /cart/{id}` - Remove from cart

**Features:**
- Add/remove items
- Quantity update
- VAT calculation
- Applied discounts
- Coupons panel
- Estimated total

#### 4. CheckoutController
**Routes:**
- `GET /checkout` - Checkout page
- `POST /checkout` - Place order

**Features:**
- Address selection
- Payment method selection
- Coupon application
- Order summary
- Final price calculation

#### 5. PaymentController
**Routes:**
- `POST /payment/{orderId}/process` - Process payment
- `GET /payment/bkash/callback` - bKash callback
- `GET /payment/nagad/callback` - Nagad callback

**Features:**
- bKash integration
- Nagad integration
- Cash on Delivery
- Payment verification
- Order status update

#### 6. ReviewController
**Routes:**
- `POST /reviews` - Submit review

**Features:**
- Product reviews
- Star ratings
- Review moderation

### Website Views (8+ Files)
```
website/
├── home.blade.php
├── products/
│   ├── index.blade.php
│   └── show.blade.php
├── cart/
│   └── index.blade.php
├── checkout/
│   ├── index.blade.php
│   └── payment.blade.php
└── layouts/
    └── app.blade.php
```

---

## Database Structure

### Tables (27 Total)

#### 1. users
```sql
id, name, email, password, phone, gender, dob, avatar, 
email_verified_at, remember_token, timestamps
```

#### 2. user_addresses
```sql
id, user_id, address_line1, address_line2, city, state, 
postal_code, country, is_default, timestamps
```

#### 3. roles
```sql
id, name, slug, description, timestamps
```

#### 4. permissions
```sql
id, name, slug, description, timestamps
```

#### 5. role_users
```sql
id, role_id, user_id, timestamps
```

#### 6. permission_role
```sql
id, permission_id, role_id, timestamps
```

#### 7. categories
```sql
id, name, slug, description, parent_id, thumbnail, 
status, meta_title, meta_description, timestamps
```

#### 8. units
```sql
id, name, short_code, status, timestamps
```

#### 9. brands
```sql
id, name, slug, logo, status, timestamps
```

#### 10. items (products)
```sql
id, title, slug, category_id, subcategory_id, brand_id, 
unit_id, sku, barcode, stock_quantity, cost_price, 
selling_price, vat_applicable, vat_type, discount_type, 
discount_value, images, description, specifications, 
shipping_info, status, tags, meta_title, meta_description, 
timestamps
```

#### 11. bundles
```sql
id, name, description, base_price, discount_type, 
discount_amount, final_price, image, status, timestamps
```

#### 12. bundle_items
```sql
id, bundle_id, item_id, quantity, timestamps
```

#### 13. discounts
```sql
id, name, type, value, applies_to, target_id, 
valid_from, valid_to, status, timestamps
```

#### 14. coupons
```sql
id, code, type, value, min_order_amount, max_discount, 
usage_per_user, total_usage_limit, used_count, 
valid_until, eligible_customer_group, status, timestamps
```

#### 15. offers
```sql
id, title, type, conditions, valid_from, valid_to, 
banner_image, status, timestamps
```

#### 16. vats
```sql
id, name, type, value, applies_to, target_id, 
priority, status, timestamps
```

#### 17. orders
```sql
id, user_id, order_number, total_amount, subtotal, 
vat_amount, discount_amount, payment_method, 
payment_status, status, shipping_address, 
billing_address, tracking_code, timestamps
```

#### 18. order_items
```sql
id, order_id, item_id, quantity, price, total_price, 
timestamps
```

#### 19. order_payments
```sql
id, order_id, payment_method, transaction_id, amount, 
status, payment_date, timestamps
```

#### 20. order_trackings
```sql
id, order_id, status, description, location, 
tracked_at, timestamps
```

#### 21. memberships
```sql
id, name, price, duration_days, free_delivery, 
extra_discount, cashback_percentage, priority_support, 
status, timestamps
```

#### 22. membership_users
```sql
id, user_id, membership_id, start_date, end_date, 
status, timestamps
```

#### 23. wallets
```sql
id, user_id, balance, timestamps
```

#### 24. wallet_transactions
```sql
id, wallet_id, type, amount, description, timestamps
```

#### 25. wishlists
```sql
id, user_id, product_id, timestamps
unique(user_id, product_id)
```

#### 26. reviews
```sql
id, user_id, item_id, order_id, rating, comment, 
images, status, timestamps
```

#### 27. invoices
```sql
id, order_id, invoice_number, pdf_path, qr_code, 
timestamps
```

#### 28. activity_logs
```sql
id, user_id, model_type, model_id, action, changes, 
ip_address, user_agent, timestamps
```

#### 29. banners
```sql
id, title, image, link, position, status, timestamps
```

#### 30. payment_gateways
```sql
id, name, api_key, api_secret, merchant_id, 
is_active, is_sandbox, timestamps
```

#### 31. pages
```sql
id, title, slug, content, meta_title, meta_description, 
status, timestamps
```

#### 32. blogs
```sql
id, title, slug, content, author_id, featured_image, 
status, published_at, timestamps
```

#### 33. contacts
```sql
id, name, email, subject, message, status, 
replied_at, timestamps
```

#### 34. shipping_methods
```sql
id, name, cost, delivery_time, status, timestamps
```

#### 35. settings
```sql
id, key, value, timestamps
```

#### 36. notifications
```sql
id, user_id, type, data, read_at, timestamps
```

---

## API Endpoints

### Authentication
- `POST /login` - User login
- `POST /register` - User registration
- `POST /logout` - User logout
- `POST /password/email` - Forgot password
- `POST /password/reset` - Reset password

### Public API
- `GET /api/products` - Product listing
- `GET /api/products/{id}` - Product details
- `GET /api/categories` - Category list

---

## Services & Utilities

### 1. PaymentService
**Location:** `app/Services/PaymentService.php`

**Methods:**
- `processBkash($order)` - Process bKash payment
- `processNagad($order)` - Process Nagad payment
- `processCOD($order)` - Process Cash on Delivery
- `verifyPayment($transactionId)` - Verify payment status

### 2. InvoiceService
**Location:** `app/Services/InvoiceService.php`

**Methods:**
- `generate(Order $order)` - Create invoice record
- `generatePDF(Invoice $invoice)` - Generate PDF file
- `generateQRCode($data)` - Create QR code

### 3. CartService
**Location:** `app/Services/CartService.php`

**Methods:**
- `calculateTotal()` - Calculate cart total
- `applyVAT()` - Apply VAT rules
- `applyCoupon($code)` - Apply coupon discount
- `applyDiscount()` - Apply product discounts

---

## Security Features

### Authentication & Authorization
- Laravel Sanctum for API authentication
- Role-based access control (RBAC)
- Permission-based UI control
- Session management
- Device management

### Data Protection
- CSRF protection
- SQL injection prevention (Eloquent ORM)
- XSS protection (Blade escaping)
- Password hashing (bcrypt/argon2)
- Input validation
- Rate limiting

### Payment Security
- Encrypted payment credentials
- Secure payment gateway integration
- Transaction verification
- PCI DSS compliance considerations

### Activity Logging
- User action tracking
- Model change logging
- IP address recording
- User agent tracking

---

## Installation & Setup

### Requirements
- PHP 8.2+
- Composer
- MySQL 8.0+
- Node.js & NPM

### Installation Steps

1. **Clone Repository**
```bash
git clone <repository-url>
cd laravel_e_commerce
```

2. **Install Dependencies**
```bash
composer install
npm install
```

3. **Environment Configuration**
```bash
cp .env.example .env
php artisan key:generate
```

4. **Database Configuration**
Edit `.env`:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_ecommerce
DB_USERNAME=root
DB_PASSWORD=
```

5. **Mail Configuration**
```
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your_username
MAIL_PASSWORD=your_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=noreply@example.com
```

6. **Run Migrations**
```bash
php artisan migrate
```

7. **Run Seeders**
```bash
php artisan db:seed
```

8. **Storage Link**
```bash
php artisan storage:link
```

9. **Build Assets**
```bash
npm run build
```

10. **Start Server**
```bash
php artisan serve
```

### Default Credentials

**Admin:**
- Email: admin@example.com
- Password: password

**Customer:**
- Email: customer@example.com
- Password: password

---

## Performance Optimization

### Database
- Indexed columns (foreign keys, slugs, status)
- Eager loading relationships
- Query optimization
- Database connection pooling

### Caching
- Route caching
- Config caching
- View caching
- Query result caching

### Frontend
- Asset minification
- Image optimization
- Lazy loading
- CDN integration

---

## Maintenance

### Backup
- Database backup schedule
- File storage backup
- Configuration backup

### Monitoring
- Error logging
- Performance monitoring
- User activity tracking
- Payment transaction logs

### Updates
- Laravel framework updates
- Package updates
- Security patches
- Feature enhancements

---

## Support & Documentation

### Resources
- Laravel Documentation: https://laravel.com/docs
- Bootstrap Documentation: https://getbootstrap.com/docs
- DomPDF Documentation: https://github.com/barryvdh/laravel-dompdf

### Contact
- Technical Support: support@example.com
- Bug Reports: bugs@example.com

---

**Document Version:** 1.0
**Last Updated:** {{ date('Y-m-d') }}
**Author:** Development Team
