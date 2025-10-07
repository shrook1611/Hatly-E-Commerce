<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request, $id)
    {


        $product = Product::findOrFail($id);
        if (!$product) {
            return redirect()->back()->with('error', 'Product not found.');
        }
        $user = auth()->user();
        if (!$user) {
            return redirect()->route('login')->with('error', 'You must be logged in to add to cart.');
        }
        $cart = Cart::firstOrCreate(['user_id' => auth()->user()->id]);
        $item = $cart->items()->where('product_id', $product->id)->first();
        if ($item) {
            $item->update([
                'quantity' => $item->quantity + 1,
                'price' => $product->price * ($item->quantity + 1),

            ]);
        } else {
            $cart->items()->create([
                'product_id' => $product->id,
                'quantity' => 1,
                'price' => $product->price,

            ]);
        }
        return redirect()->route('userhome')->with('success', 'Product added to cart successfully');
    }
}
