<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Slider;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;

class EcoursesController extends Controller
{
    public function home(){
        $slider = Slider::all();
        $teacher = Teacher::all();
        $subject= Subject::all();
        $blog= Blog::all();
        return view('home',compact('teacher','subject','slider','blog'));
    }


    public function about(){
        return view('pages.about');
    }

    public function course(){
        $subject = Subject::all();
        return view('pages.courses',compact('subject'));
    }
    public function teacher(){
        $teacher = Teacher::all();
        return view('pages.teacher',compact('teacher'));
    }

    public function contact(){
        return view('pages.contact');
    }

}
