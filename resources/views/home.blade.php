@extends('layout')
@section('title')
ECOURSES - Online Courses
@endsection

@section('maincontent')
    @include('includes.carouselsection')
    @include('includes.aboutsection')

    @include('includes.subjectsection')


   @include('includes.coursesection')


    @include('includes.registrationsection')


    @include('includes.teachersection')


    @include('includes.testimonialsection')

    @include('includes.blogsection')
@endsection