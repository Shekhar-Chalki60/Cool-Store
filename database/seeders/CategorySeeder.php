<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::create([
            'name' => 'T-Shirts',
            'slug' => 't-shirts',
            'description' => 'Minimal oversized t-shirts',
        ]);

        Category::create([
            'name' => 'Hoodies',
            'slug' => 'hoodies',
            'description' => 'Premium heavyweight hoodies',
        ]);

        Category::create([
            'name' => 'Caps',
            'slug' => 'caps',
            'description' => 'Streetwear caps collection',
        ]);

        Category::create([
            'name' => 'Shoes',
            'slug' => 'shoes',
            'description' => 'Urban footwear essentials',
        ]);
    }
}
