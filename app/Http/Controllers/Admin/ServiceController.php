<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service as TargetModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Support\Facades\File;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = TargetModel::latest('id')->get();

        return view('admins.services.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admins.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'icon' => 'required',
        ]);


        // $imageName = rand().time(). '.' .$request->file('image')->getClientOriginalExtension();
        // $request->file('image')->move(public_path('images/'), $imageName);

        $item = new TargetModel();
        $item->name = $request->name;
        $item->email = $request->email;
        $item->phone = $request->phone;
        $item->description = $request->description;
        $item->icon = $request->icon;
        $item->save();

        return redirect()->route('admin.services.index')->with('msg', 'TargetModel Created successffly')->with('type', 'success');
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
    public function edit(Service $service)
    {
        $item = $service;
        return view('admins.services.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $service->name = $request->name;
        $service->email = $request->email;
        $service->phone = $request->phone;
        $service->description = $request->description;
        $service->icon = $request->icon;
        // if($request->hasFile('image')){
        //     file::delete(public_path('images/'.$service->icon));
        //     $imageName = rand().time().'.' .$request->file('image')->getClientOriginalExtension();
        //     $request->file('image')->move(public_path('images'), $imageName);
        //     $service->icon = $imageName;
        // }

        $service->save();

        return redirect()->route('admin.services.index')->with('msg', 'TargetModel Updated successffly')->with('type', 'info');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        file::delete(public_path('images/'.$service->icon));
        $service->delete();
        return redirect()->route('admin.services.index')->with('msg', 'TargetModel Deleted successffly')->with('type', 'danger');
    }
}
