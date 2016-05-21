@extends('layouts.app')
@section('title') Home :: @parent @endsection
@section('content')
    @include('partials.slider')
    @include('partials.welcomemessage')  
    @include('partials.service')  
    @include('partials.justformen')  
@endsection

