<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class orderController extends Controller
{
    public function buy($product_id){
        
        Order::create([
            'user_id' =>auth()->user()->id,
            'product_id' => $product_id,  
        ]);
        
    
        notify()->success('Order placed');
        return redirect()->back();
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
