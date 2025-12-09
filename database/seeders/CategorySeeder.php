<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $fiction = Category::create([
            'name' => 'Fiction',
            'slug' => 'fiction',
            'description' => 'Fictional books and novels',
            'status' => 'active'
        ]);

        Category::create([
            'name' => 'Mystery & Thriller',
            'slug' => 'mystery-thriller',
            'parent_id' => $fiction->id,
            'status' => 'active'
        ]);

        Category::create([
            'name' => 'Romance',
            'slug' => 'romance',
            'parent_id' => $fiction->id,
            'status' => 'active'
        ]);

        $nonFiction = Category::create([
            'name' => 'Non-Fiction',
            'slug' => 'non-fiction',
            'description' => 'Educational and informative books',
            'status' => 'active'
        ]);

        Category::create([
            'name' => 'Biography',
            'slug' => 'biography',
            'parent_id' => $nonFiction->id,
            'status' => 'active'
        ]);

        Category::create([
            'name' => 'Self-Help',
            'slug' => 'self-help',
            'parent_id' => $nonFiction->id,
            'status' => 'active'
        ]);

        Category::create([
            'name' => 'Children Books',
            'slug' => 'children-books',
            'description' => 'Books for children',
            'status' => 'active'
        ]);

        Category::create([
            'name' => 'Academic',
            'slug' => 'academic',
            'description' => 'Academic and textbooks',
            'status' => 'active'
        ]);
    }
}
