# VAT & Shipping System Implementation

## Overview
Implemented settings-based VAT calculation and city-wise shipping cost management system.

## Features Implemented

### 1. Settings Table
- Stores VAT percentage
- Stores default inside/outside Dhaka shipping costs
- Key-value pair structure for flexibility

### 2. Cities Table
- City name
- Area type (inside/outside Dhaka)
- City-specific shipping cost
- Status (active/inactive)

### 3. VAT Calculation
- **Source**: Settings table (`vat_percentage`)
- **Applied**: After product discounts and coupon discounts
- **Formula**: `(amount * vat_percentage) / 100`

### 4. Shipping Cost Calculation
**Priority Order**:
1. City-specific shipping cost (if city selected)
2. Default inside/outside shipping cost from settings
3. Fallback: ৳50

## Admin Features

### Cities Management (`/admin/cities`)
- **List**: View all cities with shipping costs
- **Create**: Add new city with area type and shipping cost
- **Edit**: Update city details
- **Delete**: Remove city
- **Status**: Enable/disable cities

### Settings Management (`/admin/settings`)
- **VAT Percentage**: Set global VAT rate
- **Inside Dhaka Shipping**: Default cost for inside Dhaka
- **Outside Dhaka Shipping**: Default cost for outside Dhaka

## Database Schema

### Settings Table
```
- id
- key (unique)
- value
- created_at
- updated_at
```

### Cities Table
```
- id
- name
- area_type (enum: inside, outside)
- shipping_cost (decimal)
- status (boolean)
- created_at
- updated_at
```

## Updated Controllers

### CartController
- Uses `Setting::get('vat_percentage')` for VAT calculation
- Removed dependency on `vats` table

### CheckoutController
- Passes `$cities` to checkout view
- Calculates shipping based on selected city
- Stores `selected_city_id` in session during checkout
- Uses `getShippingCost($cityId)` method

## Routes Added

```php
// Admin
Route::resource('admin.cities', CityController::class);

// Settings already exists
Route::get('admin.settings', [SettingController::class, 'index']);
Route::post('admin.settings', [SettingController::class, 'update']);
```

## Views Created

1. **admin/cities/index.blade.php** - List all cities
2. **admin/cities/create.blade.php** - Add new city
3. **admin/cities/edit.blade.php** - Edit city
4. **admin/settings/index.blade.php** - Updated with VAT & shipping fields

## Usage

### Admin Setup
1. Go to `/admin/settings`
2. Set VAT percentage (e.g., 15%)
3. Set default inside/outside shipping costs
4. Go to `/admin/cities`
5. Add cities with specific shipping costs

### Checkout Flow
1. Customer selects city from dropdown
2. System calculates shipping based on city
3. VAT applied on subtotal after discounts
4. Final total = Subtotal - Discounts - Coupon + VAT + Shipping

## Price Calculation Flow

```
1. Subtotal = Sum of (Product Price × Quantity)
2. Product Discount = Applied per product
3. After Product Discount = Subtotal - Product Discounts
4. Coupon Discount = Applied on After Product Discount
5. After Coupon = After Product Discount - Coupon Discount
6. VAT = (After Coupon × VAT%) / 100
7. Shipping = City-specific or default cost
8. Final Total = After Coupon + VAT + Shipping
```

## Models

### Setting Model
```php
Setting::get('key', 'default_value')
Setting::set('key', 'value')
```

### City Model
```php
$fillable = ['name', 'area_type', 'shipping_cost', 'status']
```

## API Methods

### CartController
- `calculateVAT($amount)` - Returns VAT amount from settings

### CheckoutController
- `calculateVAT($amount)` - Returns VAT amount from settings
- `getShippingCost($cityId)` - Returns shipping cost for city or default

## Default Values
- VAT: 0%
- Inside Shipping: ৳50
- Outside Shipping: ৳100

## Notes
- City-specific shipping overrides default settings
- VAT is always percentage-based from settings
- Inactive cities don't appear in checkout dropdown
- Session stores selected city during checkout process
