@extends('layouts.app')
@section('title') About :: @parent @endsection

@section('content')
@include('partials.breadcrumb')
    <div id="tp-main-container" class="tp-main-container"><!-- tp main container -->
  <div class="container">
    <div class="row">
      <div id="tp-left-side" class="col-md-8 tp-left-side"><!-- tp left side -->
        <div id="tp-doctor" class="row tp-doctor"><!-- tp-doctor-single --> 
          <div class="col-md-12 tp-doctor-single"><!-- doctor block -->
            <div class="card">
              <div class="card-box"><!-- doctor box-->
                <div class="col-sm-8 col-md-8 dc-name">
                  <h1>Dr. Coundouriotis</h1>
                  <span class="dc-designation">MD</span> </div>
                <div class="col-sm-4 col-md-4 dc-pic"> <img src="images/dr-c-cutout-suit.png" alt="" class="img-circle img-responsive" /> </div>
              </div>
              <!-- doctor box-->
              <div class="card-content dc-desc"><!-- doctor content box -->
                <p>Dr. Andrew Coundouriotis specializes in the art and science of cosmetic and reconstructive surgery of the face, head and neck. He is one of only a few surgeons in the Southeastern United States who is both board certified and fellowship trained in facial cosmetic surgery.</p>
                <h2>Certifications &amp; Affiliations</h2>
                <ul class="arrow-list">
                  <li>Board Certified by the Lorem ipsum university.</li>
                  <li>Fellow of the There are many variations.</li>
                  <li>Consulting Staff at Cosmetic Medical Center.</li>
                  <li>Participating Physician Various versions have evolved over the years.</li>
                  <li>Aldus PageMaker including versions of Lorem Ipsum.</li>
                </ul>
                <h2>Education &amp; Training:</h2>
                <ul class="arrow-list">
                  <li>University of Lorem City – Bachelor of Arts, Biology</li>
                  <li>University of Simple dummy at San Antonio, Texas</li>
                  <li>Lorem ipsum is simple dummy Education and Training</li>
                </ul>
                <p>Cras pellentesque odio in commodo bibendum. Etiam id mauris metus. Vivamus rhoncus ultrices libero eget elementum. Nunc lobortis ligula elit, ut tempor lorem aliquet eget. Sed convallis faucibus purus, at cursus nulla congue vitae. Aliquam erat volutpat. Pellentesque nec semper sapien.</p>
                <p>Etiam finibus dapibus urna, malesuada posuere odio consectetur sed. Integer scelerisque dolor non ultrices tempus. Cras aliquam leo nec ligula molestie, eget bibendum nisi aliquam.</p>
                <p>Vestibulum ut dolor ut eros efficitur convallis non pharetra velit. Aenean ligula ex, lobortis vel iaculis in, fringilla in quam. </p>
              </div>
              <!-- doctor content box --> 
            </div>
          </div>
          <!-- /.doctor block --> 
          
        </div>
      </div><!-- /.tp left side -->
      <div class="col-md-4 tp-right-side">
        <div class="row">
          <div class="col-md-12">
            <div class="app-form-widget">
              <div class="card-panel">
                <h2>Make An Appointment</h2>
                <p>You can also get in touch by filling out the form below.</p>
                <form class="form-horizontal" method="post" action="quick-appoinment.php">
                  
                    
                    <!-- Text input-->
                    <div class="form-group">
                      <label class="sr-only col-md-4 control-label" for="name">Name</label>
                      <div class="col-md-12">
                        <input id="name" name="name" type="text" placeholder="Name" class="form-control input-md" required>
                      </div>
                    </div>
                    
                    <!-- Text input-->
                    <div class="form-group">
                      <label class="sr-only col-md-4 control-label" for="email">E-Mail</label>
                      <div class="col-md-12">
                        <input id="email" name="email" type="text" placeholder="E-Mail" class="form-control input-md" required>
                      </div>
                    </div>
                    
                    <!-- Text input-->
                    <div class="form-group">
                      <label class="sr-only col-md-4 control-label" for="number">Phone</label>
                      <div class="col-md-12">
                        <input id="number" name="number" type="text" placeholder="Phone" class="form-control input-md" required>
                      </div>
                    </div>
                    
                    <!-- Select Basic -->
                    <div class="form-group">
                      <label class="sr-only col-md-4 control-label" for="appointment">Appointment</label>
                      <div class="col-md-12">
                        <select id="appointment" name="appointment" class="form-control">  <option value="Breast Treatment">Breast Treatment</option>
                          <option value="Head & Face">Head &amp; Face</option>
                          <option value="Skin & Hair">Skin &amp; Hair</option>
                          <option value="For Men">For Men</option>
                        </select>
                      </div>
                    </div>
                    
                    <!-- Textarea -->
                    <div class="form-group">
                      <label class="sr-only col-md-4 control-label" for="messga">Message</label>
                      <div class="col-md-12">
                        <textarea class="form-control" id="messga" name="messga" placeholder="Write your message here"></textarea>
                      </div>
                    </div>
                    
                    <!-- Button -->
                    <div class="form-group">
                      <label class="sr-only col-md-4 control-label" for="singlebutton">appointment</label>
                      <div class="col-md-12">
                        <button type="submit" id="singlebutton" name="singlebutton" class="btn btn-raised tp-btn-regular">Make an appointment</button>
                      </div>
                    </div>
                  
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="bf-gallery"><!-- before after gallery -->
              <div class="card-panel">
                <h2>Before / After Gallery</h2>
                <p>Our expert team has treated over half a million people.</p>
                <img src="images/glry-pic.jpg" alt="before after gallery" class="img-responsive"> <a href="gallery-list.html" class="btn btn-raised tp-btn-regular"> View Gallery</a> </div>
              </div>
            </div>
          </div>
        </div><!-- template right side--><!-- tp right side-->
      </div><!-- /.template right side-->
    </div>
  </div>
</div>
@endsection