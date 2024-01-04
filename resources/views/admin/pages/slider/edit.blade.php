@extends('admin.master')

@section('content')

<h2>Edit Slider</h2>

<form action="{{route('slider.update', $slider->id)}}" method="post" enctype="multipart/form-data">
    @method('put')
    @csrf
  <div class="form-group">
    <label for="">Enter Slider Name</label>
    <input  name="name" type="text" class="form-control" id=""  placeholder="Enter category name" value="{{$slider->name}}">
  </div>

  
  <div class="form-group">
    <label for="exampleInputFile">Image</label>
    <input type="file" class="form-control" id="exampleInputFile" placeholder="File" name="image" value="{{$slider->image}}">
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>

@endsection