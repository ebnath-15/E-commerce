@extends('admin.master')

@section('content')


<h1>Create new order</h1>



<form action="{{route('order.store')}}" method="post">
   @csrf
   <div class="form-group">
    <label for="exampleInputDate">Date</label>
    <input type="date" class="form-control" id="exampleInputDate" name="date">
  </div>

  <div class="form-group">
    <label for="inputAddress">Shipping Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address">
  </div>
    

  
  <!-- <div class="form-group">
  <label for="">Enter Product Description:</label>
   <textarea class="form-control" placeholder="Enter product short description" name="product_description" id="" cols="30" rows="5"></textarea>
  </div> -->
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection