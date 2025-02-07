<x-layout>
    <x-slot:heading>
        <div class="flex items-center justify-center">
            Edit To-Do Item
        </div>
    </x-slot:heading>

    <div class="flex-grow pt-16">
        <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-8">
            <h2 class="text-purple-800 text-2xl font-bold dark:text-white">Edit To-Do</h2>

            <form action="{{ route('todos.update', $todo) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mt-4">
                    <label for="title" class="block">Title</label>
                    <input type="text" name="title" id="title" value="{{ old('title', $todo->title) }}" class="input" required>
                </div>

                <div class="mt-4">
                    <label for="description" class="block">Description</label>
                    <textarea name="description" id="description" class="input">{{ old('description', $todo->description) }}</textarea>
                </div>

                <div class="mt-4">
                    <label for="status" class="block">Status</label>
                    <select name="status" id="status" class="input">
                        <option value="pending" {{ old('status', $todo->status) == 'pending' ? 'selected' : '' }}>Pending</option>
                        <option value="in_progress" {{ old('status', $todo->status) == 'in_progress' ? 'selected' : '' }}>In Progress</option>
                        <option value="completed" {{ old('status', $todo->status) == 'completed' ? 'selected' : '' }}>Completed</option>
                    </select>
                </div>

                <div class="mt-4">
                    <label for="priority" class="block">Priority</label>
                    <select name="priority" id="priority" class="input">
                        <option value="low" {{ old('priority', $todo->priority) == 'low' ? 'selected' : '' }}>Low</option>
                        <option value="medium" {{ old('priority', $todo->priority) == 'medium' ? 'selected' : '' }}>Medium</option>
                        <option value="high" {{ old('priority', $todo->priority) == 'high' ? 'selected' : '' }}>High</option>
                    </select>
                </div>

                <div class="mt-4">
                    <label for="due_date" class="block">Due Date</label>
                    <input type="date" name="due_date" id="due_date" value="{{ old('due_date', $todo->due_date ? \Carbon\Carbon::parse($todo->due_date)->format('Y-m-d') : '') }}" class="input">
                </div>

                <div class="mt-6">
                    <button type="submit" class="btn btn-primary">Update Task</button>
                    <a href="{{ route('todos.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </main>
    </div>
</x-layout>
