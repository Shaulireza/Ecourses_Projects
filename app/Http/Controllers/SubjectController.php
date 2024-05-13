<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data= Subject::all();
        return view('admin.subjects.sub_list',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.subjects.add_subject');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $photo = $request->file('photo');
        $name = $photo->getClientOriginalName();
        Subject::create([
            'photo' => $name,
            'title' => $request->title,
            
        ]);
        $photo->move('./images/', $name);
        return redirect()->route('subject.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
       $subject = Subject::findorFail($id);
       return view('admin.subjects.show_subject',compact('subject'));


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $subject = Subject::findorFail($id);
        return view('admin.subjects.edit_subject',compact('subject'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $subject= Subject::findorFail($id);
        $photo=$request->file('photo');
        $pho=$photo->getClientOriginalName();
        $subject-> update([
                'photo'=>$pho,
                'title'=>$request->title
        ]);
        return redirect()->route('subject.index');
      

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subject $subject)
    {
        $subject->delete();
        return redirect()->route('subject.index');
    }
}
