<?php

namespace App\Http\Controllers\Backend;
use App\Models\OrderDetails;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderDetailsController extends Controller
{
    public function details(){
        $order_details = OrderDetails::all();
        return view('admin.pages.OrderDetails.details', compact('order_details'));
    }
}
