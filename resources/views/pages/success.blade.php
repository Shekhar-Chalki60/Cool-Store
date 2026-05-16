@extends('layouts.app')

@section('content')

<section class="min-h-[80vh] flex items-center justify-center px-6">

    <div class="max-w-2xl mx-auto text-center">

        <div class="text-8xl mb-8">
            ✅
        </div>

        <p class="text-zinc-500 uppercase tracking-[0.3em] text-xs mb-4">
            Payment Successful
        </p>

        <h1 class="text-6xl font-bold mb-6">
            Thank You!
        </h1>

        <p class="text-zinc-400 text-lg mb-10 leading-relaxed">

            Your order has been placed successfully.
            We’re preparing your items for shipment.

        </p>

        <div class="bg-zinc-900 border border-zinc-800 rounded-3xl p-8 mb-10">

            <div class="flex justify-between mb-4">

                <p class="text-zinc-400">
                    Order ID
                </p>

                <p class="font-semibold">
                    #{{ $order->id }}
                </p>

            </div>

            <div class="flex justify-between">

                <p class="text-zinc-400">
                    Total Paid
                </p>

                <p class="text-2xl font-bold">
                    ₹{{ number_format($order->total) }}
                </p>

            </div>

        </div>

        <a
            href="{{ route('shop') }}"
            class="bg-white text-black px-10 py-5 rounded-full font-semibold inline-block hover:scale-105 transition"
        >
            Continue Shopping
        </a>

    </div>

</section>

@endsection
