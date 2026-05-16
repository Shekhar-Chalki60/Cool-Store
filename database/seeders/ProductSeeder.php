<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $hoodies = Category::where('slug', 'hoodies')->first();

        $shirts = Category::where('slug', 't-shirts')->first();

        Product::create([
            'category_id' => $hoodies->id,
            'name' => 'Oversized Black Hoodie',
            'slug' => 'oversized-black-hoodie',
            'description' => 'Premium oversized hoodie with heavyweight fabric.',
            'price' => 2999,
            'image' => 'products/hoodie-1.jpg',
            'is_featured' => true,
        ]);

        Product::create([
            'category_id' => $shirts->id,
            'name' => 'Essential White T-Shirt',
            'slug' => 'essential-white-tshirt',
            'description' => 'Minimal everyday oversized t-shirt.',
            'price' => 1499,
            'image' => 'products/tshirt-1.jpg',
            'is_featured' => true,
        ]);

        Product::create([
            'category_id' => $hoodies->id,
            'name' => 'Streetwear Grey Hoodie',
            'slug' => 'streetwear-grey-hoodie',
            'description' => 'Comfort-focused relaxed fit hoodie.',
            'price' => 3499,
            'image' => 'products/hoodie-2.jpg',
            'is_featured' => true,
        ]);
    }
}
