@extends('admin.master')
@section('content')
<a href="{{route('category.create')}}" class="btn btn-primary">Create Category</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Category Name</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
 
  <tbody>
  @foreach($categories as $category)
    <tr>
      <th scope="row">{{ $category->id }}</th>
      <td>{{ $category->name }}</td>
      <td>{{ $category->status }}</td>
      <td>
    <a class="btn btn-success" href="">Edit</a>
        <a class="btn btn-danger" href="">Delete</a>
    </td>
    </tr>
    
    @endforeach
    
  </tbody>
</table>
@endsection
