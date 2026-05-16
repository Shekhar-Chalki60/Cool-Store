@extends('layouts.app')

@section('content')

<section class="max-w-7xl mx-auto px-6 py-20">

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">

        <!-- Payment -->

        <div>

            <p class="text-zinc-500 uppercase tracking-[0.3em] text-xs mb-4">
                Payment Gateway
            </p>

            <h1 class="text-5xl font-bold mb-10">
                Complete Payment
            </h1>

            <div class="space-y-6">

                <!-- UPI -->

                <div class="bg-zinc-900 border border-zinc-800 rounded-3xl p-6 hover:border-white transition cursor-pointer">

                    <div class="flex items-center justify-between">

                        <div>
                            <h2 class="text-2xl font-semibold mb-2">
                                UPI
                            </h2>

                            <p class="text-zinc-400">
                                Pay using any UPI app
                            </p>
                        </div>

                        <span class="text-3xl">
                            📱
                        </span>

                    </div>

                </div>

                <!-- Card -->

                <div class="bg-zinc-900 border border-zinc-800 rounded-3xl p-6 hover:border-white transition cursor-pointer">

                    <div class="flex items-center justify-between">

                        <div>
                            <h2 class="text-2xl font-semibold mb-2">
                                Credit / Debit Card
                            </h2>

                            <p class="text-zinc-400">
                                Visa, Mastercard, RuPay
                            </p>
                        </div>

                        <span class="text-3xl">
                            💳
                        </span>

                    </div>

                </div>

                <!-- COD -->

                <div class="bg-zinc-900 border border-zinc-800 rounded-3xl p-6 hover:border-white transition cursor-pointer">

                    <div class="flex items-center justify-between">

                        <div>
                            <h2 class="text-2xl font-semibold mb-2">
                                Cash On Delivery
                            </h2>

                            <p class="text-zinc-400">
                                Pay when product arrives
                            </p>
                        </div>

                        <span class="text-3xl">
                            🚚
                        </span>

                    </div>

                </div>

            </div>

            <form
                action="{{ route('payment.process', $order) }}"
                method="POST"
                class="mt-10"
            >

                @csrf

                <button
                    class="w-full bg-white text-black py-5 rounded-full text-lg font-semibold hover:scale-[1.02] transition"
                >
                    Pay ₹{{ number_format($order->total) }}
                </button>

            </form>

        </div>

        <!-- Summary -->

        <div class="bg-zinc-900 border border-zinc-800 rounded-3xl p-10 h-fit">

            <h2 class="text-3xl font-bold mb-8">
                Order Summary
            </h2>

            <div class="space-y-6">

                @foreach($order->items as $item)

                    <div class="flex items-center justify-between">

                        <div>

                            <p class="font-semibold">
                                {{ $item->product->name }}
                            </p>

                            <p class="text-zinc-400 text-sm">
                                Qty: {{ $item->quantity }}
                            </p>

                        </div>

                        <p>
                            ₹{{ number_format($item->price * $item->quantity) }}
                        </p>

                    </div>

                @endforeach

            </div>

            <div class="border-t border-zinc-800 mt-8 pt-8 flex justify-between items-center">

                <p class="text-xl font-semibold">
                    Total
                </p>

                <p class="text-3xl font-bold">
                    ₹{{ number_format($order->total) }}
                </p>

            </div>

        </div>

    </div>

</section>

@endsection
