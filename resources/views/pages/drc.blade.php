@extends('layouts.app')
@section('title') 
  About :: @parent 
@endsection


@include('partials.breadcrumb')
  <div id="tp-main-container" class="tp-main-container">
    <div class="container">
      <div class="row">
        <div id="tp-left-side" class="col-md-8 tp-left-side">
          <div id="tp-doctor" class="row tp-doctor">
            <div class="col-md-12 tp-doctor-single">
              <div class="card">
                <div class="card-box">
                  <div class="col-sm-8 col-md-8 dc-name">
                    <h1>Dr. Andrew Coundouriotis</h1>
                    <span class="dc-designation">MD</span> </div>
                  <div class="col-sm-4 col-md-4 dc-pic"> <img src="{{ assets(images/dr-c-cutout-suit.png) }}" alt="" class="img-circle img-responsive" /> </div>
                </div>
                <div class="card-content dc-desc">
                  <p>Dr. Andrew Coundouriotis specializes in the art and science of cosmetic and reconstructive surgery of the face, head and neck. He is one of only a few surgeons in the Southeastern United States who is both board certified and fellowship trained in facial cosmetic surgery.</p>
                  <p>
                  Dr. Coundouriotis graduated Suma Cum Laude from Duke University and was invited into Phi Beta Kappa. He then enrolled in the Duke University School of Medicine for his Medical Degree.</p>
                  <p>
                  His interest in the marvelous and intricate complexities of the head & neck area led Dr. Coundouriotis to pursue a career in the head and neck surgery specialty. With this goal in mind, Dr. Coundouriotis completed a general surgery internship and residency with distinction in the field of head and neck surgery at Duke University Medical Center. He followed this with a Fellowship with Dr. Ferdinand Becker in the relatively new subspecialty area of head and neck surgery, Facial Plastic and Reconstructive Surgery.</p>
                  <p>
                  When Dr. Coundouriotis completed his training in 1993, he became one of a select group of surgical specialists in the country equipped with this special surgical background.</p>
                  <p>
                  Today Dr. Coundouriotis is a Fellow of both the American Academy of Facial Plastic Surgeons and the American College of Surgeons. He is certified by the American Board of Facial Plastic and Reconstructive Surgery and the American Board of Otolaryngology, Head & Neck Surgery. He is proud to be among a select group of surgeons in the country to be certified by both boards. He was recently Certified in Anti-Aging and Regenerative Medicine by the American Academy of Anti-Aging Medicine (A4M). He is a member of the American Society of Laser Medicine and Surgery and the Florida Society of Facial Plastic and Reconstructive Surgery.</p>
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
              </div>
            </div>
          </div>
        </div>
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
              <div class="bf-gallery">
                <div class="card-panel">
                  <h2>Before / After Gallery</h2>
                  <p>Our expert team has treated over half a million people.</p>
                  <img src="images/glry-pic.jpg" alt="before after gallery" class="img-responsive"> <a href="gallery-list.html" class="btn btn-raised tp-btn-regular"> View Gallery</a> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection