<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Product;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cartView(){
        return view('frontend.pages.Cart.cart-view');
    }

    public function AddToCart($pId){
        $cart = session()->get('vcart');
        $product = Product::find($pId);

        session()->forget('vcart');
// dd(empty($cart));
        if(empty($cart)){
            //add to cart

            $newCart[$product->id] =[
              'id' => $product->id,
              'name' => $product->name,
              'price' => $product->price,
              'image' => $product->image,
              'quantity' => 1,
              'subtotal' => 1*$product->price,
            ] ;
            session()->put('vcart', $newCart);
           
            notify()->success('product added to cart');
            return redirect()->back();

        }
        else{
            //not empty & product exist
            if(array_key_exists($pId, $cart)){
                //quantity update
                $cart[$pId]['quantity']+=1;
                $cart[$pId]['subtotal']= $cart[$pId]['quantity']* $cart[$pId]['price'];
                session()->put('vcart', $cart);
                
                notify()->success('product quantity update');
                return redirect()->back();

            }else{
                //new product add to cart
                $cart[$pId]=[
                    'id' => $product->id,
                    'name' => $product->name,
                    'price' => $product->price,
                    'image' => $product->image,
                    'quantity' => 1,
                    'subtotla' => 1* $product->price,

                ];
                session()->put('vcart',$cart);
                notify()->success('Product Adeed to Cart');
                return redirect()->back();
            }
        } 
        


        }
       
        
        

    }

