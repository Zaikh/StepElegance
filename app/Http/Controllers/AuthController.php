<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showSignup() {
        return view('Signup');
    }

    public function processSignup(Request $request) {
        // Validation
        $request->validate([
            'txtname' => 'required|string|max:255',
            'txtemail' => 'required|email|unique:users,email',
            'pass' => 'required|min:8|confirmed'
        ], [
            'pass.confirmed' => 'The password confirmation does not match.',
        ]);

        // Create user in `users` table
        $user = User::create([
            'name' => $request->txtname,
            'email' => $request->txtemail,
            'password' => Hash::make($request->pass),
        ]);

        // Do not auto-login. Redirect user to sign-in with success message.
        return redirect('/Sign_in')->with('success', 'You have successfully made your account.');
    }

    public function showLogin() {
        return view('Sign_in');
    }
    
    public function processLogin(Request $request)
    {
        $request->validate([
            'txtname' => 'required|string',
            'txtpass' => 'required|string',
        ]);

        $user = User::where('name', $request->txtname)->first();

        if ($user && Hash::check($request->txtpass, $user->password)) {
            Auth::login($user);
            $request->session()->regenerate();
            return redirect('/index')->with('success', 'Welcome back, ' . $user->name . '!');
        }
    
        return back()->withErrors([
            'txtname' => 'The provided credentials do not match our records.',
        ])->withInput($request->only('txtname'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/Sign_in')->with('success', 'You have been successfully logged out!');
    }
}
