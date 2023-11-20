@extends('admin.master')
@section('content')
<a href="" class="btn btn-success">Add customer</a>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($customers as $key=>$customer)
    <tr>
      <th scope="row">{{ $key+1 }}</th>
      <td>{{ $customer->full_name }}</td>
      <td>{{ $customer->email }}</td>
      <td>
        <a href="" class="btn btn-primary">view</a>     
        <a href="" class="btn btn-success">Edit</a>
        <a href="" class="btn btn-danger">Delete</a>
      </td>

    </tr>
    @endforeach
  </tbody>
</table>
{{$customers->links()}}
@endsection