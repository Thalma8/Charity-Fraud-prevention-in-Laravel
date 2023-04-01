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
              <a style="color: white" class="nav-link" href={{ url('about') }}>About Us</a>
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
  @if(session()->has('message'))
  <div class ="alert alert-success">
    <button type="button"class="close"data-dismiss="alert">x</button>
    {{ session()->get('message') }}
  @endif 
  </div>
 
<div class="page-section">
    <div class="container", style="background-color:  #777777">
      <div style="align-content: center;">
        <p> <i><b>it is important to note that in order for you to be able to follow up on the status of your report you should create an account if you have an account log in then report case</i></b></p>
      </div>
      <h1 class="text-center wow fadeInUp"><b>REPORT CHARITY FRAUD CASE</b></h1>

      <form class="main-form" action="{{ url('reports') }}" method="POST" >
        @csrf
        <div class="row mt-5 ">
          
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" name ="name" class="form-control" placeholder="Name of the reporter">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input name = "email" type="text" class="form-control" placeholder="Email address of the reporter">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" name ="groupname" class="form-control" placeholder="Name of the charity group">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input name = "media" type="text" class="form-control" placeholder="How did you hear about the charity?">
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="actions" id="actions" class="form-control" rows="6" placeholder="What specific actions did the charity take that you believe to be fraudulent? For example, did they misrepresent their mission, use deceptive fundraising tactics, or fail to provide promised goods or services?"></textarea>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="evidenceactions" id="evidenceactions" class="custom-select" >
              <option>-do you have evidence accusation----</option>
              <option value="Education">Yes</option>
              <option value="Health care">No</option>
            </select>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="number" name ="amount" class="form-control" placeholder="How much money did you donate to the charity? ">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input name= "date" type="date" class="form-control">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="methodofpayment" id="methodofpayment" class="custom-select" >
              <option>-----method of payment----</option>
              <option value="Education">Paypal</option>
              <option value="Health care">Credit card</option>
              <option value="Child care">M-pesa</option>
              <option value="Food and Water">cash</option>
              <option value="Other">Other</option>
            </select>

          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <select name="evidencetransaction" id="evidencetransaction" class="custom-select" >
              <option>-do you have evidence of transaction----</option>
              <option value="Education">Yes</option>
              <option value="Health care">No</option>
            </select>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="contactgroup" id="contactgroup" class="form-control" rows="6" placeholder="Have you attempted to contact the charity to inquire about the fraud, and if so, what was their response?"></textarea>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="reportandresponse" id="reportandresponse" class="form-control" rows="6" placeholder="Have you reported the fraud to any other organizations or authorities, and if so, what was the outcome?"></textarea>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="relevantinfo" id="relevantinfo" class="form-control" rows="6" placeholder="Is there anything else you think may be relevant to the investigation of this charity fraud case?





            "></textarea>
          </div>
        </div>

        <button style="background-color:  #202022" type="submit" class="btn btn-primary mt-3 wow zoomIn">
          Report Case</button>
      </form>
    </div>
  </div> <!-- .page-section -->