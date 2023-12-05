<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Product;
use Illuminate\Http\Request;

class orderController extends Controller
{

    public function checkout(){
        return view('frontend.checkout');

    }
    public function orderPlace(Request $request){
        //session()->forget('vcart');


        $cart = session()->get('vcart');

        

            $order = Order::create([
                'user_id'=>auth()->user()->id,
                'status'=> 'pending',
                'total_price' => array_sum(array_column($cart, 'subtotal')),
                'receiver_name' => $request->name,
                'receiver_address' => $request->address,
                'receiver_mobile' => $request->phone,
                'receiver_email' => $request->email,
                'order_note' => $request->note,


            ]);



            foreach($cart as $key=>$item){
                
                OrderDetails::create([
                    'order_id'=> $order->id,
                    'product_id' => $item['id'],
                    'quantity' => $item['quantity'],
                    'subtotal' => $item['subtotal']
                ]);
            }
           
            
            session()->forget('vcart');
            notify()->success('Order Placed');
            return redirect()->route('frontend.home');

}

     public function cancel($product_id){
        $orders = Order::find($product_id);
        if($orders){
            $orders->update([
                'status' => 'Canceled'
                
            ]);
            notify()->success('order cancelled');
            return redirect()->back();
        }
    }
    
}
