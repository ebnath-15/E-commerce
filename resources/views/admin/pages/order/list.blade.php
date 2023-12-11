@extends('admin.master')
@section('content')
<a href="" class="btn btn-success">Order List</a>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">User ID</th>
      <th scope="col">Receiver Email</th>
      <th scope="col">Receiver Address</th>
      <th scope="col">Receiver phone</th>
      <th scope="col">Total price</th>
      <th scope="col">Status</th>
      <th scope="col">payment method</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($orders as $key=>$order)
    <tr>
      <th scope="row">{{ $key+1 }}</th>
      <td>{{ $order->user_id }}</td>
      <td>{{ $order->receiver_email }}</td>
      <td>{{ $order->receiver_address }}</td>
      <td>{{ $order->receiver_phone }}</td>
      <td>{{ $order->total_price }}</td>
      <td>{{ $order->status }}</td>
      <td>{{ $order->payment_method }}</td>
     
      <td>
        <a href="{{route('invoice',$order->id)}}" class="btn btn-primary">view</a>
        <a href="" class="btn btn-danger">Delete</a>
      </td>

    </tr>
    @endforeach
  </tbody>
</table>
@endsection