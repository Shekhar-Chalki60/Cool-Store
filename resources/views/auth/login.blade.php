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
                    Welcome Back
                </p>

                <h1 class="text-4xl font-bold mb-4">
                    Login To Your Account
                </h1>

                <p class="text-zinc-500 leading-relaxed">
                    Continue exploring premium streetwear collections.
                </p>

            </div>

            <!-- Session Status -->

            @if (session('status'))

                <div class="mb-6 bg-green-500/10 border border-green-500/20 text-green-400 px-5 py-4 rounded-2xl text-sm">

                    {{ session('status') }}

                </div>

            @endif

            <!-- Form -->

            <form method="POST" action="{{ route('login') }}">

                @csrf

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
                        autofocus
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
                        placeholder="Enter your password"
                    >

                    @error('password')

                        <p class="text-red-400 text-sm mt-3">
                            {{ $message }}
                        </p>

                    @enderror

                </div>

                <!-- Remember + Forgot -->

                <div class="flex items-center justify-between mb-8">

                    <label class="flex items-center gap-3 text-sm text-zinc-500">

                        <input
                            type="checkbox"
                            name="remember"
                            class="rounded border-white/20 bg-zinc-900 text-white focus:ring-0"
                        >

                        Remember me

                    </label>

                    @if (Route::has('password.request'))

                        <a
                            href="{{ route('password.request') }}"
                            class="text-sm text-zinc-400 hover:text-white transition"
                        >
                            Forgot Password?
                        </a>

                    @endif

                </div>

                <!-- Button -->

                <button
                    type="submit"
                    class="w-full bg-white text-black py-4 rounded-full font-semibold hover:scale-[1.02] hover:shadow-2xl hover:shadow-white/20 transition duration-300"
                >
                    Login
                </button>

            </form>

            <!-- Register -->

            <div class="mt-10 text-center">

                <p class="text-zinc-500 text-sm">

                    Don’t have an account?

                    <a
                        href="{{ route('register') }}"
                        class="text-white hover:underline"
                    >
                        Create Account
                    </a>

                </p>

            </div>

        </div>

    </div>

</section>

@endsection
