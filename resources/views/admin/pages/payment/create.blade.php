@extends('admin.master')
@section('content')
<form action="{{route('payment.store')}}" method="post">
    @csrf
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputText">Payment_amount</label>
      <input type="text" class="form-control" id="inputText" placeholder="Enter amount" name="amount">
    </div>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputDateTime">Date Time</label>
      <input type="dateTime" class="form-control" id="inputDateTime" name="date_time">
    </div>
  <div class="form-group">
    <label for="inputText">Payer Information</label> 
    <textarea class="form-control" id="" placeholder="" name="payer_information"></textarea>
  </div>
  
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Payment Method</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="payment_method" id="gridRadios1" value="Credit card" checked>
          <label class="form-check-label" for="gridRadios1">
            Credit Card
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="payment_method" id="gridRadios2" value="Debit card">
          <label class="form-check-label" for="gridRadios2">
            Debit Card
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="payment_method" id="gridRadios2" value="Bank transfer">
          <label class="form-check-label" for="gridRadios2">
            Bank Transfer
          </label>
        </div>
        <div class="form-check disabled">
          <input class="form-check-input" type="radio" name="payment_method" id="gridRadios3" value="Cash">
          <label class="form-check-label" for="gridRadios3">
            Cash
          </label>
        </div>
      </div>
    </div>
  </fieldset>
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