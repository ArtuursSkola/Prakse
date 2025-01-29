<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css']);


    <title>Prakse</title>


    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />


    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans antialiased dark:bg-black dark:text-white/50 -mt-16">

<div class="bg-gray-100 h-10"></div>

<div class="bg-gray-100">
    <div class="min-h-full">

        <nav class="bg-purple-800" aria-label="Main navigation">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">

                    <h1 class="text-white text-lg font-semibold">TaskList</h1>

                    <div class="space-x-5">
                        <a href="/" class="text-gray-300 hover:text-white border solid 1 py-1 px-2 rounded-[15px]">Home</a>
                        <a href="#" class="text-gray-300 hover:text-white border solid 1 py-1 px-2 rounded-[15px]">About Page</a>
                    </div>

                    <a href="/login" class="bg-purple-900 text-white px-4 py-2 rounded hover:bg-purple-950">Log in</a>


                </div>
            </div>
        </nav>

        <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-8">
            <h2 class="text-purple-800 text-2xl font-bold dark:text-white">Welcome to TaskList</h2>
            <p>Stay organized, stay productive.</p>
            <p>Life can get overwhelming, but staying on top of your tasks doesn’t have to be complicated. Our website is designed to help you organize your day, track your goals, and stay productive—whether it's for work, school, or personal projects.</p>
            <br>

            <div class="flex justify-between w-full space-x-16">

                <div class="flex-1">
                    <ul class="list-disc pl-5">
                        <li><strong>Create and customize</strong> task lists tailored to your needs.</li>
                        <li><strong>Set priorities</strong> so you always know what’s most important.</li>
                        <li><strong>Track progress</strong> and celebrate your accomplishments.</li>
                        <li><strong>Access your tasks anywhere</strong>, anytime with a simple, user-friendly interface.</li>
                    </ul>
                    <br>
                    <p>No matter how big or small your tasks, our platform is here to make sure you never miss a deadline again.</p>
                    <a href="signup.html" class="btn">Get Started</a>
                </div>


                <div class="flex-shrink-0 ml-16">
                    <img src="images/list.jpg" alt="A task list image" class="rounded-lg shadow-md w-1/2">
                </div>
            </div>
        </main>


        </p>
        </main>
    </div>
</div>

<footer>
    <nav class="bg-purple-800" aria-label="Footer navigation">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-center">
                <p class="text-gray-300">&copy; 2025 TaskList. All rights reserved.</p>
            </div>
        </div>
    </nav>
</footer>
</body>
</html>
