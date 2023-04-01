<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Charity-Fraud Prevention</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body style="background-color:  #2d812f">

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a style="color: black" href="#"><span class="mai-call text-primary"></span> +254 748 123 990</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary" ></span> charitymanagementsys@gmail.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="https://www.facebook.com/"><span class="mai-logo-facebook-f"></span></a>
              <a href="https://twitter.com/login?lang=en"><span class="mai-logo-twitter"></span></a>
              <a href="https://dribbble.com/"><span class="mai-logo-dribbble"></span></a>
              <a href="https://www.instagram.com/"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container" >
        <a class="navbar-brand" href="#"><span class="text-primary"></span>Charity Fraud Prevention</a>

       

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            {{-- <li class="nav-item active">  this is how the next line was looking like--}}
            <li class="nav-item">
              <a style="color: white" class="nav-link" href={{ (url('/'))}}>Home</a>
            </li>
            <li class="nav-item">
              <a style="color: white" class="nav-link" href="about.html">About Us</a>
            </li>
            <li class="nav-item">
              <a style="color: white" class="nav-link" href="doctors.html">Verified Charity Groups</a>
            </li>
            <li class="nav-item" >
            </li>
            <li class="nav-item">
              <a style="color: white" class="nav-link" href="contact.html">Request Verification</a>
            </li>
            @if(Route::has('login'))


            @auth
            <li class="nav-item">
              <a style="color: white" class="nav-link" href="{{ url('verificationstatus') }}">My verification status</a>
            </li>
            <x-app-layout>

            </x-app-layout>

            @else

            <li class="nav-item">
              <a style="background-color:  #4C1A1B" class="btn btn-primary ml-lg-3" href="{{ route('register') }}">Register</a>
            </li>
            <li class="nav-item">
                <a style="background-color:  #4C1A1B" class="btn btn-primary ml-lg-3" href="{{ route('login') }}">Login</a>
              </li>
            @endauth
            @endif

          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>
  {{-- {{-- request verification in progress message to keep the user updated on system status
  --}}
  <div align="center" style="padding:70px">
    <table>
        <tr style="background-color:black">
            <th style="padding:10px;font-size:30px;color:white;">Name of the reporter</th>
            {{-- <th style="padding:10px;font-size:30px;color:white;">Email of the reporter</th> --}}
            <th style="padding:10px;font-size:30px;color:white;">Charity Group Name</th>
            {{-- <th style="padding:10px;font-size:30px;color:white;">where they heard about them</th>
            <th style="padding:10px;font-size:30px;color:white;">Actions taken to decieve them</th>
            <th style="padding:10px;font-size:30px;color:white;">Evidence of Actions</th>
            <th style="padding:10px;font-size:30px;color:white;">Amount of money donated</th>
            <th style="padding:10px;font-size:30px;color:white;">Date of donation</th>
            <th style="padding:10px;font-size:30px;color:white;">Method of payment</th>
            <th style="padding:10px;font-size:30px;color:white;">Evidence of transaction</th>
            <th style="padding:10px;font-size:30px;color:white;">Contact group</th>
            <th style="padding:10px;font-size:30px;color:white;">Report and response</th>
            <th style="padding:10px;font-size:30px;color:white;">relevant information</th> --}}
            <th style="padding:10px;font-size:30px;color:white;">Status</th>
            <th style="padding:10px;font-size:30px;color:white;">Cancel Case</th>
        </tr>
        @foreach ( $reports as $reports )
        <tr style="background-color:black">
            <td style="padding:20px;font-size:30px;color:white;">{{ $reports->name }}</td>
            {{-- <td style="padding:20px;font-size:30px;color:white;">{{ $reports->email }}</td> --}}
            <td style="padding:20px;font-size:30px;color:white;">{{ $reports->groupname }}</td>
            {{-- <td style="padding:20px;font-size:30px;color:white;">{{ $reports->media }}</td>
            <td style="padding:20px;font-size:30px;color:white;">{{ $reports->actions }}</td>
            <td style="padding:20px;font-size:30px;color:white;">{{ $reports->evidenceactions }}</td>
            <td style="padding:20px;font-size:30px;color:white;">{{ $reports->amount }}</td>
            <td style="padding:20px;font-size:30px;color:white;">{{ $reports->date }}</td>
            <td style="padding:20px;font-size:30px;color:white;">{{ $reports->methodofpayment }}</td>
            <td style="padding:20px;font-size:30px;color:white;">{{ $reports->evidencetransaction }}</td>
            <td style="padding:20px;font-size:30px;color:white;">{{ $reports->contactgroup }}</td>
            <td style="padding:20px;font-size:30px;color:white;">{{ $reports->reportandresponse }}</td>
            <td style="padding:20px;font-size:30px;color:white;">{{ $reports->relevantinfo }}</td> --}}
            <td style="padding:20px;font-size:30px;color:white;">{{ $reports->status }}</td>
          
            <td><a class="bt btn-danger" onclick="return confirm('are you sure you want to delete .. the action is NOT reversable!!!') "href="{{url('cancel_report', $reports-> id)}}">Cancel<a></td>       
        </tr>
        @endforeach
    </table>
  </div>
 

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body> 
</html>