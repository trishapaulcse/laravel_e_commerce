<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Banner;

class BannerSeeder extends Seeder
{
    public function run(): void
    {
        Banner::create([
            'title' => 'Summer Book Sale',
            'link' => '/products',
            'order' => 1,
            'status' => 'active'
        ]);

        Banner::create([
            'title' => 'New Arrivals',
            'link' => '/products',
            'order' => 2,
            'status' => 'active'
        ]);
    }
}
