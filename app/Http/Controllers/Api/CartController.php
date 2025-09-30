<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    
    public function index()
    {
        $cart = Cart::with('product')
            ->where('user_id', Auth::id())
            ->get();

        return response()->json($cart);
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'nullable|integer|min:1'
        ]);

        $cart = Cart::updateOrCreate(
            [
                'user_id' => Auth::id(),
                'product_id' => $request->product_id,
            ],
            [
                'quantity' => $request->quantity ?? 1
            ]
        );

        return response()->json([
            'message' => 'Product added to cart successfully',
            'cart' => $cart
        ]);
    }

    
    public function update(Request $request, Cart $cart)
    {
        if ($cart->user_id !== Auth::id()) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        $request->validate([
            'quantity' => 'required|integer|min:1'
        ]);

        $cart->update(['quantity' => $request->quantity]);

        return response()->json([
            'message' => 'Cart updated successfully',
            'cart' => $cart
        ]);
    }

    
    public function destroy(Cart $cart)
    {
        if ($cart->user_id !== Auth::id()) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        $cart->delete();

        return response()->json(['message' => 'Item removed from cart']);
    }
}
