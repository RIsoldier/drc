<div id="tp-main-container" class="tp-main-container"><!-- tp main container -->
  <div class="container">
    <div class="row">
      <div id="tp-left-side" class="col-md-8 tp-left-side"><!-- tp left side -->
        <div class="card-panel">
          <div class="row tp-appointent" id="tp-appointent"><!-- tp appointment -->
            <div class="col-md-12 ">
              <h1>Request An Appointment </h1>
              <p>Please fill out the form below. Our scheduling coordinator will contact you to confirm your appointment.</p>
            </div>
            <div class="col-md-12 tp-ct-form">
              <form class="form-horizontal" method="post" action="appoinment.php">
                
                <!-- contact us form --> 
                
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="firstname">First Name</label>
                  <div class="col-md-7">
                    <input id="firstname" name="firstname" type="text" placeholder="First Name" class="form-control input-md" required="">
                  </div>
                </div>
                
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="lastname">Last Name</label>
                  <div class="col-md-7">
                    <input id="lastname" name="lastname" type="text" placeholder="Last Name" class="form-control input-md" required="">
                  </div>
                </div>
                
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="phone">Phone</label>
                  <div class="col-md-7">
                    <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control input-md" required="">
                  </div>
                </div>
                
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="email">E-mail</label>
                  <div class="col-md-7">
                    <input id="email" name="email" type="text" placeholder="E-mail" class="form-control input-md" required="">
                  </div>
                </div>
                
                <!-- Multiple Radios (inline) -->
                <div class="form-group">
                  <label class="col-md-4 control-label">How do you prefer to be 
                    contacted:</label>
                  <div class="col-md-4">
                    <label class="radio-inline" for="radios-0">
                      <input type="radio" name="radios" id="radios-0" value="Phone" checked="checked">
                      Phone </label>
                    <label class="radio-inline" for="radios-1">
                      <input type="radio" name="radios" id="radios-1" value="E-Mail">
                      Mail </label>
                  </div>
                </div>
                
                <!-- Select Basic -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="treatment">Select Treatment</label>
                  <div class="col-md-7">
                    <select id="treatment" name="treatment" class="form-control">
                      <option value="1">Breast Treatments</option>
                      <option value="2">Body Treatments</option>
                      <option value="3">Head &amp; Face</option>
                    </select>
                  </div>
                </div>
                
                <!-- Textarea -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="message">Message</label>
                  <div class="col-md-7">
                    <textarea class="form-control" id="message" name="message"></textarea>
                  </div>
                </div>
                
                <!-- Button -->
                <div class="form-group">
                  <div class="col-md-offset-4 col-md-7">
                    <button type="submit" id="submit" name="submit" class="btn tp-btn-small btn-rai">Submit</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!-- /.tp appointment --> 
        </div>
      </div>
      <!-- /.tp left side -->
      <div class="col-md-4 tp-right-side">
        <div class="row">
          <div class="col-md-12">
            <div class="bf-gallery"><!-- before after gallery -->
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