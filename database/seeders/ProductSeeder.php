<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'title' => 'The Great Gatsby',
                'slug' => 'the-great-gatsby',
                'category_id' => 1,
                'brand_id' => 1,
                'unit_id' => 1,
                'sku' => 'BOOK-001',
                'price' => 450.00,
                'cost_price' => 300.00,
                'stock' => 50,
                'description' => 'A classic American novel by F. Scott Fitzgerald',
                'status' => 'active'
            ],
            [
                'title' => '1984',
                'slug' => '1984',
                'category_id' => 1,
                'brand_id' => 1,
                'unit_id' => 1,
                'sku' => 'BOOK-002',
                'price' => 550.00,
                'cost_price' => 350.00,
                'stock' => 40,
                'description' => 'Dystopian novel by George Orwell',
                'status' => 'active'
            ],
            [
                'title' => 'To Kill a Mockingbird',
                'slug' => 'to-kill-a-mockingbird',
                'category_id' => 1,
                'brand_id' => 2,
                'unit_id' => 1,
                'sku' => 'BOOK-003',
                'price' => 500.00,
                'cost_price' => 320.00,
                'stock' => 35,
                'description' => 'Classic novel by Harper Lee',
                'status' => 'active'
            ],
            [
                'title' => 'The Da Vinci Code',
                'slug' => 'the-da-vinci-code',
                'category_id' => 2,
                'brand_id' => 3,
                'unit_id' => 1,
                'sku' => 'BOOK-004',
                'price' => 650.00,
                'cost_price' => 400.00,
                'stock' => 60,
                'description' => 'Mystery thriller by Dan Brown',
                'status' => 'active'
            ],
            [
                'title' => 'Pride and Prejudice',
                'slug' => 'pride-and-prejudice',
                'category_id' => 3,
                'brand_id' => 1,
                'unit_id' => 1,
                'sku' => 'BOOK-005',
                'price' => 400.00,
                'cost_price' => 250.00,
                'stock' => 45,
                'description' => 'Romantic novel by Jane Austen',
                'status' => 'active'
            ],
            [
                'title' => 'Steve Jobs Biography',
                'slug' => 'steve-jobs-biography',
                'category_id' => 5,
                'brand_id' => 3,
                'unit_id' => 1,
                'sku' => 'BOOK-006',
                'price' => 850.00,
                'cost_price' => 550.00,
                'stock' => 30,
                'description' => 'Biography of Steve Jobs by Walter Isaacson',
                'status' => 'active'
            ],
            [
                'title' => 'Atomic Habits',
                'slug' => 'atomic-habits',
                'category_id' => 6,
                'brand_id' => 2,
                'unit_id' => 1,
                'sku' => 'BOOK-007',
                'price' => 750.00,
                'cost_price' => 480.00,
                'stock' => 70,
                'description' => 'Self-help book by James Clear',
                'status' => 'active'
            ],
            [
                'title' => 'Harry Potter and the Philosopher\'s Stone',
                'slug' => 'harry-potter-philosophers-stone',
                'category_id' => 7,
                'brand_id' => 1,
                'unit_id' => 1,
                'sku' => 'BOOK-008',
                'price' => 600.00,
                'cost_price' => 380.00,
                'stock' => 80,
                'description' => 'First book in Harry Potter series by J.K. Rowling',
                'status' => 'active'
            ],
            [
                'title' => 'Introduction to Algorithms',
                'slug' => 'introduction-to-algorithms',
                'category_id' => 8,
                'brand_id' => 5,
                'unit_id' => 1,
                'sku' => 'BOOK-009',
                'price' => 1200.00,
                'cost_price' => 800.00,
                'stock' => 25,
                'description' => 'Computer Science textbook',
                'status' => 'active'
            ],
            [
                'title' => 'The Alchemist',
                'slug' => 'the-alchemist',
                'category_id' => 1,
                'brand_id' => 2,
                'unit_id' => 1,
                'sku' => 'BOOK-010',
                'price' => 480.00,
                'cost_price' => 300.00,
                'stock' => 55,
                'description' => 'Novel by Paulo Coelho',
                'status' => 'active'
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
