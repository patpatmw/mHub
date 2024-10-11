<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $allblogs = Blog::all();
        return view('blogs.index', compact('allblogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
 
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogRequest $request)
    {
        //
        //dd($request->all());
        $blog = Blog::create($this->validateRequest());
        return redirect()->route("allblogs");

    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
       // dd($blog);
       $allblogs = Blog::all();
       return view('blogs.edit');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        //
        $blog = Blog::find($id);
        return view('blogs.edit',compact('blog'));

       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $request)
    {
        //
        $blog = Blog::find($id);
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->image = $request->image;
        $blog->save();

        return redirect()->route("allblogs");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //
    }

    private function validateRequest(){
        return request()->validate([  
            'title'=>'required|email',
            'description'=>'required|min:100',
            'image'=>'',
        ]);
    }
}
