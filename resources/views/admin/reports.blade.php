
<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.css')
  </head>
  <body>
    <div class = container-scroller>
@include('admin.sidebar')
    @include('admin.navbar')
    <div class ="container-fluid page-body-wrapper">
     <div style="align:center; padding:100px;" > 
      <table>
        <tr style="background-color:black;">

        <th style="padding:10px">Charity Group Name</th>
        <th style="padding:10px">Media used to advertise</th>
        <th style="padding:10px">actions used to decieve</th>
        <th style="padding:10px">evidenceactions</th>
        <th style="padding:10px">amount</th>

        <th style="padding:10px">contactgroup</th>
        <th style="padding:10px">reportandresponse</th>
        <th style="padding:10px">relevantinfo</th>
        <th style="padding:10px">status</th>
        
        <th style="padding:10px">Escalated</th>
        <th style="padding:10px">closed</th>
        <th style="padding:10px">suspended</th>
      </tr>
      @foreach ($data as $report )
        
    
      <tr style="background-color:green; align:center:">
        <td>{{ $report -> groupname}}</td>
        <td>{{ $report -> media}}</td>
        <td>{{ $report -> actions}}</td>
        <td>{{ $report -> evidenceactions}}</td>
        <td>{{ $report -> amount}}</td>
        <td>{{ $report -> contactgroup}}</td>
        <td>{{ $report -> reportandresponse}}</td>
        <td>{{ $report -> relevantinfo}}</td>
        <td>{{ $report -> status}}</td>
        <td>
          <a class="btn btn-success" href="{{ url('escalated',$report->id) }}">Escalated</a>
        </td>
        <td>
          <a class="btn btn-danger"href="{{ url('closed',$report->id) }}">Closed</a>
        </td>
        <td>
          <a class="btn btn-success" href="{{ url('suspended',$report->id) }}">Suspended</a>
        </td>
      </tr>
      @endforeach
      </table>
     </div>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
  @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>