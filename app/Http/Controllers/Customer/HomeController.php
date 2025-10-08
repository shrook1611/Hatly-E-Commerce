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
    $query = Product::query();
if($request->filled('productName')){
  $query->where('name','like','%'.$request->productName.'%');
}
if($request->filled('category_id')){
  $query->where('category_id',$request->category_id);
}
$products=$query->get();

    $categories=Category::all();
    $cart=Cart::with('items.product')->where('user_id',auth()->user()->id)->first();
    $wishList=WishList::with('items.product')->where('user_id',auth()->user()->id)->first();
    $total=0;
    if($cart){
$total=$cart->items->sum(function($item){
  return $item->price;
});



    }
    return view('customer.index' , compact('products','categories', 'cart','total','wishList'));
  }
}
