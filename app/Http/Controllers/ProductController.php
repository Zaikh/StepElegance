<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function showProducts()
    {
        $products = Product::all();
        return view('/home', compact('products'));
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

    public function editProduct($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.edit_product', compact('product'));
    }

    public function updateProduct(Request $request, $id)
    {
        // Validation
        $request->validate([
            'product_name' => 'required|string|max:255',
            'product_price' => 'required|numeric',
            'product_image' => 'required|string',
        ]);

        // Update product
        $product = Product::findOrFail($id);
        $product->update([
            'name' => $request->product_name,
            'price' => $request->product_price,
            'image' => $request->product_image,
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Product updated successfully!');
    }

    public function deleteProduct($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Product deleted successfully!');
    }
}
