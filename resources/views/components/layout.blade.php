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
<body class="font-sans antialiased dark:bg-black dark:text-white/50 min-h-screen flex flex-col m-0 p-0 bg-cover bg-center" style="background-image: url('{{ asset('images/backg.jpg') }}');">


<nav class="bg-grey-500  top-0 left-0 w-full z-50 shadow-md" aria-label="Main navigation">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <h1 class="text-white text-lg font-semibold">TaskList</h1>
            <div class="space-x-5">
                <x-nav href="/" class="text-white px-4 py-2 rounded hover:bg-purple-950" :active="request()->is('/')">Home</x-nav>
                @auth
                    <x-nav href="{{ route('todos.index') }}" class="text-white px-4 py-2 rounded hover:bg-purple-950" :active="request()->is('todos')">ToDoList</x-nav>
                @endauth

                <x-nav href="/about" class="text-white px-4 py-2 rounded hover:bg-purple-950" :active="request()->is('about')">About Page</x-nav>
            </div>
            @guest
                <x-nav href="{{ route('login') }}" class="text-white px-4 py-2 rounded hover:bg-purple-950" :active="request()->is('login')">Log in</x-nav>
            @endguest
            @auth
                <form method="Post" action="/logout">
                    @csrf
                    <x-form-button>Log out</x-form-button>
                </form>
            @endauth
        </div>
    </div>
</nav>

<hr>
<main class="flex-grow pt-16">
    {{ $slot }}
</main>


<footer class="bg-purple-800 bg-opacity-20 text-center text-gray-300 py-4 mt-auto flex justify-center items-center">
    <p>&copy; 2025 TaskList. All rights reserved.</p>
</footer>


</body>
</html>
