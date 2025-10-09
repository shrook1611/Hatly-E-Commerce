<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\order;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index()
    {
         $orders = order::with('items.product','user')->get();
        return view('admin.orders.index', compact('orders'));
    }

    public function customerOrder()
    {
        $orders = order::with('items.product')->where('user_id', auth()->user()->id)->paginate(10);
        return view('customer.orders.index', compact('orders'));
    }
    public function createOrder()
    {
        try {

            DB::beginTransaction();
            $cart = Cart::with('items.product')->where('user_id', auth()->user()->id)->first();
            $total = $cart->items->sum(fn($item) => $item->quantity * $item->product->price);
            if (!$cart || $cart->items->isEmpty()) {
                return redirect()->back()->with('error', 'Your cart is empty.');
            }

            $order = order::create([
                'user_id' => auth()->user()->id,
                'total' => $total,
            ]);
            foreach ($cart->items as $item) {
                $order->items()->create([
                    'product_id' => $item->product_id,
                    'quantity' => $item->quantity,
                    'price' => $item->product->price,
                ]);
            }

            $cart->items()->delete();
            DB::commit();
            return redirect()->route('userhome')->with('success', 'Order created successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Failed to create order: ' . $e->getMessage());
        }
    }

public function delete($id){
$order = order::findOrFail($id);
        $order->delete();
        return redirect()->route('product')->with('success', 'order deleted successfully');


}


public function show($id){
  $order = order::with('items.product') ->where('user_id', auth()->id())  // Security: only show user's own orders
        ->findOrFail($id);

      
    
    // $subtotal = $order->items->sum(function($item) {
    //     return $item->quantity * $item->price;
    // });
    
    // $vat = $subtotal * 0.14;
    // $shipping = 0;
    // $total = $subtotal + $vat + $shipping;
    
 
  return view('admin.orders.show', compact('order'));



}




}
