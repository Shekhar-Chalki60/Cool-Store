<nav class="border-b border-zinc-800">
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">

        <div class="text-2xl font-bold tracking-wide">
            COOLSTORE
        </div>

        <div class="flex items-center gap-6 text-sm">

            <a href="/" class="hover:text-zinc-300 transition">
                Home
            </a>

            <a href="{{ route('shop') }}" class="hover:text-zinc-300 transition">
                Shop
            </a>

            <a href="#" class="hover:text-zinc-300 transition">
                Collections
            </a>

            <a href="#" class="hover:text-zinc-300 transition">
                Contact
            </a>

            <a
                href="{{ route('cart') }}"
                class="relative hover:text-zinc-300 transition"
            >
                Cart
                @if(session('cart'))

                    <span class="absolute -top-3 -right-5 bg-white text-black text-xs w-5 h-5 rounded-full flex items-center justify-center">

                        {{ count(session('cart')) }}

                    </span>

                @endif

            </a>

        </div>

    </div>
</nav>
