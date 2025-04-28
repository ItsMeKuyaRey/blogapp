<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Show the registration form
    public function showRegister()
    {
        return view('auth.register'); // Ensure this view exists
    }

    // Handle the registration process
    public function register(Request $request)
    {
        // Validate the registration form data
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);

        // Log to confirm validation passed
        \Log::info('Validation passed', $validated);

        // Create a new user in the database
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Log to confirm user creation
        \Log::info('User created', $user->toArray());

        // Redirect to the login page with a success message
        return redirect()->route('login')->with('success', 'Registration successful. Please log in.');
    }

    // Show the login form
    public function showLogin()
    {
        return view('auth.login'); // Ensure this view exists
    }

    // Handle the login process
    public function login(Request $request)
    {
        // Validate the login credentials
        $credentials = $request->only('email', 'password');

        // Attempt to log the user in
        if (Auth::attempt($credentials)) {
            // Regenerate the session ID to prevent session fixation
            $request->session()->regenerate();

            // Redirect to the dashboard after successful login
            return redirect()->route('dashboard');
        }

        // If login fails, return with an error message
        return back()->withErrors([
            'email' => 'Invalid credentials.',
        ]);
    }

    // Handle user logout
    public function logout(Request $request)
    {
        // Log the user out and invalidate the session
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect to the login page after logging out
        return redirect()->route('login');
    }
}