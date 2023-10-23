@extends('admin.master')
@section('content')
<a href="{{route('customer.form')}}" class="btn btn-success">Add customer</a>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Password</th>
      <th scope="col">Product Category</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($customers as $customer)
    <tr>
      <th scope="row">{{ $customer->id }}</th>
      <td>{{ $customer->first_name }}</td>
      <td>{{ $customer->last_name }}</td>
      <td>{{ $customer->email }}</td>
      <td>{{ $customer->address }}</td>
      <td>{{ $customer->phone_number }}</td>
      <td>{{ $customer->password }}</td>
      <td>{{ $customer->product_category }}</td>
      <td>
        <a href="" class="btn btn-primary">Edit</a>
        <a href="" class="btn btn-danger">Delete</a>
      </td>

    </tr>
    @endforeach
  </tbody>
</table>
@endsection