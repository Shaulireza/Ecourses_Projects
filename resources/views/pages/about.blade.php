@extends('pages.pagelayouts')
@section('pagetitle')
    About
@endsection
@section('pagehtitle')
    About
@endsection

@section('pagecontent')
   @include('includes.aboutsection')
    @include('includes.registrationsection')
    @include('includes.testimonialsection')
@endsection