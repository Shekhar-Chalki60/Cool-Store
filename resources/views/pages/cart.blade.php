@extends('layouts.app')

@section('content')

<section class="max-w-7xl mx-auto px-6 py-20">

    <div class="mb-14">

        <p class="text-zinc-500 uppercase tracking-[0.3em] text-xs mb-4">
            Shopping Cart
        </p>

        <h1 class="text-5xl font-bold">
            Your Cart
        </h1>

    </div>

    @if(count($cart) > 0)

        <div class="space-y-6">

            @php
                $total = 0;
            @endphp

            @foreach($cart as $id => $item)

                @php
                    $total += $item['price'] * $item['quantity'];
                @endphp

                <div class="bg-zinc-900 border border-zinc-800 rounded-3xl p-6 flex items-center justify-between">

                    <div class="flex items-center gap-6">

                        <img
                            src="{{ asset($item['image']) }}"
                            class="w-24 h-24 object-cover rounded-2xl"
                        >

                        <div>

                            <h2 class="text-2xl font-semibold mb-2">
                                {{ $item['name'] }}
                            </h2>

                        <div class="flex items-center gap-3 mt-4">

                            <!-- Decrease -->

                            <form action="{{ route('cart.decrease', $id) }}" method="POST">
                                @csrf

                                <button
                                    class="w-10 h-10 rounded-full bg-zinc-800 hover:bg-zinc-700 transition flex items-center justify-center"
                                >
                                    ➖
                                </button>
                            </form>

                            <!-- Quantity -->

                            <span class="text-lg font-semibold min-w-[30px] text-center">
                                {{ $item['quantity'] }}
                            </span>

                            <!-- Increase -->

                            <form action="{{ route('cart.increase', $id) }}" method="POST">
                                @csrf

                                <button
                                    class="w-10 h-10 rounded-full bg-zinc-800 hover:bg-zinc-700 transition flex items-center justify-center"
                                >
                                    ➕
                                </button>
                            </form>

                        </div>

                        </div>

                    </div>

                    <div class="text-right">

                        <p class="text-2xl font-bold mb-4">
                            ₹{{ number_format($item['price']) }}
                        </p>

                        <form action="{{ route('cart.remove', $id) }}" method="POST">
                            @csrf

                            <button class="text-red-400 hover:text-red-300 transition text-sm">
                                🗑 Remove
                            </button>
                        </form>

                    </div>

                </div>

            @endforeach

            <div class="flex justify-between items-center pt-10">

                <h2 class="text-3xl font-bold">
                    Total: ₹{{ number_format($total) }}
                </h2>

                <a
                    href="{{ route('checkout') }}"
                    class="bg-white text-black px-10 py-4 rounded-full font-semibold inline-block"
                >
                    Checkout
                </a>

            </div>

        </div>

    @else

        <div class="bg-zinc-900 border border-zinc-800 rounded-3xl p-10 text-zinc-400">
            Your cart is empty.
        </div>

    @endif

</section>

@endsection
