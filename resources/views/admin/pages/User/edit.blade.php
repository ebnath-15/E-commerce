@extends('admin.master')
@section('content')
<form action="{{route('user.update', $user->id)}}" method="post" enctype="multipart/form-data">
@if(session()->has('message'))
        <p class="alert alert-success">{{session()->get('message')}}</p>
        @endif
    @csrf
    @method('put')

    <div class="form-group" >
      <!-- <div class="col-xl-3 col-md-6">  -->
      <label for="">User Name</label>
      <input type="text" placeholder="Enter User name" id="InputText" name="name" class="form-control" value="{{$user->name}}">
      @error('name')
      <div class="alert alert-danger">{{$message}}</div>
      @enderror

    </div>
  
    <div class="form-group">
  <label for="">Select a Role:</label>
  <select class="form-select" name="role" aria-label="Default select example" class="form-control">
    
  <option value="">Select Role</option>
  @foreach($roles as $role) 
  <option @if($user->role==$role->name) selected @endif value="{{$role->id}}">{{$role->name}}</option>
@endforeach
</select> 
@error('role')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
</div>

 <div class="form-group">
  <label for="inputEmail">Email</label>
  <input type="email" placeholder="Enter Email" id="InputEmail" name="email" class="form-control" value="{{$user->email}}">
  @error('email')
  <div class="alert alert-danger">{{$message}}</div>
  @enderror
 </div>

 <div class="form-group">
  <label for="inputPassword">Enter Password</label>
  <input type="password" placeholder="Enter password" name="password" class="form-control" value="{{$user->password}}">
  @error('password')
  <div class="alert alert-danger">{{$message}}</div>
  @enderror
 </div>

 <div class="form-group">
  <label for="inputText">phone Number</label>
  <input type="text" placeholder="Enter phone number" id="InputText" name="phone_number" class="form-control" value="{{$user->phone_number}}">
 </div>

 <div class="form-group">
  <label for="">Upload Image</label>
  <input type="file" name="user_image" class="form-control" value="{{$user->image}}>
 </div>
  


  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection