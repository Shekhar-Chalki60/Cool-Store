@extends('layouts.app')

@section('content')

<section class="max-w-7xl mx-auto px-6 py-20">

    <div class="mb-14">

        <p class="text-zinc-500 uppercase tracking-[0.3em] text-xs mb-4">
            Collection
        </p>

        <h1 class="text-5xl font-bold mb-4">
            Shop All Products
        </h1>

        <p class="text-zinc-400 text-lg">
            Explore premium streetwear essentials crafted for everyday style.
        </p>

    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

        @foreach($products as $product)

            <x-product-card :product="$product" />

        @endforeach

    </div>

    <div class="mt-16">

        {{ $products->links() }}

    </div>

</section>

@endsection
