<?php
  $categories = 
  [ 'Surgical'  => ['Face Lift','Eyes','Nose','Brows','Ears'], 
    'Laser'       => ['Pearl', 'Pearl Fractional', 'Titan', 'Resurfacing', 'Hair Removal'],
    'Body'        => ['Smart Lipo', 'Zerona', 'Massage'],
    'Injectable'  => ['Sculptra', 'Botox', 'Dysport', 'Juvederm', 'Restylane', 'Radiesse'],    
    'Aesthetic'   => ['VISIA', 'Obagi', 'Skin Medica', 'Glytone', 'Avene', 'Latisse']
  ];
?>
<div id="tp-navbar" class="tp-navbar">
  <div class="container">
    <nav class="navbar navbar-default">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div class="navbar-collapse collapse navbar-responsive-collapse">
        <ul class="nav navbar-nav">
          <li class="{{ Ekko::areActiveURLs(['', '/home']) }}"><a href="{{ url('home') }}">Home</a></li>
          <li class="dropdown mega-dropdown {{ Ekko::isActiveMatch('procedures') }}"> <a href="{{ url('procedures') }}" class="dropdown-toggle" data-toggle="dropdown">Procedures<b class="caret"></b></a>            
            <ul class="dropdown-menu mega-dropdown-menu row">                                       
              @foreach($categories as $k => $v)
                <li class="col-md-3">     
                  <ul>
                    <li class="dropdown-header {{ Ekko::isActiveRoute('home') }}">{{ $k }} </li>
                      @foreach ($v as $key => $value) 
                          {!! Menu::item($value, url('/procedures/'.$value)) !!}
                      @endforeach
                  </ul>
                </li>  
              @endforeach                
            </ul>
          </li>
           <li class="dropdown"> <a href="#" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Gallery<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="gallery-list.html">Gallery Image</a></li>
              <li><a href="gallery-listing.html">Gallery Single Treatment </a></li>
              <li><a href="video-testimonial.html">Video Gallery</a></li>
              <li><a href="video-testimonial-boxed.html">Video Boxed Gallery</a></li>
            </ul>
          </li>
          <li class="{{ Ekko::areActiveURLs(['', '/about']) }}"><a href="{{ url('about') }}">About</a></li>
          <li class="dropdown"> <a href="#" data-target="#" class="dropdown-toggle" data-toggle="dropdown">News <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="blog.html">Blog</a></li>
              <li><a href="blog-details.html">Blog Single</a></li>
              <li class="{{ (Request::is('articles') ? 'active' : '') }}">
                    <a href="{{ url('articles') }}">Articles</a>
                </li>
            </ul>
          </li>

          <li class="dropdown"> <a href="#" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Pages <b class="caret"></b></a>
            <ul class="dropdown-menu">
              
              <li><a href="about-us.html">About us</a></li>
              <li><a href="about-with-sidebar.html">About us With Sidebar </a></li>
              <li><a href="patients-new.html">Are You New Patient?</a></li>
              <li><a href="pricing-table.html">Treatment Cost </a></li>
              <li><a href="finance.html">Finance Page</a></li>
              <li><a href="faq.html">FAQ's</a></li>
              <li><a href="appointment.html">Appointment Form</a></li>
              <li><a href="404.html">404 Page</a></li>
              <li><a href="shortcode-alerts.html">Shortcode Alert</a></li>
              <li><a href="shortcode-buttons.html">Shortcode Buttons</a></li>
              <li><a href="column.html">Shortcode Column</a></li>
              <li><a href="help.html">Help Tips</a></li>
              <li><a href="full-width-content.html">Full Width Content</a></li>
            </ul>
          </li>
          
          
          @if (Auth::guest())
              <li class="{{ (Request::is('auth/login') ? 'active' : '') }}"><a href="{{ url('auth/login') }}">Login</a></li>
          @else
            <li class="dropdown"> <a href="#" data-target="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }} <b class="caret"></b></a>
              <ul class="dropdown-menu">
                @if(Auth::check())
                    @if(Auth::user()->admin==1)
                      <li>
                          <a href="{{ url('admin/dashboard') }}"><i class="fa fa-tachometer"></i> Admin Dashboard</a>
                      </li>
                    @endif
                  <li class="divider"></li>
                @endif
                <li>
                    <a href="{{ url('auth/logout') }}"><i class="fa fa-sign-out"></i> Logout</a>
                </li>
              </ul>
            </li> 
          @endif         
        <form class="navbar-form">
          <div class="form-control-wrapper">
            <input type="text" class="form-control empty" placeholder="Search">
            <button class="btn tp-btn-flat" type="button"><i class="mdi-action-search"></i></button>
          </div>
        </form>
      </div>
    </nav>
  </div>
</div>