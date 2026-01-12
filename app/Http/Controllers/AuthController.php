<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Appointment; // Make sure you import the Appointment model

class AuthController extends Controller
{
    // Show login form
    public function showLoginForm()
    {
        return view('login');
    }

    // Handle login or first-time login
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email'    => 'required|email',
            'password' => 'required|min:6'
        ]);

        // --- Admin login check ---
        if ($credentials['email'] === 'admin@glowlab.com' && $credentials['password'] === 'admin12345') {
            // Optionally store a session flag to identify admin
            session(['is_admin' => true]);
            return redirect()->route('admin.dashboard');
        }


        // Check if user exists
        $user = User::where('email', $credentials['email'])->first();

        if ($user) {
            // User exists, attempt login
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->intended('/profile');
            } else {
                return back()->withErrors([
                    'email' => 'Incorrect password for this email.',
                ])->onlyInput('email');
            }
        } else {
            // First-time login: create user
            $newUser = User::create([
                'name'     => explode('@', $credentials['email'])[0], // default name from email
                'email'    => $credentials['email'],
                'password' => bcrypt($credentials['password']), // hash password
            ]);

            Auth::login($newUser); // log in newly created user
            $request->session()->regenerate();

            return redirect('/profile')->with('success', 'Account created and logged in successfully.');
        }
    }

    // Handle logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
