<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Blog::all();
        return view('admin.blogs.blog_list',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blogs.add_blog');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $photo = $request->file('photo');
        $name = $photo->getClientOriginalName();
        Blog::create([
            'photo' => $name,
            'details' => $request->details,
            
        ]);
        $photo->move('./images/', $name);
        return redirect()->route('blog.index');
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $blog = Blog::findorFail($id);
       return view('admin.blogs.blog_show',compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $blog = Blog::findorFail($id);
        return view('admin.blogs.edit_blog',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $blog = Blog::findOrFail($id);
        $photo=$request->file('photo');
        $name=$photo->getClientOriginalName();
        $blog->update([
            'photo' => $name,
            'details' =>$request->details,
        ]);
        return redirect()->route('blog.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( Blog $blog)
    {
        $blog->delete();
        return redirect()->route('blog.index');
    }
}
