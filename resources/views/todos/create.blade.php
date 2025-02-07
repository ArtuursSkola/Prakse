<x-layout>
    <x-slot:heading>
        <div class="flex items-center justify-center">
            Create New Task
        </div>
    </x-slot:heading>

    <div class="flex-grow pt-16">
        <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-8">
            <h2 class="text-purple-800 text-2xl font-bold dark:text-white">Create a New Task</h2>

            <form action="{{ route('todos.store') }}" method="POST" class="space-y-4">
                @csrf

                <!-- Title -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">Title</label>
                    <input type="text" name="title" required class="w-full p-2 border border-gray-300 rounded-md">
                </div>

                <!-- Description -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">Description</label>
                    <textarea name="description" class="w-full p-2 border border-gray-300 rounded-md"></textarea>
                </div>

                <!-- Status -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">Status</label>
                    <select name="status" class="w-full p-2 border border-gray-300 rounded-md">
                        <option value="pending">Pending</option>
                        <option value="in_progress">In Progress</option>
                        <option value="completed">Completed</option>
                    </select>
                </div>

                <!-- Priority -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">Priority</label>
                    <select name="priority" class="w-full p-2 border border-gray-300 rounded-md">
                        <option value="low">Low</option>
                        <option value="medium">Medium</option>
                        <option value="high">High</option>
                    </select>
                </div>

                <!-- Due Date -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">Due Date</label>
                    <input type="date" name="due_date" class="w-full p-2 border border-gray-300 rounded-md">
                </div>

                <button type="submit" class="btn mt-4">Save</button>
            </form>
        </main>
    </div>
</x-layout>
