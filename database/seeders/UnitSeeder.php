<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Unit;

class UnitSeeder extends Seeder
{
    public function run(): void
    {
        $units = [
            ['name' => 'Piece', 'short_code' => 'PCS', 'status' => 'active'],
            ['name' => 'Set', 'short_code' => 'SET', 'status' => 'active'],
            ['name' => 'Box', 'short_code' => 'BOX', 'status' => 'active'],
        ];

        foreach ($units as $unit) {
            Unit::create($unit);
        }
    }
}
