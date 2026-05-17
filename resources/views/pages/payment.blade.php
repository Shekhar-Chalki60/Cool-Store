@extends('layouts.app')

@section('content')

<section class="min-h-screen bg-[#f3f3f1] text-black">

    <div class="max-w-7xl mx-auto px-6 py-14">

        <!-- Progress -->

        <div class="flex items-center justify-center gap-4 mb-14">

            <div class="flex items-center gap-3">

                <div class="w-9 h-9 rounded-full bg-black text-white flex items-center justify-center text-sm font-semibold">
                    ✓
                </div>

                <span class="text-sm text-zinc-500">
                    Cart
                </span>

            </div>

            <div class="w-12 h-px bg-zinc-300"></div>

            <div class="flex items-center gap-3">

                <div class="w-9 h-9 rounded-full bg-black text-white flex items-center justify-center text-sm font-semibold">
                    ✓
                </div>

                <span class="text-sm text-zinc-500">
                    Checkout
                </span>

            </div>

            <div class="w-12 h-px bg-zinc-300"></div>

            <div class="flex items-center gap-3">

                <div class="w-9 h-9 rounded-full bg-black text-white flex items-center justify-center text-sm font-semibold">
                    3
                </div>

                <span class="text-sm font-semibold">
                    Payment
                </span>

            </div>

        </div>

        <!-- Heading -->

        <div class="text-center mb-14">

            <p class="uppercase tracking-[0.3em] text-xs text-zinc-500 mb-4">
                Secure Checkout
            </p>

            <h1 class="text-4xl md:text-5xl font-bold mb-4">
                Complete Your Payment
            </h1>

            <p class="text-zinc-500 text-lg">
                Secure payment powered by Razorpay.
            </p>

        </div>

        <form
            id="payment-form"
            action="{{ route('payment.process', $order) }}"
            method="POST"
        >

            @csrf

            <div
                x-data="{ method: 'razorpay' }"
                class="grid grid-cols-1 lg:grid-cols-[1.1fr_0.9fr] gap-8 items-start"
            >

                <!-- LEFT -->

                <div class="bg-white/80 backdrop-blur-xl border border-zinc-200 rounded-[32px] p-8">

                    <div class="mb-10">

                        <h2 class="text-3xl font-bold mb-3">
                            Payment Method
                        </h2>

                        <p class="text-zinc-500">
                            Choose your preferred payment option.
                        </p>

                    </div>

                    <!-- Methods -->

                    <div class="flex flex-wrap gap-3 mb-10">

                        <button
                            type="button"
                            @click="method = 'razorpay'"
                            :class="method === 'razorpay'
                                ? 'bg-black text-white'
                                : 'bg-white text-black border border-zinc-300'"
                            class="px-6 py-3 rounded-full transition font-medium"
                        >
                            Razorpay
                        </button>

                        <button
                            type="button"
                            @click="method = 'card'"
                            :class="method === 'card'
                                ? 'bg-black text-white'
                                : 'bg-white text-black border border-zinc-300'"
                            class="px-6 py-3 rounded-full transition font-medium"
                        >
                            Card
                        </button>

                        <button
                            type="button"
                            @click="method = 'cod'"
                            :class="method === 'cod'
                                ? 'bg-black text-white'
                                : 'bg-white text-black border border-zinc-300'"
                            class="px-6 py-3 rounded-full transition font-medium"
                        >
                            Cash on Delivery
                        </button>

                    </div>

                    <!-- Hidden -->

                    <input
                        type="hidden"
                        name="payment_method"
                        :value="method"
                    >

                    <!-- Razorpay -->

                    <div
                        x-show="method === 'razorpay'"
                        x-transition
                        class="bg-zinc-100 rounded-3xl p-6"
                    >

                        <h3 class="font-semibold text-lg mb-2">
                            Razorpay Secure Payment
                        </h3>

                        <p class="text-zinc-600 leading-relaxed">
                            Pay securely using UPI, Cards, Wallets and Netbanking.
                        </p>

                    </div>

                    <!-- Card -->

                    <div
                        x-show="method === 'card'"
                        x-transition
                        class="space-y-5"
                    >

                        <div>

                            <label class="block text-sm text-zinc-500 mb-3">
                                Card Number
                            </label>

                            <input
                                type="text"
                                placeholder="1234 5678 9012 3456"
                                class="w-full bg-white border border-zinc-300 rounded-2xl px-6 py-4 outline-none focus:border-black transition"
                            >

                        </div>

                        <div>

                            <label class="block text-sm text-zinc-500 mb-3">
                                Card Holder Name
                            </label>

                            <input
                                type="text"
                                placeholder="John Doe"
                                class="w-full bg-white border border-zinc-300 rounded-2xl px-6 py-4 outline-none focus:border-black transition"
                            >

                        </div>

                        <div class="grid grid-cols-2 gap-5">

                            <div>

                                <label class="block text-sm text-zinc-500 mb-3">
                                    Expiry
                                </label>

                                <input
                                    type="text"
                                    placeholder="MM/YY"
                                    class="w-full bg-white border border-zinc-300 rounded-2xl px-6 py-4 outline-none focus:border-black transition"
                                >

                            </div>

                            <div>

                                <label class="block text-sm text-zinc-500 mb-3">
                                    CVV
                                </label>

                                <input
                                    type="password"
                                    placeholder="•••"
                                    class="w-full bg-white border border-zinc-300 rounded-2xl px-6 py-4 outline-none focus:border-black transition"
                                >

                            </div>

                        </div>

                    </div>

                    <!-- COD -->

                    <div
                        x-show="method === 'cod'"
                        x-transition
                        class="bg-zinc-100 rounded-3xl p-6"
                    >

                        <h3 class="font-semibold text-lg mb-2">
                            Cash on Delivery
                        </h3>

                        <p class="text-zinc-600 leading-relaxed">
                            Pay after your order arrives at your doorstep.
                        </p>

                    </div>

                </div>

                <!-- RIGHT -->

                <div class="sticky top-24">

                    <div class="bg-zinc-900 text-white rounded-[32px] p-8">

                        <div class="mb-10">

                            <h2 class="text-3xl font-bold mb-3">
                                Order Summary
                            </h2>

                            <p class="text-zinc-400">
                                Review your items before payment.
                            </p>

                        </div>

                        <!-- Products -->

                        <div class="space-y-6 mb-10">

                            @foreach($order->items as $item)

                                @php
                                    $subtotal = $item->price * $item->quantity;
                                @endphp

                                <div class="flex gap-4">

                                    <div class="w-20 h-24 rounded-2xl overflow-hidden bg-zinc-800 shrink-0">

                                        <img
                                            src="{{ asset($item->product->image) }}"
                                            class="w-full h-full object-cover"
                                        >

                                    </div>

                                    <div class="flex-1">

                                        <h3 class="font-semibold mb-2 leading-snug">
                                            {{ $item->product->name }}
                                        </h3>

                                        <p class="text-zinc-500 text-sm mb-2">
                                            Qty: {{ $item->quantity }}
                                        </p>

                                        <p class="font-bold">
                                            ₹{{ number_format($subtotal) }}
                                        </p>

                                    </div>

                                </div>

                            @endforeach

                        </div>

                        <!-- Totals -->

                        <div class="space-y-4 border-t border-white/10 pt-8">

                            <div class="flex justify-between text-zinc-400">

                                <span>
                                    Subtotal
                                </span>

                                <span>
                                    ₹{{ number_format($order->total) }}
                                </span>

                            </div>

                            <div class="flex justify-between text-zinc-400">

                                <span>
                                    Shipping
                                </span>

                                <span>
                                    Free
                                </span>

                            </div>

                            <div class="flex justify-between text-2xl font-bold pt-4">

                                <span>
                                    Total
                                </span>

                                <span>
                                    ₹{{ number_format($order->total) }}
                                </span>

                            </div>

                        </div>

                        <!-- Button -->

                        <button
                            class="w-full bg-white text-black py-4 rounded-full font-semibold mt-10 hover:scale-[1.02] transition duration-300"
                        >
                            Pay Securely
                        </button>

                        <p class="text-zinc-500 text-sm text-center mt-5">
                            Encrypted and secure payments.
                        </p>

                    </div>

                </div>

            </div>

        </form>

    </div>

</section>

@endsection
