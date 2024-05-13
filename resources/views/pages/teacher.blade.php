@extends('pages.pagelayouts')
@section('pagetitle')
 Teacher
@endsection
@section('pagehtitle')
   Teachers
@endsection

@section('pagecontent')
   @include('includes.teachersection')
    @include('includes.testimonialsection')
@endsection