<?php

use App\Models\Product;
use App\Models\Category;

/*
|--------------------------------------------------------------------------
| Get Categories
|--------------------------------------------------------------------------
*/

$tshirts = Category::where('slug', 't-shirts')->first();
$hoodies = Category::where('slug', 'hoodies')->first();
$caps = Category::where('slug', 'caps')->first();
$shoes = Category::where('slug', 'shoes')->first();

/*
|--------------------------------------------------------------------------
| T-SHIRTS
|--------------------------------------------------------------------------
*/

Product::create([
    'category_id' => $tshirts->id,
    'name' => 'Essential White Tee',
    'slug' => 'essential-white-tee',
    'description' => 'Minimal oversized everyday t-shirt.',
    'price' => 1499,
    'image' => 'products/tshirt-1.jpg',
    'is_featured' => true,
]);

Product::create([
    'category_id' => $tshirts->id,
    'name' => 'Urban Black Tee',
    'slug' => 'urban-black-tee',
    'description' => 'Street-inspired heavyweight black t-shirt.',
    'price' => 1699,
    'image' => 'products/tshirt-2.jpg',
    'is_featured' => true,
]);

Product::create([
    'category_id' => $tshirts->id,
    'name' => 'Oversized Sand Tee',
    'slug' => 'oversized-sand-tee',
    'description' => 'Relaxed fit premium cotton t-shirt.',
    'price' => 1799,
    'image' => 'products/tshirt-3.jpg',
    'is_featured' => false,
]);

Product::create([
    'category_id' => $tshirts->id,
    'name' => 'Tokyo Graphic Tee',
    'slug' => 'tokyo-graphic-tee',
    'description' => 'Minimal Japanese-inspired streetwear tee.',
    'price' => 1899,
    'image' => 'products/tshirt-4.jpg',
    'is_featured' => false,
]);

Product::create([
    'category_id' => $tshirts->id,
    'name' => 'Midnight Oversized Tee',
    'slug' => 'midnight-oversized-tee',
    'description' => 'Dark oversized streetwear essential.',
    'price' => 1999,
    'image' => 'products/tshirt-5.jpg',
    'is_featured' => false,
]);

Product::create([
    'category_id' => $tshirts->id,
    'name' => 'Vintage Washed Tee',
    'slug' => 'vintage-washed-tee',
    'description' => 'Vintage washed cotton oversized t-shirt.',
    'price' => 2199,
    'image' => 'products/tshirt-6.jpg',
    'is_featured' => true,
]);

Product::create([
    'category_id' => $tshirts->id,
    'name' => 'Street Motion Tee',
    'slug' => 'street-motion-tee',
    'description' => 'Modern urban style oversized t-shirt.',
    'price' => 1599,
    'image' => 'products/tshirt-7.jpg',
    'is_featured' => false,
]);

Product::create([
    'category_id' => $tshirts->id,
    'name' => 'Neutral Beige Tee',
    'slug' => 'neutral-beige-tee',
    'description' => 'Soft premium cotton neutral tee.',
    'price' => 1499,
    'image' => 'products/tshirt-8.jpg',
    'is_featured' => false,
]);

/*
|--------------------------------------------------------------------------
| HOODIES
|--------------------------------------------------------------------------
*/

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
    'category_id' => $hoodies->id,
    'name' => 'Ash Grey Hoodie',
    'slug' => 'ash-grey-hoodie',
    'description' => 'Minimal heavyweight ash grey hoodie.',
    'price' => 3199,
    'image' => 'products/hoodie-2.jpg',
    'is_featured' => true,
]);

Product::create([
    'category_id' => $hoodies->id,
    'name' => 'Street Essential Hoodie',
    'slug' => 'street-essential-hoodie',
    'description' => 'Relaxed fit urban streetwear hoodie.',
    'price' => 3399,
    'image' => 'products/hoodie-3.jpg',
    'is_featured' => false,
]);

Product::create([
    'category_id' => $hoodies->id,
    'name' => 'Minimal Cream Hoodie',
    'slug' => 'minimal-cream-hoodie',
    'description' => 'Luxury cream oversized hoodie.',
    'price' => 3499,
    'image' => 'products/hoodie-4.jpg',
    'is_featured' => false,
]);

Product::create([
    'category_id' => $hoodies->id,
    'name' => 'Urban Motion Hoodie',
    'slug' => 'urban-motion-hoodie',
    'description' => 'Modern relaxed fit hoodie.',
    'price' => 3599,
    'image' => 'products/hoodie-5.jpg',
    'is_featured' => true,
]);

Product::create([
    'category_id' => $hoodies->id,
    'name' => 'Washed Brown Hoodie',
    'slug' => 'washed-brown-hoodie',
    'description' => 'Vintage washed oversized hoodie.',
    'price' => 3299,
    'image' => 'products/hoodie-6.jpg',
    'is_featured' => false,
]);

