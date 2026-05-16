<?php

namespace App\Http\Controllers;

use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $featuredProducts = Product::where('is_featured', true)
            ->latest()
            ->take(4)
            ->get();

        return view('pages.home', [
            'featuredProducts' => $featuredProducts
        ]);
    }
}
