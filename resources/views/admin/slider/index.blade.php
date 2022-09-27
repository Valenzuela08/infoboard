@extends('admin.admin_master')
@section('admin')

    <div class="py-12">
<div class="container">
  <div class="row">

  <div class="col-md-10 float-lef">
        <div class="card">

<h2 class="float-left border border-0"><b>Home Slider</b></h2>

</div>
</div>
<div class="col-md-2 float-right">
        <div class="card">
  <a href="{{route('add.slider')}}" class="btn btn-info btn-lg float-right ">Add</a>

  </div>
</div>
    <div class="col-md-12">
        <div class="card">

        @if (session('success')) 
        <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{ session('success') }}</strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

            <div class="card-header">All Slider</div>
      

  <table class="table">
  <thead>
    <tr>
      <th scope="col" width="5%">SL No.</th>
      <th scope="col" width="10%">Title</th>
      <th scope="col" width="35%">Description</th>
      <th scope="col" width="10%">Image</th>
      <th scope="col" width="20%">Action</th>
    </tr>
  </thead>
  <tbody>
  @php($i=1)
   @foreach($sliders as $slider)
    <tr>
      <th scope="row">{{$i++}}</th>
      <td>{{ $slider -> title }}</td>
      <td rows="4" cols="50">{{ $slider -> description }}</td>
      <td><img src="{{asset($slider -> image)}}" style="hight:40px; width:70px"></td>
    
     
<td>
<a href="{{ url('slider/view/'.$slider->id) }}" class="btn btn-info" >View</a>
<a href="{{ url('slider/edit/'.$slider->id) }}" class="btn btn-primary" >Edit</a>
<a href="{{ url('slider/destroy/'.$slider->id) }}" onclick="return confirm('Are you sure to Delete?')" 
class="btn btn-danger" >Delete</a>
</td>
    </tr>
@endforeach
  </tbody>
</table>
</div>
    </div>

    

  </div>
</div>

    
    </div> <!-- //end div for class py-12 -->
@endsection
