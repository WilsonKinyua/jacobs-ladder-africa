<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use App\Models\RegisteredUser;
use App\Models\WhatWeDo;
use Illuminate\Http\Request;

class PublicController extends Controller
{

    public function index()
    {
        $whatWeDo = WhatWeDo::all();

        return view('public.index', compact('whatWeDo'));
    }

    public function aboutUs()
    {
        return view('public.about-us');
    }

    public function climateChange()
    {
        return view('public.climate-change');
    }

    public function contactUs()
    {
        // return view('public.contact-us');
        return view('public.team');
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
        return view('public.team');
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
