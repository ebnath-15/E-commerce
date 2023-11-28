@extends('admin.master')
@section('content')
<form action="{{route('role.update', $role->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputText">Name</label>
      <input required type="text" class="form-control" id="inputText" placeholder="Enter name" name="name" value="{{$role->name}}">
      @error('name')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>


</div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection