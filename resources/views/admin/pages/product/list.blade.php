@extends('admin.master')
@section('content')
<a href="{{route('product.add')}}" class="btn btn-success">Add product</a>
<table class="table caption-top">
  <caption>List of users</caption>
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Category_ID</th>
      <th scope="col">Brand_ID</th>

      <th scope="col">Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @foreach($products as $product)
      <th scope="row">{{$product->id}}</th>
      <td>{{$product->category->name}}</td>
      <td>{{$product->brand->name}}</td>
      <td>{{$product->name}}</td>
      <td>{{$product->quantity}}</td>
      <td>{{$product->price}}</td>
      <td>
        <a href="" class="btn btn-primary">view</a>
        <a href="" class="btn btn-success">Edit</a> 
        <a href="" class="btn btn-danger">Delete</a> 
      </td>
    </tr>
    @endforeach 
  </tbody>
</table>

{{ $products->links() }}
@endsection