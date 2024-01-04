@extends('admin.master')
@section('content')
<a href="" class="btn btn-success">Order List</a>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Order</th>
      <th scope="col">Product</th>
      <th scope="col">Customer</th>
      <th scope="col">Image</th>
      <th scope="col">Review</th>
      <th scope="col">Ratings</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($reviews as $key=>$review)
    <tr>
      <th scope="row">{{ $key+1 }}</th>
      <td>{{ $review->order_id }}</td>
      <td>{{ $review->product_id }}</td>
      <td>{{ $review->customer_id }}</td>
      <td>{{ $review->image }}</td>
      <td>{{ $review->review }}</td>  
      <td>{{ $review->ratings }}</td>  
 
      <td>
        <a href="" class="btn btn-primary">view</a>
        <a href="" class="btn btn-danger">Delete</a>
      </td>

    </tr>
    @endforeach
  </tbody>
</table>
@endsection
