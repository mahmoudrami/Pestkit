<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Blog::latest('id')->with('comments')->withCount('comments')->get();
        // dd($items);
        return view('admins.blogs.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admins.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required|image',
        ]);

        $imageName = rand().time(). '.' .$request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(public_path('images/'), $imageName);

        $item = new Blog();
        $item->user_id =  1; // Auth::id()
        $item->title = $request->title;
        $item->content = $request->content;
        $item->image = $imageName;
        $item->save();

        return redirect()->route('admin.blogs.index')
        ->with('msg', 'Blog Created successffly')->with('type', 'success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        $item = $blog;
        return view('admins.blogs.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $blog->title = $request->title;
        $blog->content = $request->content;

        if($request->hasFile('image')){
            file::delete(public_path('images/'.$blog->image));
            $imageName = rand().time().'.' .$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('images'), $imageName);
            $blog->image = $imageName;
        }

        $blog->save();

        return redirect()->route('admin.blogs.index')->with('msg', 'Blog Updated successffly')->with('type', 'info');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        // dd($blog->image);
        file::delete(public_path('images/'.$blog->image));
        $blog->delete();
        return redirect()->route('admin.blogs.index')->with('msg', 'Blog Deleted successffly')->with('type', 'danger');
    }
}
