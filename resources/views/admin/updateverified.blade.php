
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    <style type="text/css">
     label 
     {
        display: inline-block;
        width:200px
     }
   
     </style>
   @include('admin.css')
  </head>
  <body>
    
@include('admin.sidebar')
    @include('admin.navbar')
<div class ="container-fluid page-body-wrapper">
  <div class="container"  style="padding:100px; align:center">
    @if(session()->has('message'))
    <div class ="alert alert-success">
      <button type="button"class="close"data-dismiss="alert">x</button>
      {{ session()->get('message') }}
    @endif 
    <form action="{{ url('editveri',$data->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div style="padding:15px;">
            <label> Charity Group Name</label>
        <input type="text" style="color:black;"name="name" value="{{ $data->name }}">
        </div>
        <div style="padding:15px;">
            <label> Phone Number</label>
        <input type="number" style="color:black;"name="number" value="{{ $data->phone }}">
        </div>
        <div style="padding:15px;">
            <label> Location</label>
        <input type="text" style="color:black;"name="location" value="{{ $data->location }}">
        </div>
        <div style="padding:15px;">
            <label> Speciality</label>
        <input type="text" style="color:black;"name="speciality" value="{{ $data->speciality }}">
        </div>
        <div style="padding:15px;">
            <label> Website</label>
        <input type="text" style="color:black;"name="website" value="{{ $data->website }}">
        </div>
        <div style="padding:15px;">
            <label> Email</label>
        <input type="text" style="color:black;"name="email" value="{{ $data->email }}">
        </div>
        <div style="padding:15px;">
            <label> Image</label>
            <img height="100px" width =100px src="verifiedimage/{{ $data->image}}">
        </div>
        <div style="padding:15px;">
            <label> Change Image </label>
            <input type="file" name="file">
        </div>
        <div style="padding:15px;">
            
            <input type="submit" class="btn btn-primary">
        </div>
    </form> 
  </div>
</div>
    <!-- container-scroller -->
    <!-- plugins:js -->
  @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>