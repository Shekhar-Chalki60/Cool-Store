<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cool Store</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-zinc-950 text-white min-h-screen">

    @include('partials.navbar')

    @if(session('success'))

        <div
            x-data="{ show: true }"
            x-show="show"
            x-init="setTimeout(() => show = false, 2500)"
            class="fixed top-24 right-6 z-50 bg-white text-black px-6 py-4 rounded-2xl shadow-2xl"
        >
            {{ session('success') }}
        </div>

    @endif

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

</body>
</html>
