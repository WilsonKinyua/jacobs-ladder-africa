<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{

    public function index()
    {
        return view('public.index');
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
        return view('public.contact-us');
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

    public function team()
    {
        return view('public.team');
    }
}
