@extends('layouts.app')
{{-- Web site Title --}}
@section('title') {!!  $article->title !!} :: @parent @endsection

@section('meta_author')
    <meta name="author" content="{!! $article->author->username !!}"/>
@endsection
{{-- Content --}}
@section('content')
@include('partials.breadcrumb')
<div id="tp-main-container" class="tp-main-container">
  <div class="container">
    <div class="row">
      <div id="tp-left-side" class="col-md-8 tp-left-side">
        <div class="row tp-blog-single" id="tp-blog-single">
          <div class="col-md-12 col-sm-12 tp-blog">
            <div class="card">
              <div class="card-image tp-blog-pic"> 
                <a href="#">
                    @if($article->picture!="")
                        <img alt="{{$article->picture}}"
                             src="{!! url('appfiles/article/'.$article->id.'/'.$article->picture) !!}"/>
                    @endif 
                </a>
            </div>
              <div class="card-content tp-blog-ct">
                <h1 class="tp-blog-title">{{ $article->title }}</h1>
                <p>{!! $article->content !!}</p>
              </div>
              <div class="card-action tp-blog-meta">
                <div class="meta"> 
                    <span class="meta-dt"><i class="mdi-action-schedule"></i>{!!  $article->created_at !!}</span>
                    <span class="meta-author"><a href="#"><i class="mdi-social-person"></i>{!! $article->author->username !!}</a></span> 
                    <span class="meta-comments"><a href="#"><i class="mdi-communication-forum"></i>12 Comments </a></span> 
                    <span class="tags"><i class="mdi-notification-more"></i><a href="#">breast augamentation</a>,<a href="#">breast lift</a> </span> 
                </div>
              </div>
            </div>
            <div class="tp-post-navigation"><!-- template post navigation -->
              <div class="card-panel">
                <div class="row">
                  <div class="col-md-6 col-sm-6 tp-nav-prev">
                    <h3><a href="#"><i class="mdi-navigation-arrow-back"></i>Heading Title of Prev Post</a></h3>
                  </div>
                  <div class="col-md-6 col-sm-6 tp-nav-next">
                    <h3><a href="#">Heading Title of Next Post<i class="mdi-navigation-arrow-forward"></i></a></h3>
                  </div>
                </div>
              </div>
            </div>
            <!-- template post navigation -->
            
            <div class="tp-related-post"><!-- template related post -->
              <div class="card-panel">
                <h2>Related Post</h2>
                <div class="row">
                  <div class="col-md-6 tp-post-rel">
                    <div class="rel-pic"> <a href="javascript:void(0)"> <img src="images/blog-image-3.jpg" alt="" class="img-responsive"> </a> </div>
                    <div class="">
                      <h3><a href="#">Vestibulum Tempus Vitae Sedetlacus Etfringilla </a><a href="#" class="rel-category">"Breast Augmentation"</a></h3>
                    </div>
                  </div>
                  <div class="col-md-6 tp-post-rel">
                    <div class="rel-pic"> <a href="javascript:void(0)"> <img src="images/blog-image-4.jpg" alt="" class="img-responsive"> </a> </div>
                    <div class="">
                      <h3><a href="#">Vestibulum Tempus Vitae Sedetlacus Etfringilla </a><a href="#" class="rel-category">"Upper Arm Lift"</a></h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- template related post -->
            <div class="tp-author-post"><!-- template author post-->
              <div class="card-panel">
                <div class="row">
                  <div class="col-md-4 tp-author-pic"><img src="images/dc-pic.jpg" alt="" class="img-responsive"></div>
                  <div class="col-md-8 tp-author-cnt">
                    <h2 class="author-name"><a href="#">Ricky Macwan </a><span class="author">author</span></h2>
                    <p>Cras condimentum dictum serem ipsum dolosectetur adipllentesque habitant morbi tristique et senectusbulum tempus vitae lacus et fringilla.</p>
                    <a href="#" class="btn  btn-raised tp-btn-small">View All Post</a> </div>
                </div>
              </div>
            </div>
            <!-- template author post-->
            
            <div class="tp-comments"><!-- template comments -->
              <div class="card-panel">
                <div class="row">
                  <div class="col-md-12 tp-cmt-title">
                    <h2>Comments</h2>
                  </div>
                  <div class="col-md-12 tp-cmt-user">
                    <div class="comments"><!-- user comments -->
                      <div class="media"><!-- comments block start--> 
                        <a class="media-left" href="#"> <img src="images/ts-pic-3.jpg" alt="" class="img-circle "> </a>
                        <div class="media-body">
                          <h3 class="media-heading"><a href="#">Rohan Sinha</a></h3>
                          <div class="tp-user-meta"><span class="meta-dt"> 19 Oct, 2014</span> <small class="meta-time">2 Min Ago</small> </div>
                          <p>Cras sit amet nibh liberoin gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate atin faucibus.</p>
                          <a href="javascript:void(0)" class="btn btn-default btn-raised tp-btn-more">Reply </a> </div>
                      </div>
                      <!-- comments block end-->
                      
                      <div class="media"><!-- comments block start--> 
                        <a class="media-left" href="#"> <img src="images/ts-pic-3.jpg" alt="" class="img-circle "> </a>
                        <div class="media-body">
                          <h3 class="media-heading"><a href="#">Monali Kristen</a></h3>
                          <div class="tp-user-meta"><span class="meta-dt"> 19 Oct, 2014</span> <small class="meta-time">2 Min Ago</small> </div>
                          <p>Cras sit amet nibh liberoin gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate atin faucibus.</p>
                          <a href="javascript:void(0)" class="btn btn-default btn-raised tp-btn-more">Reply </a>
                          <div class="media nested-media"><!-- Nested comments block start--> 
                            <a class="media-left" href="#"> <img src="images/ts-pic-3.jpg" alt="" class="img-circle"> </a>
                            <div class="media-body">
                              <h3 class="media-heading"><a href="#">John Deo</a></h3>
                              <div class="tp-user-meta"><span class="meta-dt"> 19 Oct, 2014</span> <small class="meta-time">2 Min Ago</small> </div>
                              <p>Nullam et volutpat quam. Phasellus mattis ipsum eget nequ ornare dolor dolor porttitouismod dolor amet lect dolor porttitouismod quam .</p>
                              <a href="javascript:void(0)" class="btn  btn-raised tp-btn-more">Reply</a> </div>
                          </div>
                          <!-- Nested  comments block end--> 
                          
                        </div>
                      </div>
                      <!-- comments block end--> 
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- template comments -->
            
            <div class="tp-reply">
              <div class="card-panel">
                <div class="row">
                  <div class="col-md-12 tp-rly-title">
                    <h2>Leave Comments</h2>
                  </div>
                  <div class="col-md-12 leave-comments">
                    <form role="form" class="leave-form">
                      <div class="form-group">
                        <label class="sr-only" for="exampleInputPassword1">Name</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Name" required="">
                      </div>
                      <div class="form-group">
                        <label class="sr-only" for="exampleInputEmail2">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail2" placeholder="E-Mail" required="">
                      </div>
                      <div class="form-group">
                        <label class="sr-only" for="exampleInputEmail3">Subject</label>
                        <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Subject" required="">
                      </div>
                      <div class="form-group">
                        <label class="sr-only">Comments</label>
                        <textarea class="form-control textarea" rows="8" placeholder="Comment:"></textarea>
                      </div>
                      <button type="submit" class="btn btn-default tp-btn-small">Submit</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.template blog start --> 
          
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
                  </div>
                  <!-- /.recent post-->
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
                  </div>
                  <!-- /.recent post-->
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
                  </div>
                  <!-- /.recent post--> 
                </div>
              </div>
            </div>
          </div>
          <!-- recent post widget -->
          
          <div class="col-md-12"><!-- tags widget -->
            <div class="tags-widget">
              <h2>Tags</h2>
              <div class="tp-tags"> <a href="javascript:void(0)" class="btn btn-default btn-raised tp-btn-tag">brow lift</a> <a href="javascript:void(0)" class="btn btn-default btn-raised tp-btn-tag">skin surgery</a> <a href="javascript:void(0)" class="btn btn-default btn-raised tp-btn-tag">fillers</a> <a href="javascript:void(0)" class="btn btn-default btn-raised tp-btn-tag">arm lift</a> <a href="javascript:void(0)" class="btn btn-default btn-raised tp-btn-tag">hair trasplantion</a> <a href="javascript:void(0)" class="btn btn-default btn-raised tp-btn-tag">upper arm lift</a> <a href="javascript:void(0)" class="btn btn-default btn-raised tp-btn-tag">liposuction</a> <a href="javascript:void(0)" class="btn btn-default btn-raised tp-btn-tag">hair trasplantion</a> <a href="javascript:void(0)" class="btn btn-default btn-raised tp-btn-tag">upper arm lift</a> <a href="javascript:void(0)" class="btn btn-default btn-raised tp-btn-tag">liposuction</a> </div>
            </div>
          </div>
          <!-- tags widget --> 
          
        </div>
      </div>
      <!-- /.Template Right Side Content --> 
    </div>
  </div>
</div>
@endsection
