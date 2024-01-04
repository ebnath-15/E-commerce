<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Throwable;

class ProductController extends Controller
{
    public function allProducts()
    {
        try {
            $products = Product::all();
            // return $this->responseWithSuccess($products, 'All products list');  
            return $this->responseWithSuccess($products, 'All products');

        } catch(Throwable $ex){
            return $this->responseWithError($ex->getMessage());   

        }  

        
    }  

}  
