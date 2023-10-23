@extends('admin.master')
@section('content')
<h1>Payemt List</h1>
@extends('admin.master')
@section('content')
<a href="{{route('payment.create')}}" class="btn btn-success">Add Payment</a>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Payment Amount</th>
      <th scope="col">Date_Time</th>
      <th scope="col">Payment Method</th>
      <th scope="col">Payer Information</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($payments as $payment)
    <tr>
      <th scope="row">{{ $payment->id }}</th>
      <td>{{ $payment-payment_amount }}</td>
      <td>{{ $customer->payer_information }}</td>
      <td>{{ $customer->payment_method }}</td>
      <td>{{ $customer->address }}</td>
      <td>
        <a href="" class="btn btn-primary">Edit</a>
        <a href="" class="btn btn-danger">Delete</a>
      </td>

    </tr>
    @endforeach
  </tbody>
</table>
@endsection