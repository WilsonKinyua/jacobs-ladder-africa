<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Career;
use App\Models\ContactUs;
use App\Models\RegisteredUser;
use App\Models\Slider;
use App\Models\Team;
use App\Models\WhatWeDo;
use Illuminate\Http\Request;

class PublicController extends Controller
{

    public function index()
    {
        $whatWeDo = WhatWeDo::all();
        $sliders = Slider::with(['media'])->get();

        return view('public.index', compact('whatWeDo', 'sliders'));
    }

    public function aboutUs()
    {
        return view('public.about-us');
    }

    public function careers()
    {
        $careers = Career::all();
        return view('public.careers', compact('careers'));
    }

    public function blogs()
    {
        $blogs = Blog::with(['media'])->get();
        return view('public.blogs', compact('blogs'));
    }

    public function blogDetails($slug)
    {
        if (empty($slug)) {
            abort(404, 'No blog post found!');
        }
        $blog = Blog::where('slug', $slug)->first();
        if ($blog === null) {
            return redirect()->back();
        }
        return view('public.blog-details', compact('blog'));
    }

    public function videos()
    {
        return view('public.videos');
    }

    public function climateChange()
    {
        return view('public.climate-change');
    }

    public function contactUs()
    {
        return view('public.contact-us');
    }

    public function contactUsCreate(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);

        if (!$validate) {
            return redirect()->back()->withErrors($validate)->withInput();
        }
        $network = ContactUs::create($request->all());
        if (!$network) {
            return response()->json(['status' => 'error']);
        } else {
            return response()->json(['status' => 'success']);
        }
    }

    public function economicEmpowerment()
    {
        return view('public.economic-empowerment');
    }

    public function education()
    {
        return view('public.education');
    }

    public function innovationTechnology()
    {
        return view('public.innovation-technology');
    }

    public function leadershipGovernance()
    {
        return view('public.leadership-governance');
    }

    public function ourPillars()
    {
        return view('public.our-pillars');
    }

    public function whatWeDo()
    {
        $whatWeDo = WhatWeDo::all();
        return view('public.what-we-do', compact('whatWeDo'));
    }

    public function whatWeDoSector($slug)
    {
        $whatWeDo = WhatWeDo::where('slug', $slug)->get()->first();

        abort_if(!$whatWeDo, 404);

        return view('public.single-what-we-do', compact('whatWeDo'));
    }

    public function team()
    {
        $teams = Team::with(['media'])->get();
        return view('public.team', compact('teams'));
    }

    public function registerNow()
    {
        return view('public.register-now');
    }

    public function registerNowCreate(Request $request)
    {
        $validate = $request->validate([
            'full_name' => 'required',
            'email' => 'required|email',
        ]);

        if (!$validate) {
            return redirect()->back()->withErrors($validate)->withInput();
        }
        $network = RegisteredUser::create($request->all());
        if (!$network) {
            return response()->json(['status' => 'error']);
        } else {
            return response()->json(['status' => 'success']);
        }
    }
}
