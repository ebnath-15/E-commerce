@extends('admin.master')

@section('content')

<form action="{{route('settings.save')}}" method="post" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label for="">Company Name</label>
    <input  name="company_name" type="text" class="form-control" id=""  placeholder="Enter company name">
  </div>

  <div class="form-group">
    <label for="">Location</label>
    <textarea class="form-control" name="location" id="" cols="30" rows="10"></textarea>
  </div>

  <div class="form-group">
    <label for="">Contact Details</label>
    <textarea class="form-control" name="contact_details" id="" cols="30" rows="10"></textarea>
  </div>
  
  <div class="form-group">
    <label for="exampleInputFile">logo</label>
    <input type="file" class="form-control" id="exampleInputFile" placeholder="File" name="logo">
  </div>

  <div class="form-group">
    <label for="exampleInputFile">slider</label>
    <input type="file" class="form-control" id="exampleInputFile" placeholder="File" name="slider"> 
  </div>
  <button type="submit" class="btn btn-primary">Save</button>
</form>

@endsection 