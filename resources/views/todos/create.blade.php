<x-layout>
    <x-slot:heading>
        <div class="flex items-center justify-center">
            Create New Task
        </div>
    </x-slot:heading>

    <div class="flex-grow pt-16">
        <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-8">
            <div class="border-2 border-gray-300 p-6 rounded-lg bg-purple-600 bg-opacity-10">
            <h2 class="text-purple-800 text-2xl font-bold dark:text-white">Create a New Task</h2>

            <form action="{{ route('todos.store') }}" method="POST" class="space-y-4">
                @csrf


                <div>
                    <label class="block text-sm font-medium text-white">Title</label>
                    <input type="text" name="title" required class="w-full p-2 border border-gray-300 rounded-md">
                </div>

                <div>
                    <label class="block text-sm font-medium text-white">Description</label>
                    <textarea name="description" class="w-full p-2 border border-gray-300 rounded-md"></textarea>
                </div>


                <div>
                    <label class="block text-sm font-medium text-white">Status</label>
                    <select name="status" class="w-full p-2 border border-gray-300 rounded-md">
                        <option value="pending">Pending</option>
                        <option value="in_progress">In Progress</option>
                        <option value="completed">Completed</option>
                    </select>
                </div>

                <!-- Priority -->
                <div>
                    <label class="block text-sm font-medium text-white">Priority</label>
                    <select name="priority" class="w-full p-2 border border-gray-300 rounded-md">
                        <option value="low">Low</option>
                        <option value="medium">Medium</option>
                        <option value="high">High</option>
                    </select>
                </div>


                <div>
                    <label class="block text-sm font-medium text-white">Due Date and Time</label>
                    <input type="datetime-local" name="due_date" class="w-full p-2 border border-gray-300 rounded-md">
                </div>

                <x-form-button type="submit" class="btn mt-4">Save</x-form-button>
                <a href="{{ route('todos.index') }}" class="btn btn-secondary mt-4 text-white">Cancel</a>

            </form>
        </main>
    </div>
</x-layout>
