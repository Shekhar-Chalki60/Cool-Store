@extends('layouts.app')

@section('content')

<section class="min-h-[80vh] flex items-center justify-center px-6 py-20">

    <div class="max-w-3xl w-full text-center">

        <!-- Success Circle -->

        <div class="w-32 h-32 rounded-full bg-gradient-to-br from-white to-zinc-300 text-black flex items-center justify-center text-6xl mx-auto mb-10 shadow-2xl shadow-white/10 animate-pulse">
            ✓
        </div>

        <p class="text-zinc-500 uppercase tracking-[0.3em] text-xs mb-5">
            Order Confirmed
        </p>

        <h1 class="text-5xl md:text-6xl font-bold leading-tight mb-8">
            Payment Successful
        </h1>

        <p class="text-zinc-400 text-lg md:text-xl leading-relaxed mb-14 max-w-2xl mx-auto">
            Thank you for shopping with Cool Store.
            Your order has been placed successfully and is now being processed.
        </p>

        <!-- Order Card -->

        <div class="bg-zinc-900/70 border border-white/10 rounded-[36px] p-8 text-left mb-12 backdrop-blur-xl">

            <!-- Top Details -->

            <div class="space-y-6 mb-10">

                <div class="flex items-center justify-between">

                    <span class="text-zinc-500">
                        Order ID
                    </span>

                    <span class="font-semibold">
                        #CS{{ str_pad($order->id, 5, '0', STR_PAD_LEFT) }}
                    </span>

                </div>

                <div class="flex items-center justify-between">

                    <span class="text-zinc-500">
                        Order Total
                    </span>

                    <span class="font-semibold">
                        ₹{{ number_format($order->total) }}
                    </span>

                </div>

                <div class="flex items-center justify-between">

                    <span class="text-zinc-500">
                        Payment Method
                    </span>

                    <span class="font-semibold capitalize">
                        {{ $order->payment_method }}
                    </span>

                </div>

                <div class="flex items-center justify-between">

                    <span class="text-zinc-500">
                        Estimated Delivery
                    </span>

                    <span class="font-semibold">
                        3-5 Business Days
                    </span>

                </div>

                <div class="flex items-center justify-between">

                    <span class="text-zinc-500">
                        Payment Status
                    </span>

                    <span class="text-green-400 font-semibold">
                        Paid Successfully
                    </span>

                </div>

            </div>

            <!-- Divider -->

            <div class="border-t border-white/10 pt-8">

                <h2 class="text-2xl font-bold mb-8">
                    Order Items
                </h2>

                <div class="space-y-6">

                    @foreach($order->items as $item)

                        <div class="flex items-center gap-5">

                            <!-- Image -->

                            <div class="w-20 h-24 rounded-2xl overflow-hidden bg-zinc-800 shrink-0">

                                <img
                                    src="{{ asset($item->product->image) }}"
                                    class="w-full h-full object-cover"
                                >

                            </div>

                            <!-- Info -->

                            <div class="flex-1">

                                <h3 class="font-semibold text-lg mb-2">
                                    {{ $item->product->name }}
                                </h3>

                                <p class="text-zinc-500 text-sm">
                                    Quantity: {{ $item->quantity }}
                                </p>

                            </div>

                            <!-- Price -->

                            <p class="font-semibold text-lg">
                                ₹{{ number_format($item->price * $item->quantity) }}
                            </p>

                        </div>

                    @endforeach

                </div>

            </div>

        </div>

        <!-- Buttons -->

        <div class="flex flex-col md:flex-row gap-5 justify-center">

            <a
                href="{{ route('shop') }}"
                class="bg-white text-black px-10 py-5 rounded-full font-semibold hover:scale-105 transition duration-300"
            >
                Continue Shopping
            </a>

            <a
                href="/"
                class="border border-white/10 px-10 py-5 rounded-full hover:border-white/20 transition duration-300"
            >
                Back To Home
            </a>

        </div>

    </div>

</section>

@endsection
