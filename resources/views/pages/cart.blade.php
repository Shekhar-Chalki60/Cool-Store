@extends('layouts.app')

@section('content')

<section class="max-w-7xl mx-auto px-6 py-20">

    <!-- Header -->

    <div class="mb-16">

        <p class="text-zinc-500 uppercase tracking-[0.3em] text-xs mb-4">
            Shopping Cart
        </p>

        <h1 class="text-5xl md:text-6xl font-bold">
            Your Cart
        </h1>

    </div>

    @if(count($cart) > 0)

        @php
            $total = 0;

            foreach($cart as $item) {
                $total += $item['price'] * $item['quantity'];
            }

            $shipping = $total > 2999 ? 0 : 199;
            $finalTotal = $total + $shipping;
        @endphp

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 items-start">

            <!-- LEFT -->

            <div class="lg:col-span-2 space-y-6">

                @foreach($cart as $id => $item)

                    <div class="bg-zinc-900/70 border border-white/10 rounded-[32px] p-5 md:p-6">

                        <div class="flex flex-col md:flex-row gap-6 md:items-center justify-between">

                            <!-- Product -->

                            <div class="flex items-center gap-5">

                                <!-- Image -->

                                <div class="w-28 h-32 rounded-2xl overflow-hidden bg-black shrink-0">

                                    <img
                                        src="{{ asset($item['image']) }}"
                                        alt="{{ $item['name'] }}"
                                        class="w-full h-full object-cover"
                                    >

                                </div>

                                <!-- Info -->

                                <div>

                                    <p class="text-zinc-500 uppercase tracking-[0.2em] text-xs mb-3">
                                        Premium Streetwear
                                    </p>

                                    <h2 class="text-2xl font-semibold mb-3 leading-snug">
                                        {{ $item['name'] }}
                                    </h2>

                                    <p class="text-zinc-500 text-sm mb-5">
                                        Estimated delivery in 3-5 days
                                    </p>

                                    <!-- Quantity -->

                                    <div class="flex items-center gap-3">

                                        <!-- Decrease -->

                                        <form action="{{ route('cart.decrease', $id) }}" method="POST">

                                            @csrf

                                            <button
                                                class="w-11 h-11 rounded-full border border-white/10 hover:border-white/20 hover:bg-white hover:text-black transition flex items-center justify-center text-lg"
                                            >
                                                −
                                            </button>

                                        </form>

                                        <!-- Qty -->

                                        <div class="min-w-[50px] h-11 rounded-full bg-black/40 border border-white/10 flex items-center justify-center font-semibold">

                                            {{ $item['quantity'] }}

                                        </div>

                                        <!-- Increase -->

                                        <form action="{{ route('cart.increase', $id) }}" method="POST">

                                            @csrf

                                            <button
                                                class="w-11 h-11 rounded-full border border-white/10 hover:border-white/20 hover:bg-white hover:text-black transition flex items-center justify-center text-lg"
                                            >
                                                +
                                            </button>

                                        </form>

                                    </div>

                                </div>

                            </div>

                            <!-- Price -->

                            <div class="flex flex-col items-start md:items-end gap-5">

                                <p class="text-3xl font-bold">
                                    ₹{{ number_format($item['price']) }}
                                </p>

                                <!-- Remove -->

                                <form action="{{ route('cart.remove', $id) }}" method="POST">

                                    @csrf

                                    <button
                                        class="text-zinc-500 hover:text-red-400 transition text-sm"
                                    >
                                        Remove Item
                                    </button>

                                </form>

                            </div>

                        </div>

                    </div>

                @endforeach

                <!-- Continue Shopping -->

                <div class="pt-4">

                    <a
                        href="{{ route('shop') }}"
                        class="inline-flex items-center gap-3 text-zinc-400 hover:text-white transition"
                    >
                        ← Continue Shopping
                    </a>

                </div>

            </div>

            <!-- RIGHT -->

            <div class="lg:sticky lg:top-28">

                <div class="bg-zinc-900/70 backdrop-blur-2xl border border-white/10 rounded-[36px] p-8">

                    <!-- Heading -->

                    <div class="mb-8">

                        <h2 class="text-3xl font-bold mb-3">
                            Order Summary
                        </h2>

                        <p class="text-zinc-500">
                            Review your order before checkout.
                        </p>

                    </div>

                    <!-- Free Shipping Progress -->

                    @if($total < 2999)

                        <div class="mb-8">

                            <div class="flex items-center justify-between text-sm mb-3">

                                <span class="text-zinc-400">
                                    Free Shipping Progress
                                </span>

                                <span class="text-zinc-500">
                                    ₹{{ 2999 - $total }} away
                                </span>

                            </div>

                            <div class="w-full h-3 bg-black/40 rounded-full overflow-hidden">

                                <div
                                    class="h-full bg-white rounded-full"
                                    style="width: {{ min(($total / 2999) * 100, 100) }}%"
                                ></div>

                            </div>

                        </div>

                    @endif

                    <!-- Coupon -->

                    <div class="mb-8">

                        <p class="text-sm uppercase tracking-[0.2em] text-zinc-500 mb-4">
                            Promo Code
                        </p>

                        <div class="flex gap-3">

                            <input
                                type="text"
                                placeholder="Enter code"
                                class="flex-1 bg-black/40 border border-white/10 rounded-2xl px-5 py-4 outline-none focus:border-white/20 transition"
                            >

                            <button
                                class="bg-white text-black px-6 rounded-2xl font-medium hover:scale-105 transition"
                            >
                                Apply
                            </button>

                        </div>

                    </div>

                    <!-- Pricing -->

                    <div class="space-y-5 border-y border-white/10 py-8 mb-8">

                        <div class="flex items-center justify-between">

                            <span class="text-zinc-500">
                                Subtotal
                            </span>

                            <span class="font-semibold">
                                ₹{{ number_format($total) }}
                            </span>

                        </div>

                        <div class="flex items-center justify-between">

                            <span class="text-zinc-500">
                                Shipping
                            </span>

                            <span class="font-semibold">

                                @if($shipping == 0)

                                    Free

                                @else

                                    ₹{{ number_format($shipping) }}

                                @endif

                            </span>

                        </div>

                        <div class="flex items-center justify-between text-2xl font-bold pt-4">

                            <span>
                                Total
                            </span>

                            <span>
                                ₹{{ number_format($finalTotal) }}
                            </span>

                        </div>

                    </div>

                    <!-- Checkout -->

                    <a
                        href="{{ route('checkout') }}"
                        class="w-full bg-white text-black py-5 rounded-full font-semibold text-center block hover:scale-[1.02] hover:shadow-2xl hover:shadow-white/10 transition duration-300"
                    >
                        Proceed To Checkout
                    </a>

                    <!-- Trust -->

                    <div class="mt-8 space-y-4 text-sm text-zinc-500">

                        <div class="flex items-center justify-between">

                            <span>
                                Secure Payments
                            </span>

                            <span>
                                🔒
                            </span>

                        </div>

                        <div class="flex items-center justify-between">

                            <span>
                                Easy Returns
                            </span>

                            <span>
                                ↩️
                            </span>

                        </div>

                        <div class="flex items-center justify-between">

                            <span>
                                Fast Delivery
                            </span>

                            <span>
                                🚚
                            </span>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    @else

        <!-- Empty Cart -->

        <div class="bg-zinc-900/70 border border-white/10 rounded-[40px] p-16 text-center">

            <div class="text-8xl mb-8">
                🛒
            </div>

            <h2 class="text-4xl font-bold mb-5">
                Your Cart Is Empty
            </h2>

            <p class="text-zinc-500 text-lg mb-10 max-w-xl mx-auto">
                Looks like you haven’t added anything yet.
                Explore premium streetwear collections now.
            </p>

            <a
                href="{{ route('shop') }}"
                class="inline-block bg-white text-black px-10 py-5 rounded-full font-semibold hover:scale-105 transition"
            >
                Explore Collection
            </a>

        </div>

    @endif

</section>

@endsection
