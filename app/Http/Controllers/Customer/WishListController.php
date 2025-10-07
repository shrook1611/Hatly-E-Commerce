<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\WhishList;
use App\Models\WishList;

class WishListController extends Controller
{
    public function addToWish(Request $request, $id)
    {


        $product = Product::findOrFail($id);
        if (!$product) {
            return redirect()->back()->with('error', 'Product not found.');
        }
        $user = auth()->user();
        if (!$user) {
            return redirect()->route('login')->with('error', 'You must be logged in to add to cart.');
        }
        $whishList = WishList::firstOrCreate(['user_id' => auth()->user()->id]);
        $item = $whishList->items()->where('product_id', $product->id)->first();
        if ($item) {
            $item->update([
                'quantity' => $item->quantity + 1,
               

            ]);
        } else {
          $whishList->items()->create([
                'product_id' => $product->id,
                'quantity' => 1,
         

            ]);
        }
        return redirect()->route('userhome')->with('success', 'Product added to WishList successfully');
    }
}
