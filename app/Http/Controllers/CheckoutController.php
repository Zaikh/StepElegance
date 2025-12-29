<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function show()
    {
        return view('checkout');
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'card_name' => 'required|string|max:255',
            'card_number' => 'required|string|max:19',
            'expiry_date' => 'required|string|max:5',
            'cvv' => 'required|string|max:3',
        ]);

        // Here you would typically:
        // 1. Process the payment
        // 2. Save the order to database
        // 3. Clear the cart
        // 4. Send confirmation email

        // For now, we'll just clear the cart and show success message
        session()->forget('cart');

        return redirect()->route('home')->with('success', 'Order placed successfully! Thank you for your purchase.');
    }
}
