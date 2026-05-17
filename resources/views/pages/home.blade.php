@extends('layouts.app')

@section('content')

<!-- HERO -->

<section class="relative overflow-hidden">

    <!-- Background Glow -->

    <div class="absolute top-[-200px] right-[-100px] w-[500px] h-[500px] bg-white/10 blur-[120px] rounded-full"></div>

    <div class="max-w-7xl mx-auto px-6 py-32 relative z-10">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">

            <!-- Left -->

            <div>

                <p class="text-zinc-500 uppercase tracking-[0.4em] text-xs mb-6">
                    New Streetwear Collection
                </p>

                <h1 class="text-6xl md:text-8xl font-bold leading-[0.95] mb-8">

                    OWN
                    <br>
                    THE
                    <br>
                    STREET.

                </h1>

                <p class="text-zinc-400 text-lg md:text-xl leading-relaxed mb-10 max-w-xl">
                    Minimal luxury streetwear crafted for modern culture,
                    movement, and individuality.
                </p>

                <div class="flex flex-wrap gap-4">

                    <a
                        href="{{ route('shop') }}"
                        class="bg-white text-black px-10 py-5 rounded-full font-semibold hover:scale-105 hover:shadow-2xl hover:shadow-white/20 transition duration-300"
                    >
                        Shop Collection
                    </a>

                    <a
                        href="#featured"
                        class="border border-white/10 px-10 py-5 rounded-full hover:bg-white hover:text-black transition duration-300"
                    >
                        Explore
                    </a>

                </div>

            </div>

            <!-- Right -->

            <div class="relative">

                <div class="aspect-[4/5] rounded-[40px] overflow-hidden bg-zinc-900 border border-white/10">

                    <img
                        src="{{ asset('products/Oversized Black Hoodie.jpg') }}"
                        alt="Streetwear"
                        class="w-full h-full object-cover hover:scale-105 transition duration-700"
                    >

                </div>

                <!-- Floating Card -->

                <div class="absolute -bottom-8 -left-8 bg-black/80 backdrop-blur-xl border border-white/10 rounded-3xl px-6 py-5">

                    <p class="text-zinc-500 text-xs uppercase tracking-[0.3em] mb-2">
                        Trending
                    </p>

                    <h3 class="text-2xl font-bold">
                        Oversized Drop
                    </h3>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- PRODUCTS -->

<section id="featured" class="max-w-7xl mx-auto px-6 pb-28">

    <div class="mb-14">

        <p class="text-zinc-500 uppercase tracking-[0.3em] text-xs mb-4">
            Featured Products
        </p>

        <h2 class="text-5xl md:text-6xl font-bold leading-tight">
            Built For Modern Streetwear
        </h2>

    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

        @foreach($featuredProducts as $product)

            <x-product-card :product="$product" />

        @endforeach

    </div>

</section>

<!-- CATEGORIES -->

<section class="max-w-7xl mx-auto px-6 pb-28">

    <div class="mb-14">

        <p class="text-zinc-500 uppercase tracking-[0.3em] text-xs mb-4">
            Categories
        </p>

        <h2 class="text-5xl md:text-6xl font-bold leading-tight">
            Shop By Category
        </h2>

    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

        <!-- T-Shirts -->

        <div class="group relative overflow-hidden bg-zinc-900/80 backdrop-blur-xl border border-white/5 rounded-[32px] p-10 hover:-translate-y-2 hover:border-white/20 transition duration-500 cursor-pointer">

            <h3 class="text-2xl font-semibold mb-3">
                T-Shirts
            </h3>

            <p class="text-zinc-500 text-sm leading-relaxed">
                Minimal oversized essentials.
            </p>

            <div class="absolute top-0 right-0 w-32 h-32 bg-white/5 blur-3xl rounded-full group-hover:scale-150 transition duration-700"></div>

        </div>

        <!-- Hoodies -->

        <div class="group relative overflow-hidden bg-zinc-900/80 backdrop-blur-xl border border-white/5 rounded-[32px] p-10 hover:-translate-y-2 hover:border-white/20 transition duration-500 cursor-pointer">

            <h3 class="text-2xl font-semibold mb-3">
                Hoodies
            </h3>

            <p class="text-zinc-500 text-sm leading-relaxed">
                Premium heavyweight streetwear.
            </p>

            <div class="absolute top-0 right-0 w-32 h-32 bg-white/5 blur-3xl rounded-full group-hover:scale-150 transition duration-700"></div>

        </div>

        <!-- Caps -->

        <div class="group relative overflow-hidden bg-zinc-900/80 backdrop-blur-xl border border-white/5 rounded-[32px] p-10 hover:-translate-y-2 hover:border-white/20 transition duration-500 cursor-pointer">

            <h3 class="text-2xl font-semibold mb-3">
                Caps
            </h3>

            <p class="text-zinc-500 text-sm leading-relaxed">
                Signature everyday pieces.
            </p>

            <div class="absolute top-0 right-0 w-32 h-32 bg-white/5 blur-3xl rounded-full group-hover:scale-150 transition duration-700"></div>

        </div>

        <!-- Shoes -->

        <div class="group relative overflow-hidden bg-zinc-900/80 backdrop-blur-xl border border-white/5 rounded-[32px] p-10 hover:-translate-y-2 hover:border-white/20 transition duration-500 cursor-pointer">

            <h3 class="text-2xl font-semibold mb-3">
                Shoes
            </h3>

            <p class="text-zinc-500 text-sm leading-relaxed">
                Street culture inspired footwear.
            </p>

            <div class="absolute top-0 right-0 w-32 h-32 bg-white/5 blur-3xl rounded-full group-hover:scale-150 transition duration-700"></div>

        </div>

    </div>

</section>

<!-- FEATURED BANNER -->

<section class="max-w-7xl mx-auto px-6 pb-28">

    <div class="bg-gradient-to-br from-white to-zinc-200 text-black rounded-[40px] p-12 md:p-20 relative overflow-hidden">

        <div class="absolute top-[-100px] right-[-50px] w-[300px] h-[300px] bg-black/5 blur-[100px] rounded-full"></div>

        <div class="relative z-10">

            <p class="uppercase tracking-[0.3em] text-xs mb-4">
                Limited Drop
            </p>

            <h2 class="text-5xl md:text-6xl font-bold leading-tight mb-6 max-w-3xl">
                Built For The Next Generation Of Streetwear.
            </h2>

            <p class="text-zinc-700 text-lg mb-10 max-w-xl leading-relaxed">
                Discover premium essentials designed with minimal aesthetics,
                elevated fabrics, and modern urban culture.
            </p>

            <a
                href="{{ route('shop') }}"
                class="inline-block bg-black text-white px-10 py-5 rounded-full font-semibold hover:scale-105 transition duration-300"
            >
                Explore Collection
            </a>

        </div>

    </div>

</section>

<!-- NEWSLETTER -->

<section class="relative overflow-hidden max-w-4xl mx-auto px-6 pb-32 text-center">

    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-white/[0.02] pointer-events-none"></div>

    <div class="relative z-10">

        <p class="text-zinc-500 uppercase tracking-[0.3em] text-xs mb-4">
            Newsletter
        </p>

        <h2 class="text-5xl md:text-6xl font-bold mb-6 leading-tight">
            Stay In The Loop
        </h2>

        <p class="text-zinc-400 text-lg mb-10 leading-relaxed max-w-2xl mx-auto">
            Get updates on exclusive drops, limited collections,
            and curated fashion essentials.
        </p>

        <div class="flex flex-col md:flex-row gap-4 max-w-2xl mx-auto">

            <input
                type="email"
                placeholder="Enter your email"
                class="flex-1 bg-zinc-900/80 backdrop-blur-xl border border-white/10 rounded-full px-6 py-5 outline-none focus:border-white transition"
            >

            <button
                class="bg-white text-black px-10 py-5 rounded-full font-semibold hover:scale-105 hover:shadow-2xl hover:shadow-white/20 transition duration-300"
            >
                Subscribe
            </button>

        </div>

    </div>

</section>

@endsection
