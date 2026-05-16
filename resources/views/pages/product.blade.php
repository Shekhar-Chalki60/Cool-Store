@extends('layouts.app')

@section('content')

<section class="max-w-7xl mx-auto px-6 py-20">

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">

        <div class="bg-zinc-900 rounded-3xl overflow-hidden">

            <img
                src="{{ asset($product->image) }}"
                alt="{{ $product->name }}"
                class="w-full h-full object-cover"
            >

        </div>

        <div>

            <p class="text-zinc-500 uppercase tracking-[0.3em] text-xs mb-4">
                {{ $product->category->name }}
            </p>

            <h1 class="text-5xl font-bold mb-6">
                {{ $product->name }}
            </h1>

            <p class="text-3xl font-semibold mb-8">
                ₹{{ number_format($product->price) }}
            </p>

            <p class="text-zinc-400 text-lg leading-relaxed mb-10">
                {{ $product->description }}
            </p>

            <form action="{{ route('cart.add', $product) }}" method="POST">

                @csrf

                <button
                    class="bg-white text-black px-10 py-4 rounded-full font-semibold hover:scale-105 transition"
                >
                    Add To Cart
                </button>

            </form>

        </div>

    </div>

</section>

@endsection
