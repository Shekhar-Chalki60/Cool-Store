<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::query();

        // Search

        if ($request->search) {

            $query->where('name', 'like', '%' . $request->search . '%');

        }

        // Category

        if ($request->category) {

            $query->whereHas('category', function ($q) use ($request) {

                $q->where('slug', $request->category);

            });

        }

        // Sorting

        if ($request->sort == 'low-high') {

            $query->orderBy('price');

        }

        elseif ($request->sort == 'high-low') {

            $query->orderByDesc('price');

        }

        else {

            $query->latest();

        }

        $products = $query->paginate(12);

        $categories = Category::all();

        return view('pages.shop', [
            'products' => $products,
            'categories' => $categories,
        ]);
    }
}
