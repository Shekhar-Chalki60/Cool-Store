@extends('layouts.app')

@section('content')

<section class="max-w-7xl mx-auto px-6 py-20">

    <div class="mb-14">

        <p class="text-zinc-500 uppercase tracking-[0.3em] text-xs mb-4">
            Checkout
        </p>

        <h1 class="text-5xl font-bold">
            Complete Your Order
        </h1>

    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">

        <!-- Form -->

        <form
            action="{{ route('checkout.store') }}"
            method="POST"
            class="space-y-6"
        >

            @csrf

            <div>

                <label class="block mb-3 text-sm text-zinc-400">
                    Full Name
                </label>

                <input
                    type="text"
                    name="full_name"
                    value="{{ auth()->user()->name }}"
                    class="w-full bg-zinc-900 border border-zinc-800 rounded-2xl px-6 py-4"
                >

            </div>

            <div>

                <label class="block mb-3 text-sm text-zinc-400">
                    Email
                </label>

                <input
                    type="email"
                    name="email"
                    value="{{ auth()->user()->email }}"
                    class="w-full bg-zinc-900 border border-zinc-800 rounded-2xl px-6 py-4"
                >

            </div>

            <div>

                <label class="block mb-3 text-sm text-zinc-400">
                    Phone
                </label>

                <input
                    type="text"
                    name="phone"
                    class="w-full bg-zinc-900 border border-zinc-800 rounded-2xl px-6 py-4"
                >

            </div>

            <div>

                <label class="block mb-3 text-sm text-zinc-400">
                    Address
                </label>

                <textarea
                    name="address"
                    rows="5"
                    class="w-full bg-zinc-900 border border-zinc-800 rounded-2xl px-6 py-4"
                ></textarea>

            </div>

            <button
                class="bg-white text-black px-10 py-4 rounded-full font-semibold hover:scale-105 transition"
            >
                Place Order
            </button>

        </form>

        <!-- Summary -->

        <div class="bg-zinc-900 border border-zinc-800 rounded-3xl p-10 h-fit">

            <h2 class="text-3xl font-bold mb-8">
                Order Summary
            </h2>

            <div class="space-y-6">

                @php
                    $total = 0;
                @endphp

                @foreach($cart as $item)

                    @php
                        $subtotal = $item['price'] * $item['quantity'];

                        $total += $subtotal;
                    @endphp

                    <div class="flex items-center justify-between">

                        <div>

                            <p class="font-semibold">
                                {{ $item['name'] }}
                            </p>

                            <p class="text-zinc-400 text-sm">
                                Qty: {{ $item['quantity'] }}
                            </p>

                        </div>

                        <p>
                            ₹{{ number_format($subtotal) }}
                        </p>

                    </div>

                @endforeach

            </div>

            <div class="border-t border-zinc-800 mt-8 pt-8 flex justify-between items-center">

                <p class="text-xl font-semibold">
                    Total
                </p>

                <p class="text-3xl font-bold">
                    ₹{{ number_format($total) }}
                </p>

            </div>

        </div>

    </div>

</section>

@endsection
