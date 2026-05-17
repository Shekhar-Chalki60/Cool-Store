<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function show(Product $product)
    {
        $relatedProducts = Product::where('id', '!=', $product->id)
            ->latest()
            ->take(4)
            ->get();

        return view('pages.product', [
            'product' => $product,
            'relatedProducts' => $relatedProducts,
        ]);
    }
}
