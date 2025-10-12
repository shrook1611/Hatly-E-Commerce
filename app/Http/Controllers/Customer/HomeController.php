<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use App\Models\WishList;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index(Request $request)

  {
        if(!auth()->user()){
return redirect()->route('login')->with('error', 'You must be logged in to access this page.');
    }
    
    $query = Product::query();
if($request->filled('productName')){
  $query->where('name','like','%'.$request->productName.'%');
}
if($request->filled('category_id')){
  $query->where('category_id',$request->category_id);
}
if ($request->filled('new_arrival')) {
   $query->where('created_at', '>=', now()->subDays(2)); // or whatever value you need
}
if($request->filled('top_seller')){
  $query->where('top_seller',true);
}
if($request->filled('all_products')){
  $query->get();
}
$products=$query->get();
$topSellingProducts=Product::where('top_seller',true)->get();
    $categories=Category::all();

    $cart=Cart::with('items.product')->where('user_id',auth()->user()->id)->first();
    $wishList=WishList::with('items.product')->where('user_id',auth()->user()->id)->first();
    $total=0;
    if($cart){
$total=$cart->items->sum(function($item){
  return $item->price;
});



    }
    return view('customer.index' , compact('products','categories', 'cart','total','wishList','topSellingProducts'));
  }
}
