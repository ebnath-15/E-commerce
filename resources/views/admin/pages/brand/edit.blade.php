@extends('admin.master')

@section('content')
<div class="form-row">
  

<h1>Create new brand</h1>

<form action="{{route('brand.update',$singleBrands->id)}}" method="post">
    @csrf
    @method('put')
  <div class="form-group">
    <label for="">Enter Brand Name</label>
    <input name="brand_name" type="text" class="form-control" id=""  placeholder="Enter brand name" value="{{$singleBrands->name}}">
  </div>

  <div class="form-group">
    <label for="">Upload logo</label>
    <input type="file" class="form-control" id=""  placeholder="logo" value="{{$singleBrands->image}}" name="image">
  </div>


  <div class="form-group">
    <label for="">Description</label>
    <textarea class="form-control" name="description" id="" cols="30" rows="10">{{$singleBrands->description}}</textarea>
  </div>
  
  <button type="submit" class="btn btn-primary">Update</button>
</form>

@endsection