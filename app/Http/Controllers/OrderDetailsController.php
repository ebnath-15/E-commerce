<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderDetailsController extends Controller
{
    public function list(){
        return view('admin.pages.OrderDetails.list');
    }
}
