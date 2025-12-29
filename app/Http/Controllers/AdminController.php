<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Product;
use App\Models\Admin;

class AdminController extends Controller
{
    
    public function showLogin()
    {
        return view('admin.login');
    }
    
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $admin = Admin::where('email', $request->email)->first();
        if (! $admin) {
            return back()->withErrors(['email' => 'Invalid credentials']);
        }

        try {
            if (Hash::check($request->password, $admin->password)) {
                Auth::guard('admin')->login($admin);
                return redirect()->route('admin.dashboard');
            }
        } catch (\RuntimeException $e) {
            // If the stored password isn't bcrypt, fall back to plaintext compare.
            if ($request->password === $admin->password) {
                // Re-hash the password using bcrypt for future checks.
                $admin->password = Hash::make($request->password);
                $admin->save();
                Auth::guard('admin')->login($admin);
                return redirect()->route('admin.dashboard');
            }
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }
    
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
    
    public function dashboard()
    {
        $products = Product::all();
        return view('admin.dashboard', compact('products'));
    }
    
    public function addProduct(Request $request)
{
    // Validation
    $request->validate([
        'product_name' => 'required|string|max:255',
        'product_price' => 'required|numeric',
        'product_image' => 'required|string',
    ]);

    // Insert into database
    Product::create([
        'name' => $request->product_name,
        'price' => $request->product_price,
        'image' => $request->product_image,
    ]);

    return redirect()->route('admin.dashboard')->with('success', 'Product added successfully!');
}
    
}