Product::create([
    'category_id' => $hoodies->id,
    'name' => 'Tokyo Street Hoodie',
    'slug' => 'tokyo-street-hoodie',
    'description' => 'Japanese inspired premium hoodie.',
    'price' => 3699,
    'image' => 'products/hoodie-7.jpg',
    'is_featured' => false,
]);

Product::create([
    'category_id' => $hoodies->id,
    'name' => 'Core Essential Hoodie',
    'slug' => 'core-essential-hoodie',
    'description' => 'Heavyweight luxury street hoodie.',
    'price' => 3899,
    'image' => 'products/hoodie-8.jpg',
    'is_featured' => true,
]);

/*
|--------------------------------------------------------------------------
| CAPS
|--------------------------------------------------------------------------
*/

Product::create([
    'category_id' => $caps->id,
    'name' => 'Classic Black Cap',
    'slug' => 'classic-black-cap',
    'description' => 'Minimal everyday streetwear cap.',
    'price' => 999,
    'image' => 'products/cap-1.jpg',
    'is_featured' => true,
]);

Product::create([
    'category_id' => $caps->id,
    'name' => 'Urban Essential Cap',
    'slug' => 'urban-essential-cap',
    'description' => 'Premium embroidered cap.',
    'price' => 1199,
    'image' => 'products/cap-2.jpg',
    'is_featured' => false,
]);

Product::create([
    'category_id' => $caps->id,
    'name' => 'Street Logo Cap',
    'slug' => 'street-logo-cap',
    'description' => 'Modern curved visor cap.',
    'price' => 1299,
    'image' => 'products/cap-3.jpg',
    'is_featured' => true,
]);

Product::create([
    'category_id' => $caps->id,
    'name' => 'Vintage Brown Cap',
    'slug' => 'vintage-brown-cap',
    'description' => 'Vintage washed street cap.',
    'price' => 1399,
    'image' => 'products/cap-4.jpg',
    'is_featured' => false,
]);

Product::create([
    'category_id' => $caps->id,
    'name' => 'Tokyo Street Cap',
    'slug' => 'tokyo-street-cap',
    'description' => 'Minimal Japanese-inspired cap.',
    'price' => 1499,
    'image' => 'products/cap-5.jpg',
    'is_featured' => false,
]);

Product::create([
    'category_id' => $caps->id,
    'name' => 'Signature Snapback',
    'slug' => 'signature-snapback',
    'description' => 'Premium luxury snapback cap.',
    'price' => 1599,
    'image' => 'products/cap-6.jpg',
    'is_featured' => true,
]);

/*
|--------------------------------------------------------------------------
| SHOES
|--------------------------------------------------------------------------
*/

Product::create([
    'category_id' => $shoes->id,
    'name' => 'Urban Runner',
    'slug' => 'urban-runner',
    'description' => 'Modern lightweight street sneakers.',
    'price' => 4999,
    'image' => 'products/shoe-1.jpg',
    'is_featured' => true,
]);

Product::create([
    'category_id' => $shoes->id,
    'name' => 'Midnight Sneakers',
    'slug' => 'midnight-sneakers',
    'description' => 'All-black minimal sneakers.',
    'price' => 5299,
    'image' => 'products/shoe-2.jpg',
    'is_featured' => true,
]);

Product::create([
    'category_id' => $shoes->id,
    'name' => 'Street High Tops',
    'slug' => 'street-high-tops',
    'description' => 'Premium high-top urban sneakers.',
    'price' => 5599,
    'image' => 'products/shoe-3.jpg',
    'is_featured' => false,
]);

Product::create([
    'category_id' => $shoes->id,
    'name' => 'Minimal White Sneakers',
    'slug' => 'minimal-white-sneakers',
    'description' => 'Luxury clean white sneakers.',
    'price' => 5899,
    'image' => 'products/shoe-4.jpg',
    'is_featured' => true,
]);

Product::create([
    'category_id' => $shoes->id,
    'name' => 'Street Motion Sneakers',
    'slug' => 'street-motion-sneakers',
    'description' => 'Performance-inspired street footwear.',
    'price' => 6199,
    'image' => 'products/shoe-5.jpg',
    'is_featured' => false,
]);

Product::create([
    'category_id' => $shoes->id,
    'name' => 'Tokyo Runners',
    'slug' => 'tokyo-runners',
    'description' => 'Japanese-inspired urban sneakers.',
    'price' => 6499,
    'image' => 'products/shoe-6.jpg',
    'is_featured' => true,
]);

Product::create([
    'category_id' => $shoes->id,
    'name' => 'Core Street Sneakers',
    'slug' => 'core-street-sneakers',
    'description' => 'Luxury everyday street sneakers.',
    'price' => 6799,
    'image' => 'products/shoe-7.jpg',
    'is_featured' => false,
]);

Product::create([
    'category_id' => $shoes->id,
    'name' => 'Shadow Grey Sneakers',
    'slug' => 'shadow-grey-sneakers',
    'description' => 'Minimal shadow grey sneakers.',
    'price' => 6999,
    'image' => 'products/shoe-8.jpg',
    'is_featured' => true,
]);
