@extends('admin.master')
@section('content')
<form action="{{route('product.update', $singleProduct->id)}}" method="post" enctype="multipart/form-data">
   @csrf
   @method('put')
  <div class="form-group">
    <label for="exampleInputText">Add product name</label>
    <input type="text" class="form-control" id="exampleInputText" name="product_name" value="{{$singleProduct->name}}">
    @error('product_name')
     
     <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>


  <label for="">Select category:</label>
<select required name="category_id" class="form-select" aria-label="Default select example">
<option>Select Category</option>

 @foreach($categories as $category)
 <option @if($singleProduct->category_id==$category->id) selected @endif  value="{{$category->id}}">{{$category->name}}</option>
  @endforeach
</select>
  <div class="form-group">
  <label for="">Select Brand:</label>
  <select class="form-select" name="brand_id" aria-label="Default select example"> 
  <option>Select Brand</option>
  
@foreach($brands as $brand)
  <option @if ($singleProduct->brand_id==$brand->id) selected @endif  value="{{$brand->id}}" >{{$brand->name}}</option>
@endforeach
 
  
</select> 
</div>

  <div class="form-group">
    <label for="exampleInputNumber">Stock</label>
    <input type="number" class="form-control" id="exampleInputNumber" name="stock" value="{{$singleProduct->stock}}"> 
  </div>
  
  <div class="form-group">
    <label for="exampleInputTextarea">Description</label>
    <input type="textarea" class="form-control" id="exampleIextarea" name="product_description" value="{{$singleProduct->description}}">
  </div>
  <div class="form-group">
  <div class="form-group">
    <label for="exampleInputText">Price</label>
    <input type="text" class="form-control" id="exampleInputText" name="product_price" value="{{$singleProduct->price}}">
    @error('product_price')
    <div class="alert alert-danger">{{ $message}}</div>
    @enderror
  </div>
    <label for="exampleInputFile">Image</label>
    <input type="file" class="form-control" id="exampleInputFile" placeholder="File" name="file" value="{{$singleProduct->image}}">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection