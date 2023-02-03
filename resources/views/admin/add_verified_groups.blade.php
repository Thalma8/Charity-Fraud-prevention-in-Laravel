
<!DOCTYPE html>
<html lang="en">
  <head>
    <style type="text/css">
      label
      { 
      display: inline-block;
      width: 200px;
      }
        </style>
   @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
@include('admin.sidebar')
    @include('admin.navbar')
  <div class ="container-fluid page-body-wrapper">
   
   {{-- @endonce --}}
    <div class ="container" style="padding-top: 100px";>
{{-- //message for verification of status to keep user updated @once
       //system status --}}

      @if(session()->has('message'))
      <div class ="alert alert-success">
        <button type="button"class="close"data-dismiss="alert">x</button>
        {{ session()->get('message') }}
      @endif 

      </div>
      <h1> Add a verified group </h1>
      <form action="{{ url('upload_verified') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div style="padding:5px;">
            <label> Charity Group Name</label>
            <input type = "text" style= "color:black"; name="name" placeholder="Write the name" required="">
        </div>
        <div style="padding:5px;">
            <label> Phone Number</label>
            <input type = "number" style= "color:black"; name="phone" placeholder="Write your phone number" required="">
        </div>
        <div style="padding:5px;">
            <label> Location</label>
            <input type = "text" style= "color:black"; name="location" placeholder="Write location here" required="">
        </div>
        <div style="padding:5px;">
            <label> Website address</label>
            <input type = "text" style= "color:black"; name="website" placeholder="ex. www.abc.co.ke" required="">
        </div>
        <div style="padding:5px;">
          <label> Email</label>
          <input type = "text" style= "color:black"; name="email" placeholder="xyz@gmail.com" required="">
      </div>
        <div style="padding:5px;">
            <label> Speciality</label>
            <select name="speciality" style="color:black"; width:200px required="">
                <option>-----SELECT-----</option>
               <option value="Education">Education</option>
               <option value="Health care">Health care</option>
               <option value="Child Care">Child Care</option>
               <option value="Food and water">Food and water</option>
            </select>
        </div>
        <div style="padding:5px;">
            <label> Photo</label>
            <input type="file" name="file" required="">
        </div>

        <div style="padding:5px;">
            

            <input type = "submit" class="btn btn-success">
        </div>

       </form>
    </div>
  </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
  @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>