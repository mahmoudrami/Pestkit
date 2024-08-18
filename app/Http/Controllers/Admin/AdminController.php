<?php

namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(){
        return view('admins.index');
    }

    public function settings(){
        return view('admins.settings');
    }

    public function update_settings(Request $request){
        $request->validate([
            'phone' => 'required',
            'email' => 'required|ends_with:@gmail.com'
        ]);

        $setting = Setting::first();
        $setting->email = $request->email;
        $setting->phone = $request->phone;
        // $setting->logo = $request->logo;
        $setting->location = $request->location;
        $setting->facebook = $request->facebook;
        $setting->instagram = $request->instagram;
        $setting->linkedin = $request->linkedin;
        $setting->twiter = $request->twiter;

        if($request->hasFile('logo')){
            file::delete(public_path('images/'.$setting->logo));
            $logo = rand().time().'.'.$request->file('logo')->getClientOriginalExtension();
            $request->file('logo')->move(public_path('images/'), $logo);
            $setting->logo = $logo;

        }
        $setting->save();

        return redirect()->back();


    }

    public function profile(){
        $admin = Auth::user();
        return view('admins.edit',compact('admin'));
    }

    public function editProfile(Request $request){
        /** @var User $admin  */
        $admin = Auth::user();
        $admin->name = $request->name;

        if($request->hasFile('image')){
            $imageName = rand().time().'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('images'),$imageName);

            $admin->image = $imageName;
        }

        if($request->has('password')){
            $admin->password = bcrypt($request->password);
        }

        $admin->save();
        return redirect()->back();
    }

    public function checkPassword(Request $request){
        // return dd($request->all());
        return Hash::check($request->password, Auth::user()->password);
    }




}
