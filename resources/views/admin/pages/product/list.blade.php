@extends('admin.master')
@section('content')
<a href="{{route('product.add')}}" class="btn btn-success">Add product</a>
<table class="table caption-top">
  <caption>List of users</caption>
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Category</th>
      <th scope="col">Brand</th>

      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th scope="col">price</th>
      <th scope="col">Stock</th>
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
      <td>
        <img width="10%" src="{{url('/uploads'.$product->image)}}" alt="">
      </td>
      <td>{{$product->stock}}</td>
      <td>{{$product->price}}</td>
      <td>
        
        <a href="{{route('product.view', $product->id)}}" class="btn btn-warning">View</a> 
        <a href="{{route('product.edit',$product->id)}}" class="btn btn-success">Edit</a> 
        <a href="{{route('product.delete', $product->id)}}" class="btn btn-danger">Delete</a> 
      </td>
    </tr>
    @endforeach 
  </tbody>
</table>

{{ $products->links() }}
@endsection