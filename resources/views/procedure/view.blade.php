@extends('layouts.app')
{{-- Web site Title --}}
@section('title')
  @parent
@endsection

@section('content')
@include('partials.breadcrumb')   
  <div id="tp-main-container" class="tp-main-container"><!-- tp main container -->
    <div class="container">
      <div class="row">
        <div id="tp-left-side" class="col-md-8 tp-left-side"><!-- tp left side -->
          <div class="row">
            <div id="tp-pro-detail" class="col-md-12 tp-pro-detail" ><!-- tp pro details -->
              <div class="card-panel">                
                <div class="tp-pro-list">
                @foreach ($procedures as $procedure)
                  <h1><a href="#">{{ $procedure->name }}</a></h1>
                  <img src="{{asset('images/'.$procedure->image.'')}}" alt="" class="img-responsive">
                  {!!html_entity_decode($procedure->description)!!}
                @endforeach
                </div>
              </div>
            </div><!-- /.tp pro details -->
          </div>
        </div>
        <!-- /.tp left side -->
        <div class="col-md-4 tp-right-side"><!-- tp right side -->
          <div class="row">
            <div class="col-md-12">
              <div class="sub-nav-widget">
                <div class="card-panel">
                  <h2>Breast Treatment</h2>
                  <ul class="sub-nav arrow-list">
                    <li class="active"><a href="#">Breast Augmentation</a>
                    <li><a href="#">Breast Lift</a></li>
                    <li><a href="#">Breast Reconstruction</a></li>
                    <li><a href="#">Breast Revision</a></li>
                    <li><a href="#">Breast Reduction</a></li>
                  </ul>
                </div><!-- side nav -->
              </div><!-- /.side nav -->
            </div>
          </div>
        </div><!-- /.tp right side -->
      </div>
  </div>
  
@endsection
