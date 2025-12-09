<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vat;

class VatSeeder extends Seeder
{
    public function run(): void
    {
        Vat::create([
            'name' => 'Standard VAT',
            'type' => 'percentage',
            'value' => 5,
            'applies_to' => 'all',
            'priority' => 1,
            'status' => 'active'
        ]);
    }
}
