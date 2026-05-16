<?php

namespace App\Http\Controllers;

use App\Models\Order;

class PaymentController extends Controller
{
    public function show(Order $order)
    {
        return view('pages.payment', [
            'order' => $order
        ]);
    }

    public function process(Order $order)
    {
        $order->update([
            'payment_method' => 'fake_gateway',
            'payment_status' => 'paid',
            'status' => 'processing',
        ]);

        session()->forget('cart');

        return redirect()->route('payment.success', $order);
    }

    public function success(Order $order)
    {
        return view('pages.success', [
            'order' => $order
        ]);
    }
}
