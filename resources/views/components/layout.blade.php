<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css'])

    <title>Prakse</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans antialiased dark:bg-black dark:text-white/50 min-h-screen flex flex-col m-0 p-0">

<nav class="bg-purple-800 fixed top-0 left-0 w-full z-50" aria-label="Main navigation">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <h1 class="text-white text-lg font-semibold">TaskList</h1>
            <div class="space-x-5">
                <a href="/" class="text-gray-300 hover:text-white border solid 1 py-1 px-2 rounded-[15px]">Home</a>
                <a href="/about" class="text-gray-300 hover:text-white border solid 1 py-1 px-2 rounded-[15px]">About Page</a>
            </div>
            <a href="{{ route('login') }}" class="bg-purple-900 text-white px-4 py-2 rounded hover:bg-purple-950">Log in</a>
        </div>
    </div>
</nav>

<main class="flex-grow pt-16">
    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $heading }}</h1>
        </div>
    </header>
    {{ $slot }}
</main>

<footer class="bg-purple-800 text-center text-gray-300 py-4 mt-auto">
    <p>&copy; 2025 TaskList. All rights reserved.</p>
</footer>

</body>
</html>
