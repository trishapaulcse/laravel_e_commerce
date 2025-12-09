# Database Migrations - Complete List

## All Migration Files (15 Total)

### Laravel Default Migrations (3)
1. `0001_01_01_000000_create_users_table.php` ✓
2. `0001_01_01_000001_create_cache_table.php` ✓
3. `0001_01_01_000002_create_jobs_table.php` ✓

### E-Commerce Migrations (12)
4. `2025_01_01_000001_create_ecommerce_tables.php` ✓
5. `2025_01_02_000001_create_additional_tables.php` ✓
6. `2025_01_03_000001_create_reviews_table.php` ✓
7. `2025_01_04_000001_create_final_tables.php` ✓
8. `2025_01_05_000001_create_payment_gateways_table.php` ✓
9. `2025_01_06_000001_create_cms_tables.php` ✓
10. `2024_01_08_000007_create_wishlists_and_tracking_tables.php` ✓
11. `2025_12_04_062700_create_products_table.php` ✓
12. `2025_12_04_062858_create_categories_table.php` ✓
13. `2025_12_04_063304_add_category_id_to_products_table.php` ✓
14. `2025_12_04_063538_create_orders_table.php` ✓
15. `2025_12_04_063659_create_order_items_table.php` ✓

## Tables Created (36+ Tables)

### User Management
- users
- user_addresses
- roles
- permissions
- role_users
- permission_role

### Product Management
- categories
- items (products)
- units
- brands
- item_images

### Bundles & Offers
- bundles
- bundle_items
- offers

### Pricing & Discounts
- discounts
- coupons
- vats

### Orders
- orders
- order_items
- order_payments
- order_trackings

### Membership & Wallet
- memberships
- membership_users
- wallets
- wallet_transactions

### Wishlist & Reviews
- wishlists
- reviews

### Invoices
- invoices

### CMS
- pages
- blogs
- contacts
- banners

### System
- activity_logs
- payment_gateways
- shipping_methods
- settings
- notifications

## Migration Commands

### Run All Migrations
```bash
php artisan migrate
```

### Fresh Migration (Drop all tables and recreate)
```bash
php artisan migrate:fresh
```

### Fresh Migration with Seeders
```bash
php artisan migrate:fresh --seed
```

### Rollback Last Migration
```bash
php artisan migrate:rollback
```

### Reset All Migrations
```bash
php artisan migrate:reset
```

## Verification Status
✅ All 15 migration files exist
✅ All 36+ tables will be created
✅ All foreign keys defined
✅ All indexes created
✅ All timestamps included

**Migrations Status: COMPLETE**
