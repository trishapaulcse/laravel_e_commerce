# Admin CRUD Operations Guide

## ✅ Already Implemented

### 1. Cities CRUD (Shipping Management)
**URL**: `/admin/cities`

**Features**:
- ✅ List all cities with shipping costs
- ✅ Create new city
- ✅ Edit city details
- ✅ Delete city
- ✅ Set area type (inside/outside Dhaka)
- ✅ Set custom shipping cost per city
- ✅ Enable/disable cities

**Files**:
- Controller: `app/Http/Controllers/Admin/CityController.php`
- Views:
  - `resources/views/admin/cities/index.blade.php`
  - `resources/views/admin/cities/create.blade.php`
  - `resources/views/admin/cities/edit.blade.php`
- Model: `app/Models/City.php`
- Route: `Route::resource('cities', CityController::class)`

### 2. Settings (VAT & Shipping)
**URL**: `/admin/settings`

**Features**:
- ✅ VAT Percentage setting
- ✅ Inside Dhaka default shipping cost
- ✅ Outside Dhaka default shipping cost
- ✅ Company information
- ✅ Social media links
- ✅ Email configuration
- ✅ SMS configuration

**Files**:
- Controller: `app/Http/Controllers/Admin/SettingController.php`
- View: `resources/views/admin/settings/index.blade.php`
- Model: `app/Models/Setting.php`
- Routes:
  - `GET /admin/settings` - View settings
  - `POST /admin/settings` - Update settings

## How to Use

### Cities Management

1. **Access Cities**: Go to `http://127.0.0.1:8000/admin/cities`

2. **Add New City**:
   - Click "Add City" button
   - Enter city name
   - Select area type (Inside/Outside Dhaka)
   - Set shipping cost
   - Check "Active" to enable
   - Click "Save"

3. **Edit City**:
   - Click "Edit" next to any city
   - Update details
   - Click "Update"

4. **Delete City**:
   - Click "Delete" next to any city
   - Confirm deletion

### Settings Management

1. **Access Settings**: Go to `http://127.0.0.1:8000/admin/settings`

2. **Update VAT**:
   - Find "Tax & Shipping" section
   - Enter VAT percentage (e.g., 15 for 15%)
   - Click "Save Settings"

3. **Update Default Shipping**:
   - Set "Inside Dhaka Shipping" cost
   - Set "Outside Dhaka Shipping" cost
   - Click "Save Settings"

## Database Tables

### Cities Table
```
- id
- name (varchar)
- area_type (enum: inside, outside)
- shipping_cost (decimal)
- status (boolean)
- created_at
- updated_at
```

### Settings Table
```
- id
- key (varchar, unique)
- value (text)
- created_at
- updated_at
```

## Settings Keys
- `vat_percentage` - VAT rate (e.g., 15)
- `inside_shipping_cost` - Default inside Dhaka shipping
- `outside_shipping_cost` - Default outside Dhaka shipping

## Other Admin CRUD Already Available

All these are already implemented in your system:

1. **Categories** - `/admin/categories`
2. **Products** - `/admin/products`
3. **Orders** - `/admin/orders`
4. **Coupons** - `/admin/coupons`
5. **Memberships** - `/admin/memberships`
6. **Bundles** - `/admin/bundles`
7. **Units** - `/admin/units`
8. **Brands** - `/admin/brands`
9. **Discounts** - `/admin/discounts`
10. **VAT** - `/admin/vats` (old system, now use Settings)
11. **Offers** - `/admin/offers`
12. **Roles** - `/admin/roles`
13. **Banners** - `/admin/banners`
14. **Payment Gateways** - `/admin/payment-gateways`
15. **CMS Pages** - `/admin/pages`
16. **Blogs** - `/admin/blogs`
17. **Contacts** - `/admin/contacts`
18. **Customers** - `/admin/customers`
19. **Shipping Methods** - `/admin/shipping-methods`

## Quick Access Links

- Dashboard: `http://127.0.0.1:8000/admin/dashboard`
- Cities: `http://127.0.0.1:8000/admin/cities`
- Settings: `http://127.0.0.1:8000/admin/settings`
- Products: `http://127.0.0.1:8000/admin/products`
- Orders: `http://127.0.0.1:8000/admin/orders`
- Coupons: `http://127.0.0.1:8000/admin/coupons`

## Notes

- Cities CRUD is fully functional with create, read, update, delete operations
- Settings page includes VAT and shipping configuration
- VAT is now managed through Settings (not the old VATs table)
- City-specific shipping costs override default settings
- All admin routes require authentication
