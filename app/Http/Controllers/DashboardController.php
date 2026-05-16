<?php

namespace App\Http\Controllers;

use App\Models\Order;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function orders()
    {
        $orders = Order::where('user_id', auth()->id())
            ->latest()
            ->get();

        return view('dashboard.orders', [
            'orders' => $orders
        ]);
    }
}
