<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Permission;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $superAdmin = Role::create([
            'name' => 'Super Admin',
            'slug' => 'super-admin',
            'description' => 'Full system access'
        ]);

        $manager = Role::create([
            'name' => 'Manager',
            'slug' => 'manager',
            'description' => 'Manage products and orders'
        ]);

        $accountant = Role::create([
            'name' => 'Accountant',
            'slug' => 'accountant',
            'description' => 'View reports and manage orders'
        ]);

        $publisher = Role::create([
            'name' => 'Publisher',
            'slug' => 'publisher',
            'description' => 'Manage content and products'
        ]);

        $superAdmin->permissions()->attach(Permission::all());
        $manager->permissions()->attach(Permission::whereIn('slug', ['manage-products', 'manage-categories', 'manage-orders'])->get());
        $accountant->permissions()->attach(Permission::whereIn('slug', ['view-reports', 'manage-orders'])->get());
        $publisher->permissions()->attach(Permission::whereIn('slug', ['manage-products', 'manage-categories'])->get());
    }
}
