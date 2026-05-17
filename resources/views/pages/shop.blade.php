@extends('layouts.app')

@section('content')

<!-- Floating Controls -->

<section class="max-w-7xl mx-auto px-6 mb-20">

    <form
        method="GET"
        action="{{ route('shop') }}"
    >

        <div class="bg-zinc-900/60 backdrop-blur-2xl border border-white/10 rounded-[32px] p-5 md:p-6">

            <div class="flex flex-col xl:flex-row xl:items-center gap-6">

                <!-- Search -->

                <div class="flex-1 relative">

                    <!-- Search Icon -->

                    <div class="absolute left-5 top-1/2 -translate-y-1/2 text-zinc-500">

                        🔍

                    </div>

                    <input
                        type="text"
                        name="search"
                        value="{{ request('search') }}"
                        placeholder="Search hoodies, t-shirts, sneakers..."
                        class="w-full bg-black/30 border border-white/5 rounded-2xl pl-14 pr-5 py-4 outline-none focus:border-white/20 transition text-white placeholder:text-zinc-600"
                    >

                </div>

                <!-- Right Side -->

                <div class="flex flex-col lg:flex-row gap-4 lg:items-center">

                    <!-- Categories -->

                    <div class="flex flex-wrap gap-3">

                        <a
                            href="{{ route('shop') }}"
                            class="
                                px-5 py-3 rounded-full text-sm transition border
                                {{ !request('category')
                                    ? 'bg-white text-black border-white'
                                    : 'border-white/10 text-zinc-400 hover:text-white hover:border-white/20'
                                }}
                            "
                        >
                            All
                        </a>

                        @foreach($categories as $category)

                            <a
                                href="{{ route('shop', ['category' => $category->slug]) }}"
                                class="
                                    px-5 py-3 rounded-full text-sm transition border
                                    {{ request('category') == $category->slug
                                        ? 'bg-white text-black border-white'
                                        : 'border-white/10 text-zinc-400 hover:text-white hover:border-white/20'
                                    }}
                                "
                            >
                                {{ $category->name }}
                            </a>

                        @endforeach

                    </div>

                    <!-- Sort -->

                    <div>

                        <select
                            name="sort"
                            onchange="this.form.submit()"
                            class="bg-black/30 border border-white/10 rounded-2xl px-5 py-4 outline-none text-sm min-w-[180px]"
                        >

                            <option value="">
                                Latest Products
                            </option>

                            <option
                                value="low-high"
                                {{ request('sort') == 'low-high' ? 'selected' : '' }}
                            >
                                Price: Low to High
                            </option>

                            <option
                                value="high-low"
                                {{ request('sort') == 'high-low' ? 'selected' : '' }}
                            >
                                Price: High to Low
                            </option>

                        </select>

                    </div>

                </div>

            </div>

        </div>

    </form>

</section>

<!-- Products -->

<section class="max-w-7xl mx-auto px-6 pb-28">

    @if($products->count())

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

            @foreach($products as $product)

                <x-product-card :product="$product" />

            @endforeach

        </div>

    @else

        <div class="text-center py-32">

            <div class="text-7xl mb-6">
                🛍️
            </div>

            <h2 class="text-4xl font-bold mb-4">
                No Products Found
            </h2>

            <p class="text-zinc-500 text-lg">
                Try another search or category.
            </p>

        </div>

    @endif

    <!-- Pagination -->

    <div class="mt-20">

        {{ $products->withQueryString()->links() }}

    </div>

</section>

@endsection
