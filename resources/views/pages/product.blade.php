@extends('layouts.app')

@section('content')

<section class="max-w-7xl mx-auto px-6 py-20">

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">

        <!-- LEFT -->

        <div>

            <!-- Main Image -->

            <div class="bg-zinc-900 border border-white/10 rounded-[40px] overflow-hidden mb-6">

                <div class="aspect-[4/5] overflow-hidden">

                    <img
                        src="{{ asset($product->image) }}"
                        alt="{{ $product->name }}"
                        class="w-full h-full object-cover hover:scale-105 transition duration-700"
                    >

                </div>

            </div>

            <!-- Fake Gallery -->

            <div class="grid grid-cols-4 gap-4">

                @for($i = 0; $i < 4; $i++)

                    <div class="bg-zinc-900 border border-white/10 rounded-2xl overflow-hidden cursor-pointer hover:border-white/20 transition">

                        <div class="aspect-square">

                            <img
                                src="{{ asset($product->image) }}"
                                alt=""
                                class="w-full h-full object-cover"
                            >

                        </div>

                    </div>

                @endfor

            </div>

        </div>

        <!-- RIGHT -->

        <div class="lg:sticky lg:top-28">

            <!-- Category -->

            <p class="text-zinc-500 uppercase tracking-[0.3em] text-xs mb-5">

                {{ $product->category->name ?? 'Collection' }}

            </p>

            <!-- Title -->

            <h1 class="text-5xl md:text-6xl font-bold leading-tight mb-6">

                {{ $product->name }}

            </h1>

            <!-- Price -->

            <div class="flex items-center gap-4 mb-8">

                <p class="text-4xl font-bold">
                    ₹{{ number_format($product->price) }}
                </p>

                <span class="text-green-400 text-sm bg-green-500/10 border border-green-500/20 px-4 py-2 rounded-full">
                    In Stock
                </span>

            </div>

            <!-- Description -->

            <p class="text-zinc-400 text-lg leading-relaxed mb-10">

                {{ $product->description }}

            </p>

            <!-- Sizes -->

            <div class="mb-10">

                <p class="text-sm uppercase tracking-[0.2em] text-zinc-500 mb-5">
                    Select Size
                </p>

                <div class="flex flex-wrap gap-4">

                    @foreach(['S', 'M', 'L', 'XL'] as $size)

                        <button
                            class="w-14 h-14 rounded-2xl border border-white/10 hover:border-white hover:bg-white hover:text-black transition"
                        >
                            {{ $size }}
                        </button>

                    @endforeach

                </div>

            </div>

            <!-- Actions -->

            <div class="flex gap-4 mb-10">

                <!-- Add To Cart -->

                <form
                    action="{{ route('cart.add', $product->id) }}"
                    method="POST"
                    class="flex-1"
                >

                    @csrf

                    <button
                        class="w-full bg-white text-black py-5 rounded-full font-semibold hover:scale-[1.02] transition duration-300"
                    >
                        Add To Cart
                    </button>

                </form>

                <!-- Wishlist -->

                <button
                    class="w-16 rounded-full border border-white/10 hover:border-white transition"
                >
                    ♡
                </button>

            </div>

            <!-- Features -->

            <div class="space-y-4">

                <div class="bg-zinc-900/70 border border-white/10 rounded-3xl p-5 flex items-center justify-between">

                    <div>
                        <p class="font-medium mb-1">
                            Free Shipping
                        </p>

                        <p class="text-zinc-500 text-sm">
                            On all orders above ₹1999
                        </p>
                    </div>

                    <span class="text-2xl">
                        🚚
                    </span>

                </div>

                <div class="bg-zinc-900/70 border border-white/10 rounded-3xl p-5 flex items-center justify-between">

                    <div>
                        <p class="font-medium mb-1">
                            Easy Returns
                        </p>

                        <p class="text-zinc-500 text-sm">
                            7-day easy return policy
                        </p>
                    </div>

                    <span class="text-2xl">
                        ↩️
                    </span>

                </div>

                <div class="bg-zinc-900/70 border border-white/10 rounded-3xl p-5 flex items-center justify-between">

                    <div>
                        <p class="font-medium mb-1">
                            Secure Payments
                        </p>

                        <p class="text-zinc-500 text-sm">
                            Razorpay protected checkout
                        </p>
                    </div>

                    <span class="text-2xl">
                        🔒
                    </span>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- Related Products -->

<section class="max-w-7xl mx-auto px-6 pb-28">

    <div class="flex items-end justify-between mb-12">

        <div>

            <p class="text-zinc-500 uppercase tracking-[0.3em] text-xs mb-4">
                More Products
            </p>

            <h2 class="text-5xl font-bold">
                You May Also Like
            </h2>

        </div>

    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

        @foreach($relatedProducts as $related)

            <x-product-card :product="$related" />

        @endforeach

    </div>

</section>

@endsection
