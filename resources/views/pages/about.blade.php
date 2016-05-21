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
                  <h1>Andrew Coundouriotis, M.D., F.A.C.S.</h1>
                  <span class="dc-designation">Dr. Andrew Coundouriotis specializes in the art and science of cosmetic and reconstructive surgery of the face, head and neck.</span> </div>
                <div class="col-sm-4 col-md-4 dc-pic"> <img src="images/dr-c-cutout-suit.png" alt="" class="img-circle img-responsive" /> </div>
              </div>
              <!-- doctor box-->
              <div class="card-content dc-desc">
                <h2>Certifications &amp; Affiliations</h2>
                <p>Dr. Coundouriotis is a Fellow of both the American Academy of Facial Plastic Surgeons and the American College of Surgeons. He is certified by the American Board of Facial Plastic and Reconstructive Surgery and the American Board of Otolaryngology, Head &amp; Neck Surgery. He is proud to be among a select group of surgeons in the country to be certified by both boards. He was recently Certified in Anti-Aging and Regenerative Medicine by the American Academy of Anti-Aging Medicine (A4M). He is a member of the American Society of Laser Medicine and Surgery and the Florida Society of Facial Plastic and Reconstructive Surgery.</p>
                <ul class="arrow-list">
                  <li>The American Academy of Facial Plastic and Reconstructive Surgery</li>
                  <li>American Academy of Anti-Aging Medicine</li>
                  <li>American Board of Otolaryngology</li>
                  <li>American Society for Laser Medicine and Surgery</li>
                </ul>
                <h2>Education &amp; Training:</h2>
                <p>Dr. Coundouriotis graduated Suma Cum Laude from Duke University and was invited into Phi Beta Kappa. He then enrolled in the Duke University School of Medicine for his Medical Degree.</p>
                <ul class="arrow-list">
                  <li>University of Lorem City – Bachelor of Arts, Biology</li>
                  <li>University of Simple dummy at San Antonio, Texas</li>
                  <li>Lorem ipsum is simple dummy Education and Training</li>
                </ul>
                
                <p>His interest in the marvelous and intricate complexities of the head &amp; neck area led Dr. Coundouriotis to pursue a career in the head and neck surgery specialty. With this goal in mind, Dr. Coundouriotis completed a general surgery internship and residency with distinction in the field of head and neck surgery at Duke University Medical Center. He followed this with a Fellowship with Dr. Ferdinand Becker in the relatively new subspecialty area of head and neck surgery, Facial Plastic and Reconstructive Surgery.</p>
                <p>When Dr. Coundouriotis completed his training in 1993, he became one of a select group of surgical specialists in the country equipped with this special surgical background.</p>                
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
                {!! Form::open(array('route' => 'contact_store', 'method' => 'post', 'files'=> true, 'class' => 'form-horizontal')) !!} 
                    <div class="form-group">
                     {!! Form::label('name', "Name", array('class' => 'sr-only col-md-4 control-label')) !!}
                      <div class="col-md-12">                       
                        {!! Form::text('name', null, array('class' => 'form-control input-md', 'required', 'placeholder' => 'Name')) !!}
                      </div>
                    </div>
                    <div class="form-group">
                     {!! Form::label('email', "E-Mail", array('class' => 'sr-only col-md-4 control-label')) !!}
                      <div class="col-md-12">                       
                        {!! Form::text('email', null, array('class' => 'form-control input-md', 'required', 'placeholder' => 'E-Mail')) !!}
                      </div>
                    </div>
                    <div class="form-group">
                     {!! Form::label('number', "Phone", array('class' => 'sr-only col-md-4 control-label')) !!}
                      <div class="col-md-12">                       
                        {!! Form::text('number', null, array('class' => 'form-control input-md', 'required', 'placeholder' => 'Phone')) !!}
                      </div>
                    </div>
                    
                    <!-- Select Basic -->
                    <div class="form-group">
                      <label class="sr-only col-md-4 control-label" for="appointment">Appointment</label>
                      {!! Form::label('appointment', "Appointment", array('class' => 'sr-only col-md-4 control-label')) !!}
                      <div class="col-md-12">
                      {!!   Form::select('number', array(
                        'Breast Treatment' => 'Breast Treatment',
                         'Skin & Hair' => 'Skin & Hair',
                          'For Men' => 'For Men'
                          ), null , array('class' => 'form-control', 'required')) !!}
                      </div>
                    </div>
                    
                    <!-- Textarea -->
                    <div class="form-group">
                      {!! Form::label('message', "Message", array('class' => 'sr-only col-md-4 control-label')) !!}
                      <div class="col-md-12">
                        {!! Form::textarea('message', null, array('class' => 'form-control', 'required', 'placeholder' => 'Write your message here')) !!}
                      </div>
                    </div>
                    
                    <!-- Button -->
                    <div class="form-group">
                      {!! Form::label('appointment', 'Appointment', array('class' => 'sr-only col-md-4 control-label')) !!}
                      <div class="col-md-12">
                        {!! Form::button('Make an appointment', array('class' => 'btn btn-raised tp-btn-regular', 'type' => 'submit')) !!}
                      </div>
                    </div>
                  
                {!! Form::close() !!}
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