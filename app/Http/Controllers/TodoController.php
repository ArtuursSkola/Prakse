<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{


    // Show user's to-do lists
    public function index()
    {
        $todos = Auth::user()->todos; // Fetch only the logged-in user's to-dos
        return view('todos.index', compact('todos'));
    }

    // Show the create form
    public function create()
    {
        return view('todos.create');
    }

    // Store a new to-do item
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|in:pending,completed,in_progress',
            'priority' => 'nullable|in:low,medium,high',
            'due_date' => 'nullable|date',
        ]);

        Auth::user()->todos()->create($request->all());

        return redirect()->route('todos.index')->with('success', 'To-Do Item Created.');
    }

    // Show the edit form
    public function edit(Todo $todo)
    {
        if ($todo->user_id !== Auth::id()) {
            abort(403); // Prevent unauthorized access
        }

        return view('todos.edit', compact('todo'));
    }

    // Update the to-do item
    public function update(Request $request, Todo $todo)
    {
        if ($todo->user_id !== Auth::id()) {
            abort(403);
        }

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|in:pending,completed,in_progress',
            'priority' => 'nullable|in:low,medium,high',
            'due_date' => 'nullable|date',
        ]);

        $todo->update($request->all());

        return redirect()->route('todos.index')->with('success', 'To-Do Updated.');
    }

    // Delete the to-do item
    public function destroy(Todo $todo)
    {
        if ($todo->user_id !== Auth::id()) {
            abort(403);
        }

        $todo->delete();

        return redirect()->route('todos.index')->with('success', 'To-Do Deleted.');
    }
}

