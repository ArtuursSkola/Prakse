<x-layout>
    <x-slot:heading>
        <div class="flex items-center justify-center">
            Your To-Do List
        </div>
    </x-slot:heading>

    <div class="flex-grow pt-16">
        <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-8">
            <!-- Background added to the outer container -->
            <div class="border-2 border-gray-300 p-6 rounded-lg bg-purple-600 bg-opacity-10">
                <div class="mt-6 space-y-4">
                    @foreach ($todos as $todo)
                        <!-- Added background to each individual to-do item -->
                        <div class="p-7 border border-white rounded-lg max-w-md mx-auto w-full sm:w-2/3 lg:w-1/2 shadow-2xl bg-white">
                            <h3 class="text-xl font-semibold text-black">{{ $todo->title }} ({{ ucfirst($todo->status) }})</h3>
                            <p class="text-black"><strong>Description:</strong> {{ $todo->description }}</p>
                            <p class="text-black"><strong>Due Date:</strong> {{ \Carbon\Carbon::parse($todo->due_date)->format('M d, Y h:i A') }}</p>
                            <p class="text-black"><strong>Priority:</strong> {{ ucfirst($todo->priority) }}</p>

                            <p class="text-sm text-black">
                                <strong>Created At:</strong> {{ \Carbon\Carbon::parse($todo->created_at)->format('M d, Y h:i A') }}
                            </p>

                            <div class="mt-2 flex space-x-4">
                                <a href="{{ route('todos.edit', $todo) }}" class="text-blue-500">Edit</a>

                                <form action="{{ route('todos.destroy', $todo) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500">Delete</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
                <br>
                <hr>
                <div class="mt-6 text-center">
                    {{ $todos->links() }}
                </div>

                <div class="mt-6 text-center">
                    <x-form-button type="button" class="btn">
                        <a href="{{ route('todos.create') }}" class="text-white">Create New Task</a>
                    </x-form-button>
                </div>
            </div>
        </main>
    </div>
</x-layout>
