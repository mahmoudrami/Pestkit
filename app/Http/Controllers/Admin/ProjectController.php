<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;


use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Project::latest('id')->get();

        return view('admins.projects.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admins.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required'
        ]);
        // dd($request->all());

        $imageNmae = rand().time().'.'.$request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(public_path('images/'), $imageNmae);

        Project::create([
            'name' => $request->name,
            'image' => $imageNmae,
        ]);

        return redirect()->route('admin.projects.index')
        ->with('msg', 'Add Project Successfully')->with('type', 'successs');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $item = $project;
        return view('admins.projects.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {

        $request->validate([
            'name' => 'required',
        ]);

        $project->name = $request->name;

        if($request->hasFile('image')){
            file::delete(public_path('images/'.$project->image));
            $imageNmae = rand().time().'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('images/'), $imageNmae);
            $project->image = $imageNmae;
        }

        $project->save();

        return redirect()->route('admin.projects.index')
        ->with('msg', 'Upadted Project Successfully')->with('type', 'info');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        file::delete(public_path('images/'.$project->image));
        $project->delete();

        return redirect()->route('admin.projects.index')
        ->with('msg', 'Deleted Project Successfully')->with('type', 'danger');
    }
}
