@extends('layouts.app')

@section('content')

<section class="max-w-7xl mx-auto px-6 py-20">

    <div class="grid grid-cols-1 lg:grid-cols-4 gap-10">

        <!-- Sidebar -->

        <aside class="bg-zinc-900 border border-zinc-800 rounded-3xl p-6 h-fit">

            <h2 class="text-2xl font-bold mb-8">
                My Account
            </h2>

            <nav class="space-y-4 text-sm">

                <a href="{{ route('dashboard') }}" class="block text-zinc-400 hover:text-white transition">
                    Overview
                </a>

                <a href="{{ route('dashboard.orders') }}" class="block text-white">
                    Orders
                </a>

                <a href="#" class="block text-zinc-400 hover:text-white transition">
                    Wishlist
                </a>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button class="text-zinc-400 hover:text-white transition">
                        Logout
                    </button>
                </form>

            </nav>

        </aside>

        <!-- Main -->

        <div class="lg:col-span-3">

            <div class="mb-12">

                <p class="text-zinc-500 uppercase tracking-[0.3em] text-xs mb-4">
                    Orders
                </p>

                <h1 class="text-5xl font-bold">
                    My Orders
                </h1>

            </div>

            @if($orders->count())

                <div class="space-y-6">

                    @foreach($orders as $order)

                        <div class="bg-zinc-900 border border-zinc-800 rounded-3xl p-8">

                            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6">

                                <div>

                                    <p class="text-zinc-500 text-sm mb-2">
                                        Order #{{ $order->id }}
                                    </p>

                                    <h2 class="text-2xl font-semibold mb-3">
                                        ₹{{ number_format($order->total) }}
                                    </h2>

                                    <p class="text-zinc-400">
                                        {{ $order->created_at->format('d M Y') }}
                                    </p>

                                </div>

                                <div class="flex items-center gap-4">

                                    <span class="px-4 py-2 rounded-full bg-yellow-500/10 text-yellow-400 text-sm">
                                        {{ ucfirst($order->status) }}
                                    </span>

                                    <a
                                        href="{{ route('dashboard.orders.show', $order) }}"
                                        class="bg-white text-black px-6 py-3 rounded-full text-sm font-semibold"
                                    >
                                        View Details
                                    </a>

                                </div>

                            </div>

                        </div>

                    @endforeach

                </div>

            @else

                <div class="bg-zinc-900 border border-zinc-800 rounded-3xl p-10 text-zinc-400">

                    You have not placed any orders yet.

                </div>

            @endif

        </div>

    </div>

</section>

@endsection
