<!DOCTYPE html>
<html lang="en">
<head>
    <style type="text/css">
    label
    {
        display:inline-block;
        width:200px;
       
    }
    </style>
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
        <a class="navbar-brand" href="{{ (url('/')) }}"><span class="text-primary"></span>Charity Fraud Prevention</a>

       

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            {{-- <li class="nav-item active">  this is how the next line was looking like--}}
            <li class="nav-item">
              <a style="color: white" class="nav-link" href={{ (url('/')) }}>Home</a>
            </li>
            <li class="nav-item">
              <a style="color: white" class="nav-link" href="#about">About Us</a>
            </li>
           
           
            @if(Route::has('login'))


            @auth
            <li class="nav-item">
              <a class="nav-link" href="#verified" style="color: white" >Verified Charity Groups</a>
            </li>
            <li class="nav-item" >
            </li>
            <li class="nav-item">
              <a style="color: white" class="nav-link" href="#request">Request Verification</a>
            </li>
            <li class="nav-item">
              <a style="color: white" class="nav-link" href="{{ url('verificationstatus') }}">My verification status</a>
            </li>
            <li class="nav-item">
              <a style="color: white" class="nav-link" href="{{ url('reportedcases') }}">reported cases status</a>
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
  {{-- request verification in progress message to keep the user updated on system status
  --}}
 
@if(Route::has('login'))


@auth


@else

@endauth
@endif
  
<h1 style="font-size:20px; background-color:white; text-align:center"> Hello! <br> you can now post your charity event right here with us!!!<h1>
    <div class="container" align="center" style="padding-top:100px">
    <form action="{{ url('uploadevent') }}" method="POST" encytype="multipart/form-data">
        @csrf
       <div style="padding:15px">
        <label>Name of organization hosting</label>
        <input style="color:black" type="text" name="name" placeholder= "name of organization">
       </div>
       <div style="padding:15px">
        <label>Email of organization hosting</label>
        <input style="color:black" type="text" name="email" placeholder="email of organization">
       </div>
      
      
       <div style="padding:15px">
        <label>Name of the charity event</label>
        <input style="color:black" type="text" name="eventname" placeholder= "event name">
       </div>
       <div style="padding:15px">
        <label>Name of the charity location</label>
        <input style="color:black" type="text" name="eventlocation" placeholder= "event location">
       </div>
       <div style="padding:15px">
        <label>Date of the event</label>
        <input style="color:black" type="date" name="eventdate" placeholder= "event date">
       </div>
       <div style="padding:15px">
        <label>image</label>
        <input type="file" name="image">
       </div>
       <div style="padding:15px; color:#4C1A1B">
        
        <input  class="btn btn-success" type="submit">
       </div>
    </form>
<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>