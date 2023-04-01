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
            <th style="padding:-1px">Chartiy Group Name</th>
            <th style="padding:-1px"> Email</th>
            <th style="padding:-1px">Phone Number</th>
            <th style="padding:-1px">Date of application</th>
            <th style="padding:-1px">speciality</th>
            <th style="padding:-1px">Website address</th>
            <th style="padding:-1px"> Introduction to the organization</th>
            <th style="padding:-1px"> Status of request</th>
            <th style="padding:-1px"> Accepted</th>
            <th style="padding:-1px"> Denied</th>
            <th style="padding:-1px"> Send Email</th>
            
          </tr>
          @foreach ($data as $request )
            
         
          <tr style="background-color: blue">
            <td>{{ $request -> name }}</td>
            <td>{{ $request -> email }}</td>
            <td>{{ $request -> phone}}</td>
            <td>{{ $request -> date}}</td>
            <td>{{ $request -> speciality}}</td>
            <td>{{ $request -> website}}</td>
            <td>{{ $request -> intro}}</td>
            <td>{{ $request -> status}}</td>
            
            <td> 
              <a class = "btn btn-success" href="
              {{url('accepted',$request->id)}}">
              Accepted</a>
            </td>
            <td> 
              <a class ="btn btn-danger" href="
              {{url('denied',$request->id)}}">Denied</a>
            </td>
            <td> 
              <td> 
                <a class ="btn btn-primary" href="
                {{url('emailview',$request->id)}}">Send Email</a>
              </td>
              <td> 
           
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