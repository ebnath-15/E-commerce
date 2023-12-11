@extends('admin.master')


@section('content')

<h1>Order Details</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">order ID</th>
      <th scope="col">Product ID</th>
      <th scope="col">Quantity</th>
      <th scope="col">Subtotal</th>
    </tr>
  </thead>
  <tbody>

  @foreach ($order_details as  $key=>$detail)
  <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$detail->order_id}}</td>
      <td>{{$detail->product_id}}</td>
      <td>{{$detail->quantity}}</td>
      <td>{{$detail->subtotal}} .BDT</td>
      <td>
        <a class="btn btn-success" href="">View</a>
        <a  class="btn btn-danger" href="">Delete</a> 
      </td>
    </tr>

  @endforeach
   
   
  </tbody>
</table>
{{-- {{ $order_details->links() }} --}}

@endsection

