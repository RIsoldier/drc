@extends('layouts.app')
{{-- Web site Title --}}
@section('title')
  @parent
@endsection

@section('content')
@include('partials.breadcrumb')
   <div id="tp-main-container" class="tp-main-container">
    <div id="tp-service-page" class="tp-service-page" ><!-- tp service section -->
      <div class="container">
        <div class="row">
          @foreach ($procedures as $procedure)
          <div class="col-md-3 service-block"><!-- service block start -->
          <div class="card">
            <div class="card-image service-pic"> <img src="{{asset('images/'.$procedure->image.'')}}" alt=""> </div>
            <div class="card-content service-ct">
              <h2><a href="{{url('procedures/'.$procedure->category.'/'.$procedure->name.'')}}">{{ $procedure->name }}</a></h2>
              <p></p>
              <a href="{{ url('procedures/'.$procedure->name) }}" class="btn btn-default btn-raised tp-btn-more">more</a> </div>
          </div>
        </div>
        @endforeach  
        </div>
      </div>
    </div>
  </div>
  
@endsection