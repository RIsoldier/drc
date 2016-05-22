<?php
  $categories = 
  [ 'Surgical'  => ['Face Lifts','Neck Lift','Precision','Eyes','Nose', 'Brow', 'Ears'], 
    'Laser'       => ['Pearl', 'Pearl Fractional', 'Infini', 'SmartLipo', 'Cellulaze', 'Laser Resurfacing', 'IPL', 'Titan'],
    'Injectables'  => ['Botox', 'Dysport', 'Sculptra', 'Juvederm', 'Restylane', 'Radiesse', 'Kybella'],    
    'Aesthetic'   => ['SkinMedica', 'VISIA', 'Obagi', 'Avene', 'Butterfly Lashes', 'Latisse']
  ];
  $products = 
  [ 'Skin'  => ['SkinMedica','Obagi'], 
    'Face'  => ['Obagi','Avene'], 
    'Hands' => ['Latisse','VISIA','Sculptra']
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
          <li class="{{ Ekko::isActiveRoute('about') }}"><a href="{{ url('about') }}">About</a></li>
          <li class="dropdown mega-dropdown {{ Ekko::isActiveMatch('procedures') }}"> <a href="{{ url('procedures') }}" class="dropdown-toggle" data-toggle="dropdown">Services<b class="caret"></b></a>            
            <ul class="dropdown-menu mega-dropdown-menu row">                                       
              @foreach($categories as $k => $v)
                <li class="col-md-3">     
                  <ul>
                    <li class="dropdown-header {{ Ekko::isActiveRoute('home') }}">{{ $k }} </li>
                      @foreach ($v as $key => $value) 
                          {!! Menu::item($value, url('/procedures/'.urlencode($value))) !!}
                      @endforeach
                  </ul>
                </li>  
              @endforeach                
            </ul>
          </li>
          <li class="{{ Ekko::isActiveRoute('facility') }}"><a href="{{ url('facility') }}">Our Facility</a></li>
          <li class="dropdown mega-dropdown {{ Ekko::isActiveMatch('products') }}"> <a href="{{ url('products') }}" class="dropdown-toggle" data-toggle="dropdown">Products<b class="caret"></b></a>            
            <ul class="dropdown-menu mega-dropdown-menu row">                                       
              @foreach($products as $k => $v)
                <li class="col-md-3">     
                  <ul>
                    <li class="dropdown-header {{ Ekko::isActiveRoute('products') }}">{{ $k }} </li>
                      @foreach ($v as $key => $value) 
                          {!! Menu::item($value, url('/products/'.urlencode($value))) !!}
                      @endforeach
                  </ul>
                </li>  
              @endforeach                
            </ul>
          </li>
          <li class="{{ Ekko::isActiveRoute('contact') }}"><a href="{{ url('contact') }}">Contact Us</a></li>
          
          
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
        <form class="navbar-form hidden-sm">
          <div class="form-control-wrapper">
            <input type="text" class="form-control empty" placeholder="Search">
            <button class="btn tp-btn-flat" type="button"><i class="mdi-action-search"></i></button>
          </div>
        </form>
      </div>
    </nav>
  </div>
</div>