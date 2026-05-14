<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cool Store</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-zinc-950 text-white min-h-screen">

    <nav class="border-b border-zinc-800">
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">

            <div class="text-2xl font-bold tracking-wide">
                COOLSTORE
            </div>

            <div class="flex items-center gap-6 text-sm">
                <a href="#" class="hover:text-zinc-300 transition">
                    Home
                </a>

                <a href="#" class="hover:text-zinc-300 transition">
                    Shop
                </a>

                <a href="#" class="hover:text-zinc-300 transition">
                    Collections
                </a>

                <a href="#" class="hover:text-zinc-300 transition">
                    Contact
                </a>
            </div>

        </div>
    </nav>

    <section class="max-w-7xl mx-auto px-6 py-24">

        <div class="max-w-2xl">
            <p class="text-zinc-400 uppercase tracking-[0.3em] text-xs mb-4">
                New Streetwear Collection
            </p>

            <h1 class="text-6xl font-bold leading-tight mb-6">
                Wear The Culture.
            </h1>

            <p class="text-zinc-400 text-lg mb-8">
                Minimal streetwear for the next generation.
            </p>

            <button class="bg-white text-black px-8 py-4 rounded-full font-semibold hover:scale-105 transition">
                Shop Now
            </button>
        </div>

    </section>

</body>
</html>
