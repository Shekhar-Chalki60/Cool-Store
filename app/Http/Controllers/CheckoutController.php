<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);

        if(count($cart) === 0) {

            return redirect()->route('cart');
        }

        return view('pages.checkout', [
            'cart' => $cart
        ]);
    }

    public function store(Request $request)
    {
        $cart = session()->get('cart', []);

        if(count($cart) === 0) {

            return redirect()->route('cart');
        }

        $request->validate([
            'full_name' => 'required|max:255',
            'email' => 'required|email',
            'phone' => 'required|max:20',
            'address' => 'required',
        ]);

        $total = 0;

        foreach($cart as $item) {

            $total += $item['price'] * $item['quantity'];
        }

        $order = Order::create([
            'user_id' => auth()->id(),
            'full_name' => $request->full_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'total' => $total,
            'status' => 'pending',
        ]);

        foreach($cart as $productId => $item) {

            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $productId,
                'quantity' => $item['quantity'],
                'price' => $item['price'],
            ]);
        }

        return redirect()->route('payment.show', $order);
    }
}
