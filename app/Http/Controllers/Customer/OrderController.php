<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function createOrder()
    {
        // dd('createOrder hit');
       
            DB::beginTransaction();
            $cart = Cart::with('items.product')->where('user_id', auth()->user()->id())->first();
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
        

        // catch (\Exception $e) {
        //     DB::rollBack();
        //     return redirect()->back()->with('error', 'Failed to create order: ' . $e->getMessage());
        // }
    }
}
