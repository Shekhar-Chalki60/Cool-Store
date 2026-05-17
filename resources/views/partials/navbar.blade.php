<nav class="sticky top-0 z-50 backdrop-blur-2xl bg-black/40 border-b border-white/10">

    <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">

        <!-- Logo -->

        <a href="/" class="text-2xl font-bold tracking-tight">
            COOL<span class="text-zinc-500">STORE</span>
        </a>

        <!-- Center Links -->

        <div class="hidden md:flex items-center gap-8 text-sm">

            <a
                href="/"
                class="text-zinc-400 hover:text-white hover:-translate-y-[1px] transition"
            >
                Home
            </a>

            <a
                href="{{ route('shop') }}"
                class="text-zinc-400 hover:text-white hover:-translate-y-[1px] transition"
            >
                Shop
            </a>

            <a
                href="#"
                class="text-zinc-400 hover:text-white hover:-translate-y-[1px] transition"
            >
                Collections
            </a>

            <a
                href="#"
                class="text-zinc-400 hover:text-white hover:-translate-y-[1px] transition"
            >
                Contact
            </a>

        </div>

        <!-- Right -->

        <div class="flex items-center gap-6">

            <!-- Cart -->

            <a
                href="{{ route('cart') }}"
                class="relative text-sm text-zinc-400 hover:text-white transition"
            >
                Cart

                @if(session('cart') && count(session('cart')) > 0)

                    <span class="absolute -top-2 -right-3 bg-white text-black text-[10px] font-bold min-w-[18px] h-[18px] px-1 rounded-full flex items-center justify-center">

                        {{ count(session('cart')) }}

                    </span>

                @endif

            </a>

            @auth

                <!-- User -->

                <div class="flex items-center gap-4">

                    <a
                        href="{{ route('dashboard') }}"
                        class="text-sm text-zinc-400 hover:text-white transition"
                    >
                        {{ auth()->user()->name }}
                    </a>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <button
                            class="bg-white text-black px-5 py-2 rounded-full text-sm font-medium hover:scale-105 transition duration-300"
                        >
                            Logout
                        </button>
                    </form>

                </div>

            @else

                <!-- Guest -->

                <div class="flex items-center gap-3">

                    <a
                        href="{{ route('login') }}"
                        class="text-sm text-zinc-400 hover:text-white transition"
                    >
                        Login
                    </a>

                    <a
                        href="{{ route('register') }}"
                        class="bg-white text-black px-5 py-2 rounded-full text-sm font-medium hover:scale-105 transition duration-300"
                    >
                        Register
                    </a>

                </div>

            @endauth

        </div>

    </div>

</nav>
