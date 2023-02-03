<div class="page-section">
    <div class="container", style="background-color: #bc9e82">
      <h1 class="text-center wow fadeInUp">Request verification</h1>

      <form class="main-form" action="{{ url('requests') }}" method="POST" >
        @csrf
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" name ="name" class="form-control" placeholder="Full name of charity group">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input name = "email" type="text" class="form-control" placeholder="Email address..">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input name= "date" type="date" class="form-control">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="speciality" id="speciality" class="custom-select" >
              <option>-----select speciality----</option>
              <option value="Education">Education</option>
              <option value="Health care">Health care</option>
              <option value="Child care">Child care</option>
              <option value="Food and Water">food and water</option>
              <option value="Other">Other</option>
            </select>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input name = "phone" type="text"  class="form-control" placeholder="Number..">
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input name = "website" type="text"  class="form-control" placeholder="Website address">
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="intro" id="intro" class="form-control" rows="6" placeholder="Introduce your charity group with a few words"></textarea>
          </div>
        </div>

        <button style="background-color:  #202022" type="submit" class="btn btn-primary mt-3 wow zoomIn">
          Submit Request</button>
      </form>
    </div>
  </div> <!-- .page-section -->