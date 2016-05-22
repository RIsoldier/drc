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
                @foreach ($products as $procedure)
                  <h1>{{ $procedureName = $procedure->name }}</h1>
                  <img src="{{asset('images/'.$procedure->image.'')}}" alt="" class="img-responsive">
                  {!!html_entity_decode($procedure->description)!!}  
                  <?php $procedureCategory = $procedure->category; ?>
                @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 tp-right-side">
          <div class="row">
            <div class="col-md-12">
              <div class="sub-nav-widget">
                <div class="card-panel">
                @if ($procedureName == 'Face Lifts')
                  <h2>Face Lifts</h2>
                  <ul class="sub-nav arrow-list">
                   @foreach ($links as $procedure)
                      <li><a href="#">{{ $procedure->name }}</a></li>
                    @endforeach
                  </ul>
                @else
                  <h2><?php echo $procedureCategory; ?></h2>
                  <ul class="sub-nav arrow-list">
                   @foreach ($links as $procedure)                      
                      <li class="{{ Ekko::isActiveMatch(urlencode($procedure->name)) }}"><a href="{{ url('products/'.urlencode($procedure->name)) }}">{{ $procedure->name }}</a></li>
                    @endforeach
                  </ul>
                @endif 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  
@endsection
