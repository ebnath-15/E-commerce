@extends('admin.master')
@section('content')
<form action="{{route('product.store')}}" method="post">
   @csrf
  <div class="form-group">
    <label for="exampleInputText">Add product name</label>
    <input type="text" class="form-control" id="exampleInputText" name="product_name">
  </div>
  <div class="form-group">
    <label for="exampleInputNumber">Quantity</label>
    <input type="number" class="form-control" id="exampleInputNumber" name="product_quantity">
  </div>
  <div class="form-group">
    <label for="exampleInputDate">Date</label>
    <input type="date" class="form-control" id="exampleInputDate" name="date">
  </div>
  <div class="form-group">
    <label for="exampleInputTextarea">Description</label>
    <input type="textarea" class="form-control" id="exampleIextarea" name="product_description">
  </div>
  <div class="form-group">
  <div class="form-group">
    <label for="exampleInputText">Price</label>
    <input type="text" class="form-control" id="exampleInputText" name="product_price">
  </div>
    <label for="exampleInputFile">Image</label>
    <input type="file" class="form-control" id="exampleInputFile" placeholder="File" name="file">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection