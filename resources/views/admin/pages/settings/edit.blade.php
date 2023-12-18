@extends('admin.master')

@section('content')

<form action="{{route('settings.reset')}}" method="post" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label for="">Company Name</label>
    <input value="{{$setting->company_name}}" name="company_name" type="text" class="form-control" id=""  placeholder="Enter company name">
  </div>

  <div class="form-group">
    <label for="">Location</label>
    <textarea class="form-control" name="location" id="" cols="30" rows="10">value="{{$setting->location}}"</textarea>
  </div>

  <div class="form-group">
    <label for="">Contact Details</label>
    <textarea class="form-control" name="contact_details" id="" cols="30" rows="10">value="{{$setting->contact_details}}"</textarea>
  </div>
  
  <div class="form-group">
    <label for="exampleInputFile">logo</label>
    <input type="file" class="form-control" id="exampleInputFile" placeholder="File" name="logo" value="{{$setting->logo}}">
  </div>

  <div class="form-group">
    <label for="exampleInputFile">slider</label>
    <input type="file" class="form-control" id="exampleInputFile" placeholder="File" name="slider" value="{{$setting->slider}}"> 
  </div>
  <button type="submit" class="btn btn-primary">Reset</button> 
</form>

@endsection 