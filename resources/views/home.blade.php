<x-layout>
    <x-slot:heading>
        <div class="flex items-center justify-center">
            Home page
        </div>
    </x-slot:heading>

    <div class="flex-grow pt-16">
        <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-8">
            <div class="border-2 border-gray-300 p-6 rounded-lg bg-purple-600 bg-opacity-10">
            <h2 class="text-purple-800 text-2xl font-bold dark:text-white">Welcome to TaskList</h2>
            <p class="max-w-lg text-white">Stay organized, stay productive.</p>
            <p class="max-w-lg text-white">
                Life can get overwhelming, but staying on top of your tasks doesn’t have to be complicated.
                Our website is designed to help you organize your day, track your goals, and stay productive—whether it's for work, school, or personal projects.
            </p>
            <br>


            <div class="flex flex-wrap items-start justify-between w-full gap-10">


                <div class="flex-1 max-w-lg space-y-4">
                    <ul class="list-disc pl-5 space-y-2 text-white">
                        <li><strong>Create and customize</strong> task lists tailored to your needs.</li>
                        <li><strong>Set priorities</strong> so you always know what’s most important.</li>
                        <li><strong>Track progress</strong> and celebrate your accomplishments.</li>
                        <li><strong>Access your tasks anywhere</strong>, anytime with a simple, user-friendly interface.</li>
                    </ul>
                    <p class="text-white">No matter how big or small your tasks, our platform is here to make sure you never miss a deadline again.</p>
                </div>


                <div class="flex-shrink-0 w-1/2 lg:w-1/3 -mt-20">
                    <img src="images/list.jpg" alt="A task list image" class="rounded-lg shadow-md w-full">
                </div>
            </div>
            </div>
        </main>
    </div>
</x-layout>
