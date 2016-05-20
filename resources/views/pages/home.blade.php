@extends('layouts.app')
@section('title') Home :: @parent @endsection
@section('content')
    @include('partials.slider')
    @include('partials.welcome')
    @include('partials.meet')
    @include('partials.gallery')
    @include('partials.story')
@endsection

