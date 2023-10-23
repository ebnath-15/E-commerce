<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function list(){
        $payments = Payment::all();
        return view('admin.pages.payment.list', compact('payments'));
        
    }
    public function create(){
        return view('admin.pages.payment.create');
    }
    public function store(Request $request){
        Customer::create([
            'payment_amount'=> $request->amount,
            'payment_date_time'=> $request->date_time,
            'payment_method'=> $request->payment_method,
            'payment_information' => $request->payer_information,
        ]);
        return redirect()->back();
        
    }

}
