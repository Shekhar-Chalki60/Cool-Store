@extends('layouts.app')

@section('content')

<section class="max-w-7xl mx-auto px-6 py-20">

    <!-- Progress -->

    <div class="flex items-center justify-center gap-4 mb-20">

        <div class="flex items-center gap-3">

            <div class="w-10 h-10 rounded-full bg-white text-black flex items-center justify-center font-bold">
                ✓
            </div>

            <span class="text-zinc-400">
                Cart
            </span>

        </div>

        <div class="w-16 h-px bg-white/10"></div>

        <div class="flex items-center gap-3">

            <div class="w-10 h-10 rounded-full bg-white text-black flex items-center justify-center font-bold">
                2
            </div>

            <span class="font-medium">
                Checkout
            </span>

        </div>

        <div class="w-16 h-px bg-white/10"></div>

        <div class="flex items-center gap-3">

            <div class="w-10 h-10 rounded-full bg-zinc-900 border border-white/10 flex items-center justify-center font-bold text-zinc-500">
                3
            </div>

            <span class="text-zinc-500">
                Payment
            </span>

        </div>

    </div>

    <!-- Header -->

    <div class="mb-16">

        <p class="text-zinc-500 uppercase tracking-[0.3em] text-xs mb-4">
            Secure Checkout
        </p>

        <h1 class="text-5xl md:text-6xl font-bold leading-tight">
            Complete Your Order
        </h1>

    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 items-start">

        <!-- LEFT -->

        <div class="lg:col-span-2">

            <form
                action="{{ route('checkout.store') }}"
                method="POST"
                class="space-y-8"
            >

                @csrf

                <!-- Shipping Info -->

                <div class="bg-zinc-900/70 border border-white/10 rounded-[36px] p-8">

                    <div class="mb-8">

                        <h2 class="text-3xl font-bold mb-3">
                            Shipping Information
                        </h2>

                        <p class="text-zinc-500">
                            Enter delivery details for your order.
                        </p>

                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                        <!-- Name -->

                        <div class="md:col-span-2">

                            <label class="block text-sm text-zinc-400 mb-3">
                                Full Name
                            </label>

                            <input
                                type="text"
                                name="full_name"
                                value="{{ auth()->user()->name }}"
                                class="w-full bg-black/40 border border-white/10 rounded-2xl px-6 py-5 outline-none focus:border-white/20 transition"
                            >

                        </div>

                        <!-- Email -->

                        <div>

                            <label class="block text-sm text-zinc-400 mb-3">
                                Email Address
                            </label>

                            <input
                                type="email"
                                name="email"
                                value="{{ auth()->user()->email }}"
                                class="w-full bg-black/40 border border-white/10 rounded-2xl px-6 py-5 outline-none focus:border-white/20 transition"
                            >

                        </div>

                        <!-- Phone -->

                        <div>

                            <label class="block text-sm text-zinc-400 mb-3">
                                Phone Number
                            </label>

                            <input
                                type="text"
                                name="phone"
                                class="w-full bg-black/40 border border-white/10 rounded-2xl px-6 py-5 outline-none focus:border-white/20 transition"
                            >

                        </div>

                        <!-- Address -->

                        <div class="md:col-span-2">

                            <label class="block text-sm text-zinc-400 mb-3">
                                Address
                            </label>

                            <textarea
                                name="address"
                                rows="5"
                                class="w-full bg-black/40 border border-white/10 rounded-2xl px-6 py-5 outline-none focus:border-white/20 transition"
                            ></textarea>

                        </div>

                    </div>

                </div>

                <!-- Payment -->

                <div class="bg-zinc-900/70 border border-white/10 rounded-[36px] p-8">

                    <div class="mb-8">

                        <h2 class="text-3xl font-bold mb-3">
                            Payment Method
                        </h2>

                        <p class="text-zinc-500">
                            Choose your preferred payment option.
                        </p>

                    </div>

                    <div class="space-y-4">

                        <!-- Razorpay -->

                        <label class="flex items-center justify-between bg-black/30 border border-white/10 rounded-3xl p-5 cursor-pointer hover:border-white/20 transition">

                            <div class="flex items-center gap-4">

                                <input
                                    type="radio"
                                    name="payment_method"
                                    value="razorpay"
                                    checked
                                    class="accent-white"
                                >

                                <div>

                                    <p class="font-semibold mb-1">
                                        Razorpay
                                    </p>

                                    <p class="text-zinc-500 text-sm">
                                        Pay using UPI, Cards, Wallets & Netbanking
                                    </p>

                                </div>

                            </div>

                            <span class="text-2xl">
                                💳
                            </span>

                        </label>

                        <!-- COD -->

                        <label class="flex items-center justify-between bg-black/30 border border-white/10 rounded-3xl p-5 cursor-pointer hover:border-white/20 transition">

                            <div class="flex items-center gap-4">

                                <input
                                    type="radio"
                                    name="payment_method"
                                    value="cod"
                                    class="accent-white"
                                >

                                <div>

                                    <p class="font-semibold mb-1">
                                        Cash On Delivery
                                    </p>

                                    <p class="text-zinc-500 text-sm">
                                        Pay when your order arrives
                                    </p>

                                </div>

                            </div>

                            <span class="text-2xl">
                                📦
                            </span>

                        </label>

                    </div>

                </div>

                <!-- Trust -->

                <div class="grid grid-cols-1 md:grid-cols-3 gap-5">

                    <div class="bg-zinc-900/70 border border-white/10 rounded-3xl p-5">

                        <div class="text-3xl mb-4">
                            🔒
                        </div>

                        <p class="font-semibold mb-2">
                            Secure Checkout
                        </p>

                        <p class="text-zinc-500 text-sm">
                            Your payment information is protected.
                        </p>

                    </div>

                    <div class="bg-zinc-900/70 border border-white/10 rounded-3xl p-5">

                        <div class="text-3xl mb-4">
                            🚚
                        </div>

                        <p class="font-semibold mb-2">
                            Fast Delivery
                        </p>

                        <p class="text-zinc-500 text-sm">
                            Orders shipped within 24 hours.
                        </p>

                    </div>

                    <div class="bg-zinc-900/70 border border-white/10 rounded-3xl p-5">

                        <div class="text-3xl mb-4">
                            ↩️
                        </div>

                        <p class="font-semibold mb-2">
                            Easy Returns
                        </p>

                        <p class="text-zinc-500 text-sm">
                            7-day hassle-free return policy.
                        </p>

                    </div>

                </div>

                <!-- Submit -->

                <button
                    class="w-full bg-white text-black py-5 rounded-full font-semibold hover:scale-[1.01] transition duration-300"
                >
                    Continue To Payment
                </button>

            </form>

        </div>

        <!-- RIGHT -->

        <div class="lg:sticky lg:top-28">

            <div class="bg-zinc-900/70 backdrop-blur-2xl border border-white/10 rounded-[36px] p-8">

                <div class="mb-8">

                    <h2 class="text-3xl font-bold mb-3">
                        Order Summary
                    </h2>

                    <p class="text-zinc-500">
                        Review your items before payment.
                    </p>

                </div>

                @php
                    $total = 0;
                @endphp

                <div class="space-y-5">

                    @foreach($cart as $item)

                        @php
                            $subtotal = $item['price'] * $item['quantity'];
                            $total += $subtotal;
                        @endphp

                        <div class="flex gap-4">

                            <!-- Image -->

                            <div class="w-20 h-24 rounded-2xl overflow-hidden bg-black shrink-0">

                                <img
                                    src="{{ asset($item['image']) }}"
                                    alt="{{ $item['name'] }}"
                                    class="w-full h-full object-cover"
                                >

                            </div>

                            <!-- Info -->

                            <div class="flex-1">

                                <h3 class="font-semibold leading-snug mb-2">
                                    {{ $item['name'] }}
                                </h3>

                                <p class="text-zinc-500 text-sm mb-2">
                                    Qty: {{ $item['quantity'] }}
                                </p>

                                <p class="font-bold">
                                    ₹{{ number_format($subtotal) }}
                                </p>

                            </div>

                        </div>

                    @endforeach

                </div>

                @php
                    $shipping = $total > 2999 ? 0 : 199;
                    $finalTotal = $total + $shipping;
                @endphp

                <!-- Totals -->

                <div class="border-t border-white/10 mt-8 pt-8 space-y-5">

                    <div class="flex justify-between">

                        <span class="text-zinc-500">
                            Subtotal
                        </span>

                        <span>
                            ₹{{ number_format($total) }}
                        </span>

                    </div>

                    <div class="flex justify-between">

                        <span class="text-zinc-500">
                            Shipping
                        </span>

                        <span>

                            @if($shipping == 0)

                                Free

                            @else

                                ₹{{ number_format($shipping) }}

                            @endif

                        </span>

                    </div>

                    <div class="flex justify-between text-2xl font-bold pt-4">

                        <span>
                            Total
                        </span>

                        <span>
                            ₹{{ number_format($finalTotal) }}
                        </span>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection
