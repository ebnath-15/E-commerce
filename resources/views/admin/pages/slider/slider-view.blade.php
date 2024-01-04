@extends('admin.master')
@section('content')
<a href="{{route('slider.create')}}" class="btn btn-success">Add Slider</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
</thead>
 
  <tbody>
  @foreach($sliders as $slider)
    <tr>
      <th scope="row">{{ $slider->id }}</th>
      <td>{{ $slider->name }}</td>
      <td>
        <img width="10%" src="{{url('/uploads/'.$slider->Image)}}" alt="">
      </td>
      <td>{{ $slider->status }}</td> 
      <td>
    <a class="btn btn-success" href="{{route('slider.edit', $slider->id)}}">Edit</a>
        <a class="btn btn-danger" href="{{route('slider.delete', $slider->id)}}">Delete</a> 
    </td>
    </tr>
    
    @endforeach
    
  </tbody>
</table>
@endsection
