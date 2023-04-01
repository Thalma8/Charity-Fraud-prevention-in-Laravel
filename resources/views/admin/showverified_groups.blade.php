<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.css')
  </head>
  <body>
   <div class=container-scroller> 
@include('admin.sidebar')
    @include('admin.navbar')
    
    <div class ="container-fluid page-body-wrapper">
      <div style="padding-top:100px">
        <table>
          <tr style="background-color: black">
            <th style="padding:10px">Chartiy Group Name</th>
            <th style="padding:10px"> Phone number</th>
            <th style="padding:10px">Location</th>
            <th style="padding:10px">Speciality</th>
            <th style="padding:10px">Website address</th>
            <th style="padding:10px">Email</th>
            <th style="padding:10px"> Image</th> 
            <th style="padding:10px"> Delete</th> 
            <th style="padding:10px"> Update</th> z
          </tr>
          @foreach ($data as $verified )
              
        
          <tr>
            <td>{{ $verified->name }}</td>
            <td>{{ $verified->phone}}</td>
            <td>{{ $verified->location }}</td>
            <td>{{ $verified->speciality }}</td>
            <td>{{ $verified->website }}</td>
            <td>{{ $verified->email }}</td>
            <td><img height="100px" width =100px src="verifiedimage/{{ $verified->image}}"></td>
            <td><a onclick = "return confirm('do you really want to remove this group!!! THE ACTION CANNOT BE UNDONE!!!')"class="btn btn-danger" href="{{ url('revokeveri',$verified->id) }}">Revoke</td>
            <td><a class="btn btn-primary" href="{{ url('updateverified',$verified->id) }}">Update</td>
            
          </tr>
          @endforeach
           
       
        </table>
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