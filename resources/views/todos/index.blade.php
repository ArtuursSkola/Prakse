<x-layout>
    <x-slot:heading>
        <div class="flex items-center justify-center">
            Your To-Do List
        </div>
    </x-slot:heading>

    <div class="flex-grow pt-16">
        <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-8">
            <h2 class="text-purple-800 text-2xl font-bold dark:text-white">Your To-Do List</h2>

            <a href="{{ route('todos.create') }}" class="btn">Create New Task</a>

            <div class="mt-6 space-y-4">
                @foreach ($todos as $todo)
                    <div class="p-4 border border-gray-300 rounded-lg">
                        <h3 class="text-xl font-semibold">{{ $todo->title }} ({{ ucfirst($todo->status) }})</h3>
                        <p><strong>Priority:</strong> {{ ucfirst($todo->priority) }}</p>
                        <p><strong>Due Date:</strong> {{ \Carbon\Carbon::parse($todo->due_date)->format('M d, Y h:i A') }}</p>
                        <p><strong>Description:</strong> {{ $todo->description }}</p>

                        @php
                            // Ensure the due_date is correctly parsed and compare it
                            $dueDate = \Carbon\Carbon::parse($todo->due_date);
                            $now = \Carbon\Carbon::now();

                            // Calculate the difference
                            $diff = $now->diff($dueDate);

                            // Check if the due date is in the past
                            $isExpired = $dueDate->isPast();
                        @endphp

                        <p>
                            <strong>Time Left:</strong>
                            @if ($isExpired)
                                <span class="text-red-500">Expired</span>
                            @else
                                <span class="text-green-500">
                                    @if ($diff->d > 0)
                                        {{ $diff->d }} days
                                    @endif
                                    @if ($diff->h > 0)
                                        {{ $diff->h }} hours
                                    @endif
                                    @if ($diff->i > 0)
                                        {{ $diff->i }} minutes
                                    @endif
                                </span>
                            @endif
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
        </main>
    </div>
</x-layout>
