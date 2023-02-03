<div class="page-section">
    <div class="container", style="background-color: #bc9e82">
      <h1 class="text-center mb-5 wow fadeInUp">Verified Charity Groups</h1>

      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
        
        @foreach ($verifieds as $verifieds)
          
        
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img height = 300 px src="verifiedimage/{{ $verifieds -> image}}" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body" style="background-color:  #202022">
              <p class="text-xl mb-0">{{ $verifieds->name }}</p>
              <span class="text-sm text-grey">{{ $verifieds->location }}</span>
              <span class="text-sm text-grey">{{ $verifieds->speciality }}</span>
            </div>
          </div>
        </div>
        @endforeach

            
      </div>
    </div>
  </div>
