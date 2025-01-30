<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterUserController extends Controller
{
    // Show the registration form
    public function create()
    {
        return view('auth.register'); // Ensure this view points to the correct registration page
    }

    // Handle the registration form submission
    public function store(Request $request)
    {
        // Validate the registration form input
        $validated = $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'confirmed', 'min:8'],
        ]);

        // Create a new user record in the database
        $user = User::create([
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        // Log the user in immediately after registration
        Auth::login($user);

        // Redirect to the dashboard after successful registration
        return redirect('/dashboard');
    }
}

