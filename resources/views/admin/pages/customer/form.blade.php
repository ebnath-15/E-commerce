@extends('admin.master')
@section('content')
<form action="{{route('customer.store')}}" method="post">
    @csrf
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputText">First Name</label>
      <input required type="text" class="form-control" id="inputText" placeholder="Enter first name" name="First_name">
      @error('First_name')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputText">Last Name</label>
      <input required type="text" class="form-control" id="inputText" placeholder="Enter last name" name="Last_name">
      @error('Last_name')
    <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Enter your email" name="email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="password" name="password">
      @error('password')
      <div class="alert alert-danger">{{$message}}</div>
      @enderror
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address">
  </div>
  <div class="form-group">
    <label for="inputText">Phone Number</label>
    <input type="text" class="form-control" id="inputText" placeholder="Enter phone no." name="phone_number">
    @error('phone_number')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  
  <!-- <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Product Category</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="product_category" id="gridRadios1" value="Beauty & Fashion" checked>
          <label class="form-check-label" for="gridRadios1">
            Beauty & Fashion
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="product_category" id="gridRadios2" value="Home Decor">
          <label class="form-check-label" for="gridRadios2">
            Home Decor
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="product_category" id="gridRadios2" value="Home Appliance">
          <label class="form-check-label" for="gridRadios2">
            Home Appliance
          </label>
        </div>
        <div class="form-check disabled">
          <input class="form-check-input" type="radio" name="product_category" id="gridRadios3" value="Kids">
          <label class="form-check-label" for="gridRadios3">
            Kids
          </label>
        </div>
      </div>
    </div>
  </fieldset> -->

  <select class="form-select" name="category_id" aria-label="Default select example">
  <option selected>Select a Category:</option>
  @foreach($categories as $category)
  <option value="{{$category->id}}">{{$category->name}}<option>
  @endforeach
</select>

<div class="form-group">
  <label for="inputProductName">Product Name</label>
  <input type="text" class="form-control" id="" name="product_name">
</div>
<div class="form-group">
  <label for="">Select Brand:</label>
  <select class="form-select" name="brand_id" aria-label="Default select example">
  <option>Select Brand</option>
  @foreach($brands as $brand) 
  <option value="{{$brand->id}}">{{$brand->name}}</option>

 @endforeach
  
</select> 
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