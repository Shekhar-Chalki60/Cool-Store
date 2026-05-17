<a
    href="{{ route('products.show', $product->slug) }}"
    class="group block"
>

    <div class="bg-zinc-900/70 border border-white/5 rounded-[32px] overflow-hidden hover:border-white/15 transition duration-500 hover:-translate-y-2">

        <!-- Image -->

        <div class="relative overflow-hidden">

            <!-- Wishlist -->

            <button
                class="absolute top-4 right-4 z-20 w-10 h-10 rounded-full bg-black/40 backdrop-blur-xl border border-white/10 flex items-center justify-center text-zinc-400 hover:text-white transition"
            >
                ♡
            </button>

            <!-- Product Image -->

            <div class="aspect-[4/5] overflow-hidden bg-black">

                <img
                    src="{{ asset($product->image) }}"
                    alt="{{ $product->name }}"
                    class="w-full h-full object-cover group-hover:scale-105 transition duration-700"
                >

            </div>

        </div>

        <!-- Content -->

        <div class="p-6">

            <!-- Category -->

            <p class="text-zinc-500 text-xs uppercase tracking-[0.25em] mb-3">

                {{ $product->category->name ?? 'Collection' }}

            </p>

            <!-- Product Name -->

            <h3 class="text-2xl font-semibold leading-snug mb-3 group-hover:text-zinc-300 transition">

                {{ $product->name }}

            </h3>

            <!-- Description -->

            <p class="text-zinc-500 text-sm leading-relaxed mb-6">

                {{ Str::limit($product->description, 60) }}

            </p>

            <!-- Bottom -->

            <div class="flex items-center justify-between">

                <!-- Price -->

                <div>

                    <p class="text-2xl font-bold">
                        ₹{{ number_format($product->price) }}
                    </p>

                </div>

                <!-- CTA -->


                <div
                    class="w-12 h-12 rounded-full bg-white text-black flex items-center justify-center font-bold group-hover:scale-110 transition duration-300"
                >


                <a href="{{ route('products.show', $product) }}">
                    →
                </a>
                </div>

            </div>

        </div>

    </div>

</a>
