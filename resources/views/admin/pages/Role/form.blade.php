@extends('admin.master')
@section('content')
<form action="{{route('role.store')}}" method="post" enctype="multipart/form-data">
    @csrf
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputText">Name</label>
      <input required type="text" class="form-control" id="inputText" placeholder="Enter name" name="name">

      @error('name')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>


</div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
@endsection