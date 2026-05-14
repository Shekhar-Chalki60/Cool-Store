@extends('layouts.app')

@section('content')

<section class="max-w-7xl mx-auto px-6 py-24">

    <div class="max-w-2xl">

        <p class="text-zinc-400 uppercase tracking-[0.3em] text-xs mb-4">
            New Streetwear Collection
        </p>

        <h1 class="text-6xl font-bold leading-tight mb-6">
            Wear The Culture.
        </h1>

        <p class="text-zinc-400 text-lg mb-8">
            Minimal streetwear for the next generation.
        </p>

        <x-button>
            Shop Now
        </x-button>

    </div>

</section>

<section class="max-w-7xl mx-auto px-6 pb-24">

    <div class="mb-10">

        <p class="text-zinc-500 uppercase tracking-[0.3em] text-xs mb-3">
            Categories
        </p>

        <h2 class="text-4xl font-bold">
            Shop By Category
        </h2>

    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

        <div class="bg-zinc-900 rounded-3xl p-10 hover:bg-zinc-800 transition cursor-pointer">
            <h3 class="text-2xl font-semibold mb-2">T-Shirts</h3>
            <p class="text-zinc-500 text-sm">Minimal oversized essentials.</p>
        </div>

        <div class="bg-zinc-900 rounded-3xl p-10 hover:bg-zinc-800 transition cursor-pointer">
            <h3 class="text-2xl font-semibold mb-2">Hoodies</h3>
            <p class="text-zinc-500 text-sm">Premium heavyweight streetwear.</p>
        </div>

        <div class="bg-zinc-900 rounded-3xl p-10 hover:bg-zinc-800 transition cursor-pointer">
            <h3 class="text-2xl font-semibold mb-2">Caps</h3>
            <p class="text-zinc-500 text-sm">Signature everyday pieces.</p>
        </div>

        <div class="bg-zinc-900 rounded-3xl p-10 hover:bg-zinc-800 transition cursor-pointer">
            <h3 class="text-2xl font-semibold mb-2">Shoes</h3>
            <p class="text-zinc-500 text-sm">Street culture inspired footwear.</p>
        </div>

    </div>

</section>

<section class="max-w-7xl mx-auto px-6 pb-24">

    <div class="bg-white text-black rounded-[40px] p-12 md:p-20">

        <p class="uppercase tracking-[0.3em] text-xs mb-4">
            Limited Drop
        </p>

        <h2 class="text-5xl font-bold leading-tight mb-6 max-w-2xl">
            Built For The Next Generation Of Streetwear.
        </h2>

        <p class="text-zinc-700 text-lg mb-10 max-w-xl">
            Discover premium essentials designed with minimal aesthetics and urban culture.
        </p>

        <x-button class="bg-black text-white">
            Explore Collection
        </x-button>

    </div>

</section>

<section class="max-w-4xl mx-auto px-6 pb-24 text-center">

    <p class="text-zinc-500 uppercase tracking-[0.3em] text-xs mb-4">
        Newsletter
    </p>

    <h2 class="text-5xl font-bold mb-6">
        Stay In The Loop
    </h2>

    <p class="text-zinc-400 text-lg mb-10">
        Get updates on new drops, limited collections, and exclusive offers.
    </p>

    <div class="flex flex-col md:flex-row gap-4">

        <input
            type="email"
            placeholder="Enter your email"
            class="flex-1 bg-zinc-900 border border-zinc-800 rounded-full px-6 py-4 outline-none focus:border-white transition"
        >

        <x-button>
            Subscribe
        </x-button>

    </div>

</section>

@endsection
