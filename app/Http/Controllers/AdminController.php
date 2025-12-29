<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;

class AdminController extends Controller
{
    
    public function showLogin()
    {
        return view('admin.login');
    }
    
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
    
        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.dashboard');
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
