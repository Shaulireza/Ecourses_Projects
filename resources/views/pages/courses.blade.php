@extends('pages.pagelayouts')
@section('pagetitle')
  Course
@endsection
@section('pagehtitle')
   Courses
@endsection

@section('pagecontent')
   @include('includes.subjectsection')
    @include('includes.Coursesection')
@endsection