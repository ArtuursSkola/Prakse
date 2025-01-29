<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    // Show the login form
    public function create()
    {
        return view('auth.login'); // Ensure this points to the correct login view
    }

    // Handle the login form submission
    public function store(Request $request)
    {
        // Validate the login form
        $attributes = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Attempt login
        if (!Auth::attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'Your provided credentials could not be verified.',
            ]);
        }

        // Regenerate session token to prevent session fixation
        $request->session()->regenerate();

        // Redirect to the dashboard after successful login
        return redirect('/dashboard'); // Adjust redirect as necessary
    }

    // Handle logout
    public function destroy(Request $request)
    {
        Auth::logout();

        return redirect('/'); // Redirect to homepage after logout
    }
}

