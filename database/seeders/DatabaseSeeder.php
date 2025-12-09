<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            PermissionSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            CustomerProfileSeeder::class,
            UnitSeeder::class,
            BrandSeeder::class,
            CategorySeeder::class,
            ProductSeeder::class,
            CouponSeeder::class,
            DiscountSeeder::class,
            VatSeeder::class,
            MembershipSeeder::class,
            BannerSeeder::class,
            PaymentGatewaySeeder::class,
            SettingSeeder::class,
        ]);
    }
}
