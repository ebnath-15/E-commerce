@extends('admin.master')
@section('content')
<a href="{{route('user.form')}}" class="btn btn-primary">Add more</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Role</th>
      <th scope="col">Email</th>

     <th scope="col">Phone Number</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
 
  <tbody>
  @foreach($users  as $key=>$singleUser)
    <tr>
      <th scope="row">{{ $key+1 }}</th>
      <td>
      <img style="border-radius: 60px;" width="10%" src="{{url('/uploads/'.$singleUser->image)}}" alt="">
      </td>
      <td>{{ $singleUser->name }}</td>
      <td>{{ $singleUser->role->name}}</td>
      
      <td>{{ $singleUser->email }}</td>
      
      <td>{{ $singleUser->phone_number}}</td>
      
      <td>{{ $singleUser->status }}</td>
      <td>
    <a class="btn btn-success" href="{{route('user.edit',$singleUser->id)}}">Edit</a>
        <a class="btn btn-danger" href="{{route('user.delete', $singleUser->id)}}">Delete</a>
    </td>
    </tr>
    
    @endforeach
    
  </tbody>
</table>
@endsection