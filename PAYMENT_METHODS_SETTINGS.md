# Payment Methods Settings

## Overview
Admin can now enable/disable payment methods from settings. Only active payment methods will appear on the checkout page.

## Features

### Admin Settings (`/admin/settings`)
- ✅ Enable/Disable bKash
- ✅ Enable/Disable Nagad
- ✅ Enable/Disable Cash on Delivery (COD)

### Checkout Page (`/checkout`)
- ✅ Shows only active payment methods
- ✅ Hides disabled payment methods
- ✅ Dynamic payment options based on admin settings

## How to Use

### Admin Panel

1. **Access Settings**: Go to `http://127.0.0.1:8000/admin/settings`

2. **Find Payment Methods Section**: Scroll to "Payment Methods" section

3. **Enable/Disable Payment Methods**:
   - Check/uncheck "bKash" to enable/disable
   - Check/uncheck "Nagad" to enable/disable
   - Check/uncheck "Cash on Delivery" to enable/disable

4. **Save**: Click "Save Settings" button

### Customer Checkout

When customers visit the checkout page:
- Only enabled payment methods will be displayed
- Disabled payment methods are completely hidden
- At least one payment method should be active

## Settings Keys

```php
'payment_bkash_active' => 1 or 0  // 1 = Active, 0 = Inactive
'payment_nagad_active' => 1 or 0  // 1 = Active, 0 = Inactive
'payment_cod_active' => 1 or 0    // 1 = Active, 0 = Inactive
```

## Default Values

All payment methods are **active by default**:
- bKash: Active (1)
- Nagad: Active (1)
- COD: Active (1)

## Implementation Details

### Files Updated

1. **SettingController.php**
   - Added payment method settings to index method
   - Loads payment method status from settings

2. **CheckoutController.php**
   - Passes `$paymentMethods` array to view
   - Checks each payment method status from settings

3. **admin/settings/index.blade.php**
   - Added "Payment Methods" section
   - Checkbox for each payment method
   - Visual indicators for each method

4. **website/checkout/index.blade.php**
   - Conditional display using `@if` directives
   - Shows only active payment methods
   - Maintains same UI/UX for active methods

## Example Scenarios

### Scenario 1: Only COD Active
Admin disables bKash and Nagad:
- Checkout shows only "Cash on Delivery" option
- Customers can only select COD

### Scenario 2: Only Online Payments
Admin disables COD:
- Checkout shows only bKash and Nagad
- Forces customers to use online payment

### Scenario 3: All Active (Default)
All payment methods enabled:
- Checkout shows all three options
- Customers have full choice

## Database

Settings are stored in `settings` table:

```
key: payment_bkash_active, value: 1
key: payment_nagad_active, value: 1
key: payment_cod_active, value: 1
```

## Testing

1. Go to `/admin/settings`
2. Uncheck "bKash"
3. Save settings
4. Visit `/checkout`
5. Verify bKash option is hidden
6. Only Nagad and COD should appear

## Notes

- Changes take effect immediately
- No cache clearing required
- Settings persist in database
- Safe to enable/disable anytime
- Recommended to keep at least one method active
