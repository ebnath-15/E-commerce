@extends('frontend.master')
@section('content')
<h1>Search results for: {{ request()->search }} found {{$products->count()}} product(s)</h1>
<div class="row"> 

<!-- Products Start -->
    <div class="">
        <div class="text-center mb-4">
        </div>

    <div class="row px-xl-5 pb-3">
        @if($products->count()>0)
        @foreach($products as $product)
       
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="card product-item border-0 mb-4">
                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <a href="{{route('product.view',$product->id)}}"> 
                    <img class="img-fluid w-100" src="{{url('/uploads/'.json_decode($product->image)[0])}}" alt="">
                </div>
                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                    <h6 class="text-truncate mb-3">{{$product->name}}</h6>
                    <div class="d-flex justify-content-center">
                        <h6>{{$product->price}}.Bdt</h6>
                        <h6 class="text-muted ml-2"><del>$123.00</del></h6> 
                    </div>
                </div>
                </a>
                <div class="card-footer d-flex justify-content-between bg-light border">
                    <a href="{{route('product.view', $product->id)}}" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                    <a href="{{route('add.cart', $product->id)}}" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                </div>
            </div>
        </div>
        @endforeach
        @else
        <h2>No Product Found</h2>
        @endif
    </div>
</div>
@endsection