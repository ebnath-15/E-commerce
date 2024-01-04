@extends('admin.master')

@section('content')

<h1>Create Slider</h1>

<form action="{{route('slider.store')}}" method="post" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label for="">Enter Slider Name</label>
    <input  name="name" type="text" class="form-control" id=""  placeholder="Enter category name">
  </div>

  
  <div class="form-group">
    <label for="exampleInputFile">Image</label>
    <input type="file" class="form-control" id="exampleInputFile" placeholder="File" name="image">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button> 
</form>

@endsection