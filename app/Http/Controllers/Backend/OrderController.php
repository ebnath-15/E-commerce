<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetails;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function list(){
        $orders = Order::all();

        return view('admin.pages.order.list',compact('orders'));
    }

    
}
