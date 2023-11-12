@extends('admin.master')
@section('content')
<a href="{{route('role.form')}}" class="btn btn-primary">Add more</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
 
  <tbody>
  @foreach($roles  as $key=>$role)
    <tr>
      <th scope="row">{{ $key+1 }}</th>
      <td>{{ $role->name }}</td>
      
      <td>{{ $role->status }}</td>
      <td>
    <a class="btn btn-success" href="">Edit</a>
        <a class="btn btn-danger" href="">Delete</a>
    </td>
    </tr>
    
    @endforeach
    
  </tbody>
</table>
@endsection