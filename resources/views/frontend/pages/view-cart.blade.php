@extends('frontend.master');
@section('content');


<h1>
@if(session()->has('vcart'))
{{count(session()->get('vcart'))}} 
@else
0
@endif
items in your cart
</h2>


<div class="container-fluid">
    @if(session()->has('vcart') && session()->get('vcart') !=null)
    <div class="row">
        <aside class="col-lg-9">
            <div class="card">
                <div class="table-responsive">
                    <table class="table table-borderless table-shopping-cart">
                        <thead class="text-muted">
                            <tr class="small text-uppercase">
                                <th scope="col">Product</th>
                                <th scope="col" width="120">Quantity</th>
                                <th scope="col" width="120">Price</th>
                                <th scope="col" class="text-right d-none d-md-block" width="200"></th>
                            </tr>
                        </thead>
                        @php

                        $subtotal = array_sum(array_column(session()->get('vcart'), 'subtotal'));
                        @endphp
                        
                       
                        @foreach(session()->get('vcart') as $item)
                        <tbody>
                            <tr>
                                <td>
                                    <figure class="itemside align-items-center">
                                        <div class="aside"><img  width="20%" src="{{url('/uploads',$item['image'])}}" class="img-sm"></div>
                                        <figcaption class="info"> <a href="#" class="title text-dark" data-abc="true">{{$item['name']}}</a>
                                            <p class="text-muted small">Size<br>Brand</p>
                                        </figcaption>
                                    </figure>
                                </td>
                                <td>
                                    <a href="{{route('decrease', $item['id'])}}">-</a>{{$item['quantity']}}</a>
                                    <a href="{{route('add.cart',$item['id'])}}">+</a>
                                </td>
                                <td>
                                    <div class="price-wrap"> <var class="price">{{$item['quantity']*$item['price']}}.BDT</var>
                                         <small class="text-muted"> {{$item['price']}}.BDT each </small> </div> 
                                </td>
                               
                                <td class="text-right d-none d-md-block"> <a data-original-title="Save to Wishlist" title="" href="" class="btn btn-light" data-toggle="tooltip" data-abc="true"> <i class="fa fa-heart"></i></a> 
                                    <a href="{{route('remove.cart', $item['id'])}}" class="btn btn-danger btn-round" data-abc="true"> Remove</a> </td>
                                    @endforeach
                                    
                                   
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </aside>
        <aside class="col-lg-3">
            <div class="card mb-3">
                <div class="card-body">
                    <form>
                        <div class="form-group"> <label>Have coupon?</label>
                            <div class="input-group"> <input type="text" class="form-control coupon" name="" placeholder="Coupon code"> <span class="input-group-append"> <button class="btn btn-primary btn-apply coupon">Apply</button> </span> </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <dl class="dlist-align">
                        <dt>Subtotal:</dt>
                        <dd class="text-right ml-3">{{$subtotal}}</dd>
                    </dl>
                    <dl class="dlist-align">
                        <dt>Shipping:</dt>
                        <dd class="text-right text-danger ml-3">100.00 BDT</dd>
                    </dl>
                    <dl class="dlist-align">
                        <dt>Total:</dt>
                        <dd class="text-right text-dark b ml-3"><strong>{{$subtotal+100.00}}.BDT</strong></dd>
                    </dl>
                     <a href="{{route('checkout')}}" type="button"  class="btn btn-success">Check Out</a><hr>
                     
                     <a href="" type="button"  class="btn btn-success">Continue Shopping</a>

                </div>
            </div>
        </aside>
    </div>
    @endif
</div>  
@endsection
