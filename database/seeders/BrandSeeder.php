<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
    public function run(): void
    {
        $brands = [
            ['name' => 'Penguin Books', 'slug' => 'penguin-books', 'status' => 'active'],
            ['name' => 'HarperCollins', 'slug' => 'harpercollins', 'status' => 'active'],
            ['name' => 'Simon & Schuster', 'slug' => 'simon-schuster', 'status' => 'active'],
            ['name' => 'Macmillan', 'slug' => 'macmillan', 'status' => 'active'],
            ['name' => 'Oxford University Press', 'slug' => 'oxford-university-press', 'status' => 'active'],
        ];

        foreach ($brands as $brand) {
            Brand::create($brand);
        }
    }
}
