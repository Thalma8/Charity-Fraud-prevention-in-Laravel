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
<body style="background-color:  #4C1A1B">

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> +254 748 123 990</a>
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
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="doctors.html">Verified Charity Groups</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href='resources\views\user\event'>Charity events</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Request Verification</a>
            </li>
            @if(Route::has('login'))

            @auth
            <x-app-layout>

            </x-app-layout>

            @else

            <li class="nav-item">
              <a style="background-color:  #bc9e82" class="btn btn-primary ml-lg-3" href="{{ route('register') }}">Register</a>
            </li>
            <li class="nav-item">
                <a style="background-color:  #bc9e82" class="btn btn-primary ml-lg-3" href="{{ route('login') }}">Login</a>
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
  @if(session()->has('message'))
  <div class ="alert alert-success">
    <button type="button"class="close"data-dismiss="alert">x</button>
    {{ session()->get('message') }}
  @endif 
  </div>

  <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/charity.jpg);">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead">MAKE A DONATION SAVE A LIFE</span>
        <h1 class="display-4">TOUCH A LIFE</h1>
        <a href="#" class="btn btn-primary" style="background-color:  #bc9e82">DONATE</a>
      </div>
    </div>
  </div>


  <div class="bg-light">
    <div class="page-section py-3 mt-md-n5 custom-index">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-secondary text-white">
                <span class="mai-chatbubbles-outline"></span>
              </div>
              <p><span>Donate</span> to a charity</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-primary text-white">
                <span class="mai-shield-checkmark"></span>
              </div>
              <p><span>View</span> verified charity groups</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-accent text-white">
                <span class="mai-basket"></span>
              </div>
              <p><span>Post</span> an upcoming charity event</p>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .page-section -->

    <div class="page-section pb-0", style="background-color: #bc9e82">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h1>Welcome to the Charity Fraud Prevention System<br> Center</h1>
            <p class="text-grey mb-4">Welcome to our charity fraud prevention website! We are dedicated to helping individuals and organizations make informed decisions when it comes to charitable giving. Our website is designed to provide you with the information you need to protect yourself and your donations from fraud and scams. We rely on expert research and analysis to provide you with the latest information on fraudulent charities and organizations.</p>

            <p class="text-grey mb-4">You will find a wide range of resources on our website, including lists of known fraudulent charities, tips for identifying and avoiding fraud, and advice on what to do if you suspect fraud. We also provide information on legitimate charities and organizations so you can make informed decisions about where to give. We encourage you to explore our website and take advantage of the information we have to offer. If you have any questions or concerns, please don't hesitate to contact us. Together, we can make a difference in the fight against charity fraud.</p>
            <a href="about.html" class="btn btn-primary" , style="background-color:  #4C1A1B">Learn More</a>
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">
              <img src="../assets/img/charity_ water.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .bg-light -->
  </div> <!-- .bg-light -->
  @include('user.events')
@include('user.veri_charitys')
@include('user.request_veri')

  <footer class="page-footer" style="background-color:  #202022">
    <div class="container" style="background-color:  #4C1A1B">
      <div class="row px-md-3">
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Company</h5>
          <ul class="footer-menu">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Career</a></li>
            <li><a href="#">Editorial Team</a></li>
            <li><a href="#">Protection</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>More</h5>
          <ul class="footer-menu">
            <li><a href="#">Terms & Condition</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Advertise</a></li>
            <li><a href="#">Join as Doctors</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Our partner</h5>
          <ul class="footer-menu">
            <li><a href="#">One-Fitness</a></li>
            <li><a href="#">One-Drugs</a></li>
            <li><a href="#">One-Live</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Contact</h5>
          <p class="footer-link mt-2">351 Willow Street Franklin, MA 02038</p>
          <a href="#" class="footer-link">701-573-7582</a>
          <a href="#" class="footer-link">healthcare@temporary.net</a>

          <h5 class="mt-3">Social Media</h5>
          <div class="footer-sosmed mt-3">
            <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
          </div>
        </div>
      </div>

      <hr>

      <p id="copyright">Copyright &copy; 2020 <a href="https://macodeid.com/" target="_blank">MACode ID</a>. All right reserved</p>
    </div>
  </footer>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>