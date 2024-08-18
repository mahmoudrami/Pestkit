<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Page::latest('id')->get();
        return view('admins.pages.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admins.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $data = $request->except('_token', 'image');

        $imageName = rand().time(). '.' .$request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(public_path('images/'), $imageName);
        $data['image'] = $imageName;

        Page::create($data);

        return redirect()->route('admin.pages.index')
        ->with('msg', 'Page Created successffly')->with('type', 'success');

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
    public function edit(Page $page)
    {
        $item = $page;
        return view('admins.pages.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Page $page)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $data = $request->except('_token', 'image');

        if($request->hasFile('image')){
            $imageName = rand().time(). '.' .$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('images/'), $imageName);
            $data['image'] = $imageName;
        }

        $page->update($data);
        return redirect()->route('admin.pages.index')
        ->with('msg', 'Page Updated successffly')->with('type', 'info');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Page $page)
    {
        file::delete(public_path('images/'.$page->image));
        $page->delete();
        return redirect()->route('admin.pages.index')->with('msg', 'Page Deleted successffly')->with('type', 'danger');
    }
}
