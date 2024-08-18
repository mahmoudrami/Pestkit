<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;


use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Slider::latest('id')->get();

        return view('admins.sliders.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admins.sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required'
        ]);
        // dd($request->all());

        $imageNmae = rand().time().'.'.$request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(public_path('images/'), $imageNmae);

        Slider::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $imageNmae,
        ]);

        return redirect()->route('admin.sliders.index')
        ->with('msg', 'Add Slider Successfully')->with('type', 'successs');
    }

    /**
     * Display the specified resource.
     */
    public function show(Slider $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slider $slider)
    {
        $item = $slider;
        return view('admins.sliders.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Slider $slider)
    {

        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $slider->title = $request->title;

        if($request->hasFile('image')){
            file::delete(public_path('images/'.$slider->image));
            $imageNmae = rand().time().'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('images/'), $imageNmae);
            $slider->image = $imageNmae;
        }

        $slider->save();

        return redirect()->route('admin.sliders.index')
        ->with('msg', 'Upadted Slider Successfully')->with('type', 'info');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $slider)
    {
        file::delete(public_path('images/'.$slider->image));
        $slider->delete();

        return redirect()->route('admin.sliders.index')
        ->with('msg', 'Deleted Slider Successfully')->with('type', 'danger');
    }
}
