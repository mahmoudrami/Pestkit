<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Testimonial::latest('id')->get();
        return view('admins.testimonials.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::get();
        return view('admins.testimonials.create',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'content' => 'required',
        ]);

        $data = $request->except('_token');

        Testimonial::create($data);

        return redirect()->route('admin.testimonials.index')
        ->with('msg', 'Upadted Testimonial Successfully')->with('type', 'success');
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
    public function edit(Testimonial $testimonial)
    {
        $item = $testimonial;
        $users = User::get();
        return view('admins.testimonials.edit',compact('item','users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $request->validate([
            'user_id' => 'required',
            'content' => 'required',
        ]);

        $data = $request->except('_token');

        $testimonial->update($data);

        return redirect()->route('admin.testimonials.index')
        ->with('msg', 'Upadted Testimonial Successfully')->with('type', 'info');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();

        return redirect()->route('admin.testimonials.index')
        ->with('msg', 'Deleleted Testimonial Successfully')->with('type', 'danger');
    }
}
