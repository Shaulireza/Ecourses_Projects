<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $data= Slider::all();
       return view('admin.slider.slider_list',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('admin.slider.add_slider');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $photo = $request->file('photo');
        $pho = $photo->getClientOriginalName();
        Slider::create([
            'photo'=>$pho,
            'heading'=>$request->heading
        ]);
        $photo->move('./images/', $pho);
        return redirect()->route('slider.index');
       
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $slider = Slider::findorFail($id);
        return view('admin.slider.slider_show',compact('slider'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $slider = Slider::findorFail($id);
        return view('admin.slider.edit_slider',compact('slider'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $slider = Slider::findorFail($id);
        $photo =$request->file('photo');
        $pho=$photo->getClientOriginalName();
        $slider->update([
            'photo'=>$pho,
            'heading'=>$request->heading,
        ]);
        return redirect()->route('slider.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $slider)
    {
       $slider->delete();
        return redirect()->route('slider.index');
    }
}
