<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Library\SslCommerz\SslCommerzNotification;
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
            $this->payOnline($order);
            
            notify()->success('Order Placed');
            return redirect()->route('frontend.home');

}
 public function payOnline($order){
    //dd($order);
    $post_data = array();
        $post_data['total_amount'] = (int)$order->total_price; # You cant not pay less than 10
        $post_data['currency'] = "BDT";
        $post_data['tran_id'] = uniqid(); // tran_id must be unique

        # CUSTOMER INFORMATION
        $post_data['cus_name'] = $order->receiver_name;
        $post_data['cus_email'] = $order->receiver_name;
        $post_data['cus_add1'] = $order->receiver_name; 
        $post_data['cus_add2'] = "";
        $post_data['cus_city'] = "";
        $post_data['cus_state'] = "";
        $post_data['cus_postcode'] = "";
        $post_data['cus_country'] = "Bangladesh";
        $post_data['cus_phone'] = '8801XXXXXXXXX'; 
        $post_data['cus_fax'] = "";

        # SHIPMENT INFORMATION
        $post_data['ship_name'] = "Store Test";
        $post_data['ship_add1'] = "Dhaka";
        $post_data['ship_add2'] = "Dhaka";
        $post_data['ship_city'] = "Dhaka";
        $post_data['ship_state'] = "Dhaka";
        $post_data['ship_postcode'] = "1000";
        $post_data['ship_phone'] = "";
        $post_data['ship_country'] = "Bangladesh";

        $post_data['shipping_method'] = "NO";
        $post_data['product_name'] = "Computer";
        $post_data['product_category'] = "Goods";
        $post_data['product_profile'] = "physical-goods";

        # OPTIONAL PARAMETERS
        $post_data['value_a'] = "ref001";
        $post_data['value_b'] = "ref002";
        $post_data['value_c'] = "ref003";
        $post_data['value_d'] = "ref004";
       

        $sslc = new SslCommerzNotification();
        # initiate(Transaction Data , false: Redirect to SSLCOMMERZ gateway/ true: Show all the Payement gateway here )
        $payment_options = $sslc->makePayment($post_data, 'hosted');
        // dd($payment_options);

        if (!is_array($payment_options)) {
            print_r($payment_options);
            $payment_options = array();
        }


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

    public function order_details($id){
        $order = Order::with('details')->find($id);

        return view('frontend.pages.order-details',compact('order'));
    }



}