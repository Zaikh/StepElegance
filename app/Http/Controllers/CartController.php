<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    /**
     * Add a product to the cart
     */
    public function add(Request $request)
    {
        $productId = $request->input('product_id');
        $product = Product::findOrFail($productId);
        
        $cart = session()->get('cart', []);
        
        if(isset($cart[$productId])) {
            $cart[$productId]['quantity']++;
        } else {
            $cart[$productId] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->image,
                "size" => null // Initialize size as null
            ];
        }
        
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
    
    /**
     * Buy now - clear cart, add single product, redirect to checkout
     */
    public function buyNow(Request $request)
    {
        $productId = $request->input('product_id');
        $product = Product::findOrFail($productId);
        
        // Clear the current cart
        session()->forget('cart');
        
        // Create a new cart with just this product
        $cart = [
            $productId => [
                'id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'image' => $product->image,
                'quantity' => 1
            ]
        ];
        
        // Update the cart in the session
        session()->put('cart', $cart);
        
        // Redirect to checkout page
        return redirect()->route('checkout');
    }
    
    /**
     * Show the cart
     */
    public function showCart()
    {
        $cart = session()->get('cart', []);
        $total = 0;
        
        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }
        
        return view('cart', compact('cart', 'total'));
    }
    
    /**
     * Update cart item quantity
     */
    public function updateQuantity(Request $request)
    {
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity');
        
        $cart = session()->get('cart', []);
        
        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] = $quantity;
            session()->put('cart', $cart);
        }
        
        return redirect()->back()->with('success', 'Cart updated successfully!');
    }
    
    /**
     * Remove item from cart
     */
    public function removeItem(Request $request)
    {
        $productId = $request->input('product_id');
        
        $cart = session()->get('cart', []);
        
        if (isset($cart[$productId])) {
            unset($cart[$productId]);
            session()->put('cart', $cart);
        }
        
        return redirect()->back()->with('success', 'Item removed from cart!');
    }
    
    /**
     * Clear the entire cart
     */
    public function clearCart()
    {
        session()->forget('cart');
        
        return redirect()->back()->with('success', 'Cart cleared successfully!');
    }

    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                $cart[$request->id]["quantity"] = $request->quantity;
                session()->put('cart', $cart);
                return redirect()->back()->with('success', 'Cart updated successfully');
            }
        }
        return redirect()->back()->with('error', 'Failed to update cart');
    }

    public function updateSize(Request $request)
    {
        $request->validate([
            'product_id' => 'required',
            'size' => 'required|in:XS,S,M,L,XL,XXL'
        ]);

        $cart = session()->get('cart', []);
        
        if(isset($cart[$request->product_id])) {
            $cart[$request->product_id]['size'] = $request->size;
            session()->put('cart', $cart);
            return response()->json(['success' => true]);
        }
        
        return response()->json(['success' => false], 404);
    }

    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            return redirect()->back()->with('success', 'Product removed successfully');
        }
        return redirect()->back()->with('error', 'Failed to remove product');
    }

    public function clear()
    {
        session()->forget('cart');
        return redirect()->back()->with('success', 'Cart cleared successfully');
    }
} 