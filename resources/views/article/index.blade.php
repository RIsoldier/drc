@extends('layouts.app')
{{-- Web site Title --}}
@section('title')
	@parent
@endsection
@section('content')
@include('partials.breadcrumb')
 <div id="tp-main-container" class="tp-main-container">
  <div class="container">
    <div class="row">
      <div id="tp-left-side" class="col-md-8 tp-left-side"><!-- Template Left Side Content -->
        <div class="row tp-blog-left" id="tp-blog-left">
        	@foreach($articles as $item)
				<div class="col-md-12 col-sm-12 tp-blog"><!-- template blog start -->
	            <div class="card">
	              <div class="card-image tp-blog-pic"> <a href="#"><img src="{{asset('images/'.$item->picture)}}" alt="skin surgery"> </a></div>
	              <div class="card-content tp-blog-ct">
	                <h1 class="tp-blog-title"><a href="#">{{ $item->title }}</a></h1>
	                <p>{!! $item->introduction !!}</p>
	                <a href="{{ url('article/'.$item->slug) }}" class="btn btn-default btn-raised tp-btn-more">more</a> </div>
	              <div class="card-action tp-blog-meta">
	                <div class="meta"> 
	                	<span class="meta-dt">
	                		<i class="mdi-action-schedule"></i>
	                			{{ $item->updated_at }}
	                	</span> 
	                	<span class="meta-author">
	                		<a href="#"><i class="mdi-social-person"></i>
	                			Admin
	                		</a>
	                	</span> 
	                	<span class="meta-comments">
	                		<a href="#"><i class="mdi-communication-forum"></i>
	                			12 Comments
	                		</a>
	                	</span> 
	                	<span class="tags"><i class="mdi-notification-more"></i>
	                		<a href="#">
	                			breast augamentation
	                		</a>,
	                		<a href="#">
	                			breast lift
	                		</a> 
	                	</span> 
	                </div>
	              </div>
	            </div>
	          </div>
			@endforeach
			{!! $articles->render() !!}
	          

          <div class="col-md-12 col-sm-12 tp-pagination">
            <ul class="pagination">
              <li class="disabled"><a href="javascript:void(0)">PREV</a></li>
              <li class="active"><a href="javascript:void(0)">1</a></li>
              <li><a href="javascript:void(0)">2</a></li>
              <li><a href="javascript:void(0)">3</a></li>
              <li><a href="javascript:void(0)">NEXT</a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- /. Template Left Side Content -->
      <div class="col-md-4 tp-right-side"><!-- Template Right Side Content -->
        <div class="row tp-blog-rightside">
          <div class="col-md-12">
            <div class="search-widget">
              <div class="card-panel">
                <h2>Search</h2>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                  <button class="btn btn-default tp-btn-regular" type="button">Go!</button>
                  </span> </div>
                <!-- /input-group --> 
              </div>
            </div>
          </div>
          <div class="col-md-12"><!-- Category Widge -->
            <div class="category-widget">
              <div class="card-panel">
                <h2>Category</h2>
                <ul class="sub-nav">
                  <li class="active"><a href="#"><i class="mdi-navigation-arrow-forward"></i> Breast Treatments </a> </li>
                  <li><a href="#"><i class="mdi-navigation-arrow-forward"></i> Body Treatments </a></li>
                  <li><a href="#"><i class="mdi-navigation-arrow-forward"></i> Head &amp; Face</a></li>
                  <li><a href="#"><i class="mdi-navigation-arrow-forward"></i> Skin &amp; Hair</a></li>
                  <li><a href="#"><i class="mdi-navigation-arrow-forward"></i> For Man</a></li>
                  <li><a href="#"><i class="mdi-navigation-arrow-forward"></i> Injectables</a></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Category Widge -->
          <div class="col-md-12"><!-- archive widget -->
            <div class="archive-widget">
              <div class="card-panel">
                <h2>Archive</h2>
                <ul class="sub-nav">
                  <li class=""><a href="#"><i class="mdi-navigation-arrow-forward"></i> 2015</a> </li>
                  <li><a href="#"><i class="mdi-navigation-arrow-forward"></i> 2014</a></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- archive widget -->
          <div class="col-md-12"><!-- recent post widget -->
            <div class="recent-widget">
              <div class="card-panel">
                <h2>Recent Post</h2>
                <div class="row">
                  <div class="col-md-12 recent-post"><!-- recent post-->
                    <div class="row">
                      <div class="col-md-4 recent-pic">
                        <div class=""><a href="#"><img src="images/blg-side.jpg" class="img-responsive" alt=""></a></div>
                      </div>
                      <div class="col-md-8 recent-ct">
                        <h3> <a href="#">Heading Title for Recent</a></h3>
                        <div class="meta"> <span class="meta-dt"> <i class="mdi-action-schedule"></i>Feb 5, 2015</span> </div>
                      </div>
                    </div>
                  </div><!-- /.recent post-->
                  <div class="col-md-12 recent-post"><!-- recent post-->
                    <div class="row">
                      <div class="col-md-4 recent-pic">
                        <div class=""><a href="#"><img src="images/blg-side-1.jpg" class="img-responsive" alt=""></a></div>
                      </div>
                      <div class="col-md-8 recent-ct">
                        <h3> <a href="#">Heading Title for Recent</a></h3>
                        <div class="meta"> <span class="meta-dt"> <i class="mdi-action-schedule"></i>Feb 4, 2015</span> </div>
                      </div>
                    </div>
                  </div><!-- /.recent post-->
                  <div class="col-md-12 recent-post"><!-- recent post-->
                    <div class="row">
                      <div class="col-md-4 recent-pic">
                        <div class=""><a href="#"><img src="images/blg-side-2.jpg" class="img-responsive" alt=""></a></div>
                      </div>
                      <div class="col-md-8 recent-ct">
                        <h3> <a href="#">Heading Title for Recent</a></h3>
                        <div class="meta"> <span class="meta-dt"> <i class="mdi-action-schedule"></i>Feb 3, 2015</span> </div>
                      </div>
                    </div>
                  </div><!-- /.recent post-->
                </div>
              </div>
            </div>
          </div>
          <!-- recent post widget -->

          <div class="col-md-12"><!-- tags widget -->
            <div class="tags-widget">
              
                <h2>Tags</h2>
                <div class="tp-tags">
                <a href="javascript:void(0)" class="btn btn-default btn-raised tp-btn-tag">brow lift</a>
                <a href="javascript:void(0)" class="btn btn-default btn-raised tp-btn-tag">skin surgery</a>
                <a href="javascript:void(0)" class="btn btn-default btn-raised tp-btn-tag">fillers</a>
                <a href="javascript:void(0)" class="btn btn-default btn-raised tp-btn-tag">arm lift</a>
                <a href="javascript:void(0)" class="btn btn-default btn-raised tp-btn-tag">hair trasplantion</a>
                <a href="javascript:void(0)" class="btn btn-default btn-raised tp-btn-tag">upper arm lift</a>
                <a href="javascript:void(0)" class="btn btn-default btn-raised tp-btn-tag">liposuction</a>
                <a href="javascript:void(0)" class="btn btn-default btn-raised tp-btn-tag">hair trasplantion</a>
                <a href="javascript:void(0)" class="btn btn-default btn-raised tp-btn-tag">upper arm lift</a>
                <a href="javascript:void(0)" class="btn btn-default btn-raised tp-btn-tag">liposuction</a>
                </div>
              
            </div>
          </div>
          <!-- tags widget --> 
          
        </div>
      </div>
      <!-- /.Template Right Side Content --> 
    </div>
  </div><!-- tp main conatiner -->
</div>
	
@endsection
