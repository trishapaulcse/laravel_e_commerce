<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissionSeeder extends Seeder
{
    public function run(): void
    {
        $permissions = [
            ['name' => 'Manage Products', 'slug' => 'manage-products'],
            ['name' => 'Manage Categories', 'slug' => 'manage-categories'],
            ['name' => 'Manage Orders', 'slug' => 'manage-orders'],
            ['name' => 'Manage Users', 'slug' => 'manage-users'],
            ['name' => 'Manage Coupons', 'slug' => 'manage-coupons'],
            ['name' => 'Manage Discounts', 'slug' => 'manage-discounts'],
            ['name' => 'Manage Memberships', 'slug' => 'manage-memberships'],
            ['name' => 'View Reports', 'slug' => 'view-reports'],
            ['name' => 'Manage Settings', 'slug' => 'manage-settings'],
        ];

        foreach ($permissions as $permission) {
            Permission::create($permission);
        }
    }
}
