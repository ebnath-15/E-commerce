@extends('admin.master')
@section('content')
<a href="{{route('category.create')}}" class="btn btn-success">Create Category</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Category Name</th>
      <th scope="col">Image</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
</thead>
 
  <tbody>
  @foreach($categories as $category)
    <tr>
      <th scope="row">{{ $category->id }}</th>
      <td>{{ $category->name }}</td>
      <td>
        <img width="10%" src="{{url('/uploads/'.$category->image)}}" alt="">
      </td>
      <td>{{ $category->status }}</td> 
      <td>
        <a class="btn btn-warning" href="{{route('category.view', $category->id)}}">View</a>
    <a class="btn btn-success" href="{{route('category.edit', $category->id)}}">Edit</a>
        <a class="btn btn-danger" href="{{route('category.delete', $category->id)}}">Delete</a>
    </td>
    </tr>
    
    @endforeach
    
  </tbody>
</table>
{{$categories->links()}}
@endsection
