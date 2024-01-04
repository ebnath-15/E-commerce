@extends('admin.master')
@section('content')
<a href="" class="btn btn-primary"></a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Product Name</th>
      <th scope="col">Action</th>   
    </tr>
  </thead>
 
  <tbody>
  @foreach($wishlist as $key=>$item)
    <tr>
      <th scope="row">{{ $key+1 }}</th> 
      <td>{{ $item->user->name }}</td>
      <td>{{ $item->product->name }}</td>
      <td>
    <a class="btn btn-success" href="">Edit</a>  
    </td>
    </tr>
    
    @endforeach
    
  </tbody>
</table>
@endsection
