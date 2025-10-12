<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\WishListItem;
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



public function toggle($productId)
{
    $user = auth()->user();

    // 1) Get or create wishlist
    $wishlist = $user->wishlist()->firstOrCreate([
        'user_id' => $user->id,
    ]);

    // 2) Check if product already exists in wishlist_items
    $exists = $wishlist->items()->where('product_id', $productId)->exists();

    if ($exists) {
        // Remove it
        $wishlist->items()->where('product_id', $productId)->delete();
    } else {
        // Add it
        $wishlist->items()->create([
            'product_id' => $productId,
            'quantity' => 1, // or default 1
        ]);
        return back()->with('success', 'Product added to wishlist.');
    }

    return back();
}


public function delete(){
   

    $user = auth()->user();

    // 1) Ensure the user has a wishlist (create if not exists)
    $wishlist = $user->wishlist()->firstOrCreate([
        'user_id' => $user->id,
    ]);

    // 2) If wishlist exists but has no items
    if ($wishlist->items()->count() == 0) {
        return back()->with('info', 'Your wishlist is already empty.');
    }

    // 3) Clear all items
    $wishlist->items()->delete();

    return back()->with('success', 'Wishlist cleared successfully.');




}


public function removeItem($id)
{
    $item = WishListItem::findOrFail($id);
    $item->delete();

    return redirect()->back()->with('success', 'Product removed from Wishlist successfully');
}




















}
