<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Member::latest('id')->get();
        return view('admins.members.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admins.members.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'perfession' => 'required',
            'location' => 'required',
        ]);

        $data = $request->except('_token', 'image');
        $imageName = rand().time().'.'. $request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(public_path('images/'), $imageName);
        $data['image'] = $imageName;
        Member::create($data);

        return redirect()->route('admin.members.index')
        ->with('msg', 'Add Member Successfully')->with('type', 'successs');
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
    public function edit(Member $member)
    {
        $item = $member;
        return view('admins.members.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Member $member)
    {
        $request->validate([
            'name' => 'required',
            'perfession' => 'required',
            'location' => 'required',
        ]);

        $data = $request->except('_token', 'image');

        if($request->hasFile('image')){
            file::delete(public_path('images/'.$member->image));
            $imageName = rand().time().'.'. $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('images/'), $imageName);
            $data['image'] = $imageName;
        }

        $member->update($data);

        return redirect()->route('admin.members.index')
        ->with('msg', 'Updated Member Successfully')->with('type', 'successs');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Member $member)
    {
        file::delete(public_path('images/'.$member->image));
        $member->delete();

        return redirect()->route('admin.projects.index')
        ->with('msg', 'Deleted Project Successfully')->with('type', 'danger');
    }
}
