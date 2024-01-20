@extends('frontend.master')
@section('content')
@push('styles')
<link href="{{url('css/frontend/css/product_details.css')}}" rel="stylesheet">
@endpush
	<div class="container">
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
						
						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><img src="{{url('/uploads/'.json_decode($singleProduct->image)[0])}}" /></div>

						</div>
						<ul class="preview-thumbnail nav nav-tabs"> 
              @php
              $images = json_decode($singleProduct->image);
              
              @endphp
             
              @foreach($images as $image) 
             
						  <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="{{url('/uploads/'.$image)}}"/></a></li>
						  @endforeach
              
						</ul>  
						
					</div>
					<div class="details col-md-6">
						<h3 class="product-title">{{$singleProduct->name}}</h3> 
						<div class="rating">
							<div class="stars">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
							<span class="review-no">41 reviews</span>
						</div>
						<h4 class="price">Brand: <span>{{$singleProduct->brand->name}}</span></h4>
            
						<p class="product-description">{{$singleProduct->description}}</p>
						<h4 class="price">current price: <span>{{$singleProduct->price}}</span></h4>
						<p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>
						<h5 class="sizes">sizes:
							<span class="size" data-toggle="tooltip" title="small">s</span>
							<span class="size" data-toggle="tooltip" title="medium">m</span>
							<span class="size" data-toggle="tooltip" title="large">l</span>
							<span class="size" data-toggle="tooltip" title="xtra large">xl</span>
						</h5>
						<h5 class="colors">colors:
							<span class="color orange not-available" data-toggle="tooltip" title="Not In store"></span>
							<span class="color green"></span>
							<span class="color blue"></span>
						</h5>
						<div class="action">
						    <a href="{{route('checkout', $singleProduct->id)}}" class="add-to-cart btn btn-default" type="button">Buy Now</a>
							<a href="{{route('add.cart', $singleProduct->id)}}" class="add-to-cart btn btn-default" type="button">Add to Cart</a> 

							<a href="{{route('wish',$singleProduct->id)}}" class="like btn btn-default" type="button"><span class="fa fa-heart"></span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@include('frontend.partial.reviewRatings')

@endsection

