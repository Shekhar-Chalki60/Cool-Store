@extends('layouts.app')

@section('content')

<section class="max-w-7xl mx-auto px-6 py-16">

    <!-- Header -->

    <div class="mb-14">

        <p class="text-zinc-500 uppercase tracking-[0.3em] text-xs mb-4">
            My Account
        </p>

        <h1 class="text-5xl font-bold mb-4">
            Welcome back, {{ auth()->user()->name }}
        </h1>

        <p class="text-zinc-400 text-lg">
            Manage your orders, wishlist, and profile settings.
        </p>

    </div>

    <!-- Dashboard Layout -->

    <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">

        <!-- Sidebar -->

        <aside class="bg-zinc-900 border border-zinc-800 rounded-3xl p-6 h-fit">

            <h2 class="text-2xl font-bold mb-8">
                Dashboard
            </h2>

            <nav class="space-y-4 text-sm">

                <a href="#" class="block text-white hover:text-zinc-300 transition">
                    Overview
                </a>

                <a href="#" class="block text-zinc-400 hover:text-white transition">
                    Orders
                </a>

                <a href="#" class="block text-zinc-400 hover:text-white transition">
                    Wishlist
                </a>

                <a href="#" class="block text-zinc-400 hover:text-white transition">
                    Addresses
                </a>

                <a href="#" class="block text-zinc-400 hover:text-white transition">
                    Profile Settings
                </a>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button class="text-zinc-400 hover:text-white transition">
                        Logout
                    </button>
                </form>

            </nav>

        </aside>

        <!-- Main Content -->

        <div class="lg:col-span-3 space-y-8">

            <!-- Stats -->

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <div class="bg-zinc-900 border border-zinc-800 rounded-3xl p-8">

                    <p class="text-zinc-500 text-sm mb-3">
                        Total Orders
                    </p>

                    <h3 class="text-4xl font-bold">
                        0
                    </h3>

                </div>

                <div class="bg-zinc-900 border border-zinc-800 rounded-3xl p-8">

                    <p class="text-zinc-500 text-sm mb-3">
                        Wishlist Items
                    </p>

                    <h3 class="text-4xl font-bold">
                        0
                    </h3>

                </div>

                <div class="bg-zinc-900 border border-zinc-800 rounded-3xl p-8">

                    <p class="text-zinc-500 text-sm mb-3">
                        Saved Addresses
                    </p>

                    <h3 class="text-4xl font-bold">
                        1
                    </h3>

                </div>

            </div>

            <!-- Recent Orders -->

            <div class="bg-zinc-900 border border-zinc-800 rounded-3xl p-10">

                <div class="flex items-center justify-between mb-8">

                    <div>

                        <p class="text-zinc-500 uppercase tracking-[0.3em] text-xs mb-3">
                            Orders
                        </p>

                        <h2 class="text-3xl font-bold">
                            Recent Orders
                        </h2>

                    </div>

                    <a href="#" class="text-sm text-zinc-400 hover:text-white transition">
                        View All
                    </a>

                </div>

                <div class="border border-zinc-800 rounded-2xl p-8 text-zinc-400">

                    You have not placed any orders yet.

                </div>

            </div>

            <!-- Account Info -->

            <div class="bg-zinc-900 border border-zinc-800 rounded-3xl p-10">

                <p class="text-zinc-500 uppercase tracking-[0.3em] text-xs mb-3">
                    Account Info
                </p>

                <h2 class="text-3xl font-bold mb-8">
                    Profile Details
                </h2>

                <div class="space-y-6">

                    <div>

                        <p class="text-zinc-500 text-sm mb-2">
                            Name
                        </p>

                        <p class="text-lg">
                            {{ auth()->user()->name }}
                        </p>

                    </div>

                    <div>

                        <p class="text-zinc-500 text-sm mb-2">
                            Email
                        </p>

                        <p class="text-lg">
                            {{ auth()->user()->email }}
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection
