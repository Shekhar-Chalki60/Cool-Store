@props(['product'])

<div class="bg-zinc-900 border border-zinc-800 rounded-3xl overflow-hidden group">

    <div class="aspect-[4/5] bg-zinc-800 overflow-hidden">

        <img
            src="{{ asset($product->image) }}"
            alt="{{ $product->name }}"
            class="w-full h-full object-cover group-hover:scale-105 transition duration-500"
        >

    </div>

    <div class="p-6">

        <p class="text-zinc-500 text-sm mb-2">
            {{ $product->category->name }}
        </p>

        <h3 class="text-2xl font-semibold mb-4">
            {{ $product->name }}
        </h3>

        <div class="flex items-center justify-between">

            <p class="text-lg font-bold">
                ₹{{ number_format($product->price) }}
            </p>

            <button class="text-sm hover:text-zinc-300 transition">
                <a href="{{ route('products.show', $product) }}">
                    View Product
                </a>
            </button>

        </div>

    </div>

</div>
