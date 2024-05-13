<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $data = Course::all();
       return view('admin.courses.course_list',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.courses.add_course');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Course::create([
            'name'=>$request->name,
            'syllabus'=>$request->syllabus,
            'duration'=>$request->duration,
        ]);
        return redirect()->route('course.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $course = Course::findorFail($id);
        return view('admin.courses.course_show',compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $course = Course::findorFail($id);
        return view('admin.courses.edit_course',compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $course = Course::findorFail($id);
        Course::uodate([
            'name'=>$request->name,
            'syllabus'=>$request->syllabus,
            'duration'=>$request->duration,
        ]);
        return redirect()->route('course.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('course.index');
    }
}
