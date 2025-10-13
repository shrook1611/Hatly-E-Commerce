<?php

namespace App\Http\Controllers\customer;
use App\Models\order;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use App\Models\WishList;

class CustomerController extends Controller
{
//     public function index(){
//   $orders = Order::with('items.product')->where('user_id', auth()->user()->id)->get();
//     $cart=Cart::with('items.product')->where('user_id',auth()->user()->id)->first();
//     $wishList=WishList::with('items.product')->where('user_id',auth()->user()->id)->first();
//     $total=0;
//     if($cart){
// $total=$cart->items->sum(function($item){
//   return $item->price;
// });
//     }
// return view('customer.customerorderdetails',compact('orders,cart','total','wishList'));



//     }
}
