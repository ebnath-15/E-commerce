@extends('admin.master')
@section('content')
<a href="{{route('order.form')}}" class="btn btn-success">Add Order</a>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Order date</th>
      <th scope="col">Customer ID</th>
      <th scope="col">Order date</th>
      <th scope="col">Order Status</th>
      <th scope="col">Total Amount</th>
      <th scope="col">Payment Method</th>
      <th scope="col">Shipping Address</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($orders as $key=>$order)
    <tr>
      <th scope="row">{{ $key+1 }}</th>
      <td>{{ $order->order_date }}</td>
      <td>{{ $order->customer_id }}</td>
      <td>{{ $customer->order_date }}</td>
      <td>{{ $customer->order_status }}</td>
      <td>{{ $customer->total_amount }}</td>
      <td>{{ $customer->payment_method }}</td>
      <td>{{ $customer->shipping_address}}</td>
      <td>
        <a href="" class="btn btn-primary">view</a>
        <a href="" class="btn btn-success">Edit</a>
        <a href="" class="btn btn-danger">Delete</a>
      </td>

    </tr>
    @endforeach
  </tbody>
</table>
@endsection