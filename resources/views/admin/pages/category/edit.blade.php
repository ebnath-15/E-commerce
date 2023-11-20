@extends('admin.master')

@section('content')

<h1>Create new category</h1>

<form action="{{route('category.update',$singleCategory->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    
  <div class="form-group">
    <label for="">Enter category type</label>
    <input value="{{$singleCategory->name}}" name="category_name" type="text" class="form-control" id=""  placeholder="Enter category name">
  </div>

  <div class="form-group">
    <label for="">Description</label>
    <textarea class="form-control" name="description" id="" cols="30" rows="10">{{$singleCategory->description}}</textarea>
  </div>
  
  <div class="form-group">
    <label for="exampleInputFile">Image</label>
    <input type="file" value="{{$singleCategory->image}}" class="form-control" id="exampleInputFile" placeholder="File" name="image">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection