<x-layout>
    <x-slot:heading>
        <div class="flex items-center justify-center">
            Edit To-Do Item
        </div>
    </x-slot:heading>

    <div class="flex-grow pt-16">
        <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-8">
            <h2 class="text-purple-800 text-2xl font-bold dark:text-white">Edit To-Do</h2>

            <form action="{{ route('todos.update', $todo) }}" method="POST" class="space-y-4">
                @csrf
                @method('PUT')


                <div>
                    <label class="block text-sm font-medium text-gray-700">Title</label>
                    <input type="text" name="title" value="{{ old('title', $todo->title) }}" required class="w-full p-2 border border-gray-300 rounded-md">
                </div>


                <div>
                    <label class="block text-sm font-medium text-gray-700">Description</label>
                    <textarea name="description" class="w-full p-2 border border-gray-300 rounded-md">{{ old('description', $todo->description) }}</textarea>
                </div>


                <div>
                    <label class="block text-sm font-medium text-gray-700">Status</label>
                    <select name="status" class="w-full p-2 border border-gray-300 rounded-md">
                        <option value="pending" {{ old('status', $todo->status) == 'pending' ? 'selected' : '' }}>Pending</option>
                        <option value="in_progress" {{ old('status', $todo->status) == 'in_progress' ? 'selected' : '' }}>In Progress</option>
                        <option value="completed" {{ old('status', $todo->status) == 'completed' ? 'selected' : '' }}>Completed</option>
                    </select>
                </div>


                <div>
                    <label class="block text-sm font-medium text-gray-700">Priority</label>
                    <select name="priority" class="w-full p-2 border border-gray-300 rounded-md">
                        <option value="low" {{ old('priority', $todo->priority) == 'low' ? 'selected' : '' }}>Low</option>
                        <option value="medium" {{ old('priority', $todo->priority) == 'medium' ? 'selected' : '' }}>Medium</option>
                        <option value="high" {{ old('priority', $todo->priority) == 'high' ? 'selected' : '' }}>High</option>
                    </select>
                </div>


                <div>
                    <label class="block text-sm font-medium text-gray-700">Due Date</label>
                    <input type="date" name="due_date" value="{{ old('due_date', $todo->due_date ? \Carbon\Carbon::parse($todo->due_date)->format('Y-m-d') : '') }}" class="w-full p-2 border border-gray-300 rounded-md">
                </div>

                <div class="mt-6 flex space-x-4">
                    <x-form-button type="submit" variant="primary">Update Task</x-form-button>
                    <x-form-button variant="secondary" route="{{ route('todos.index') }}">Cancel</x-form-button>
                </div>

            </form>
        </main>
    </div>
</x-layout>
