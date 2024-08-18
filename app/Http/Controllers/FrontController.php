<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Page;
use App\Models\Member;
use App\Models\Slider;
use App\Models\Project;
use App\Models\Service;
use App\Models\PricingPlan;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $sliders = Slider::take(2)->get();
        $services = Service::take(4)->get();
        $projects = Project::take(6)->get();
        $blogs = Blog::withCount('comments')->take(4)->get();
        $pricing = PricingPlan::take(4)->get();
        $members = Member::take(4)->get();
        $testimonials = Testimonial::take(4)->get();

        return view('website.index', compact('sliders', 'services', 'projects','blogs', 'pricing', 'members','testimonials'));
    }

    public function about(){
        $item = Page::findOrFail(2);
        $members = Member::take(4)->get();
        return view('website.about',compact('item', 'members'));
    }
    public function Services(){
        $services = Service::latest('id')->get();
        $testimonials = Testimonial::take(4)->get();
        return view('website.service', compact('services', 'testimonials'));
    }

    public function Projects(){
        $projects = Project::get();
        return view('website.projects', compact('projects'));
    }

    public function Pricing(){
        $pricing = PricingPlan::get();
        return view('website.pricingPlan',compact('pricing'));
    }

    public function blogs(){
        $blogs = Blog::withCount('comments')->latest('id')->get();
        return view('website.blogs',compact('blogs'));
    }

    public function members(){
        $members = Member::latest('id')->get();
        return view('website.members',compact('members'));
    }

    public function testimonials(){
        $testimonials = Testimonial::latest('id')->get();
        return view('website.testimonials',compact('testimonials'));
    }

    public function Pages(){
        return 5;
    }

    public function Contact(){
        return view('website.contact');
    }

}
