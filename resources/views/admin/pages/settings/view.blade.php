@extends('admin.master')
@section('content')
<a href="{{route('settings.create')}}" class="btn btn-primary">Create settings</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Company Name</th>
      <th scope="col">Location</th>
      <th scope="col">Contact Details</th>
      <th scope="col">Logo</th>
      <th scope="col">Slider</th>
      <th scope="col">Action</th>   
    </tr>
  </thead>
 
  <tbody>
  @foreach($settings as $setting)
    <tr>
      <td>{{ $setting->company_name }}</td>
      <td>{{ $setting->location }}</td>
      <td>{{ $setting->contact_details }}</td>
      <td> <img width='10%' src="{{url('/uploads/'.$setting->logo)}}" alt=""></td>
      {{-- <td> <img width='10%' src="{{url('/uploads/'.$setting->slider)}}" alt=""></td> --}}
      {{$settings->logo}}
      <td>
    <a class="btn btn-success" href="{{route('settings.edit')}}">Edit</a>  
    </td>
    </tr>
    
    @endforeach
    
  </tbody>
</table>
@endsection
