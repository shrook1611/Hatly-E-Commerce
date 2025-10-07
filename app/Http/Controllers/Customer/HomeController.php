<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index()
  {
    $products = Product::all();
    $categories=Category::all();
    $cart=Cart::with('items.product')->where('user_id',auth()->user()->id)->first();
    $total=0;
    if($cart){
$total=$cart->items->sum(function($item){
  return $item->price;
});



    }
    return view('customer.index' , compact('products','categories', 'cart','total'));
  }
}
