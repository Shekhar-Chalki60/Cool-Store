@extends('layouts.app')

@section('content')

<section class="min-h-screen flex items-center justify-center px-6 py-24 relative overflow-hidden">

    <!-- Background Glow -->

    <div class="absolute top-[-150px] left-[-100px] w-[400px] h-[400px] bg-white/5 blur-[120px] rounded-full"></div>

    <div class="absolute bottom-[-150px] right-[-100px] w-[400px] h-[400px] bg-white/5 blur-[120px] rounded-full"></div>

    <!-- Card -->

    <div class="w-full max-w-md relative z-10">

        <div class="bg-zinc-900/70 backdrop-blur-2xl border border-white/10 rounded-[40px] p-10 md:p-12 shadow-2xl">

            <!-- Heading -->

            <div class="text-center mb-10">

                <p class="text-zinc-500 uppercase tracking-[0.3em] text-xs mb-4">
                    Join Cool Store
                </p>

                <h1 class="text-4xl font-bold mb-4">
                    Create Your Account
                </h1>

                <p class="text-zinc-500 leading-relaxed">
                    Start exploring premium streetwear collections and exclusive drops.
                </p>

            </div>

            <!-- Form -->

            <form method="POST" action="{{ route('register') }}">

                @csrf

                <!-- Name -->

                <div class="mb-6">

                    <label class="block text-sm text-zinc-400 mb-3">
                        Full Name
                    </label>

                    <input
                        type="text"
                        name="name"
                        value="{{ old('name') }}"
                        required
                        autofocus
                        class="w-full bg-black/40 border border-white/10 rounded-2xl px-5 py-4 outline-none focus:border-white transition"
                        placeholder="Enter your full name"
                    >

                    @error('name')

                        <p class="text-red-400 text-sm mt-3">
                            {{ $message }}
                        </p>

                    @enderror

                </div>

                <!-- Email -->

                <div class="mb-6">

                    <label class="block text-sm text-zinc-400 mb-3">
                        Email Address
                    </label>

                    <input
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        class="w-full bg-black/40 border border-white/10 rounded-2xl px-5 py-4 outline-none focus:border-white transition"
                        placeholder="Enter your email"
                    >

                    @error('email')

                        <p class="text-red-400 text-sm mt-3">
                            {{ $message }}
                        </p>

                    @enderror

                </div>

                <!-- Password -->

                <div class="mb-6">

                    <label class="block text-sm text-zinc-400 mb-3">
                        Password
                    </label>

                    <input
                        type="password"
                        name="password"
                        required
                        class="w-full bg-black/40 border border-white/10 rounded-2xl px-5 py-4 outline-none focus:border-white transition"
                        placeholder="Create a password"
                    >

                    @error('password')

                        <p class="text-red-400 text-sm mt-3">
                            {{ $message }}
                        </p>

                    @enderror

                </div>

                <!-- Confirm Password -->

                <div class="mb-8">

                    <label class="block text-sm text-zinc-400 mb-3">
                        Confirm Password
                    </label>

                    <input
                        type="password"
                        name="password_confirmation"
                        required
                        class="w-full bg-black/40 border border-white/10 rounded-2xl px-5 py-4 outline-none focus:border-white transition"
                        placeholder="Confirm your password"
                    >

                    @error('password_confirmation')

                        <p class="text-red-400 text-sm mt-3">
                            {{ $message }}
                        </p>

                    @enderror

                </div>

                <!-- Button -->

                <button
                    type="submit"
                    class="w-full bg-white text-black py-4 rounded-full font-semibold hover:scale-[1.02] hover:shadow-2xl hover:shadow-white/20 transition duration-300"
                >
                    Create Account
                </button>

            </form>

            <!-- Login -->

            <div class="mt-10 text-center">

                <p class="text-zinc-500 text-sm">

                    Already have an account?

                    <a
                        href="{{ route('login') }}"
                        class="text-white hover:underline"
                    >
                        Login
                    </a>

                </p>

            </div>

        </div>

    </div>

</section>

@endsection
