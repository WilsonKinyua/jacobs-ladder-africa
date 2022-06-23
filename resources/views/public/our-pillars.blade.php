@extends('layouts.public')
@section('title')
    - Our Pillars
@endsection
@section('content')
    <div class="push-top-header">
        <div class="sections"
            style="
    background-image: url('{{ asset('img/mission-vision.jpeg') }}');height: 750px;
     ">
            <div class="container">
                <div class="pages-title">
                    <h1>Jacob's Ladder Africa <br> <span>Our Pillars</span></h1>
                    <p><a href="{{ route('index.home') }}">Home</a> &nbsp; > &nbsp; <a class="active"
                            href="{{ route('our.pillars') }}">Our Pillars</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <section class="mb-5">
        <div class="container">
            <div class="row hover-effects-zoom-in image-hover">
                <div class="col-md-6 col-lg-4">
                    <div class="pillars-box">
                        <figure class="pillars-thumbnail">
                            <img src="{{ asset('img/climate-change.jpeg') }}" alt="Climate Change">
                        </figure>
                        <div class="pillars-short-desc">
                            <h3><a href="{{ route('climate.change') }}">Climate Change</a></h3>
                            <p>The global conversation on climate change has largely centered around...</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="pillars-box">
                        <figure class="pillars-thumbnail">
                            <img src="{{ asset('img/leadership.jpeg') }}" alt="leadership-governance">
                        </figure>
                        <div class="pillars-short-desc">
                            <h3><a href="{{ route('leadership.governance') }}">Leadership &amp; Governance</a></h3>
                            <p>Leadership and governance are critical components of development...</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="pillars-box">
                        <figure class="pillars-thumbnail">
                            <img src="{{ asset('img/education.jpeg') }}" alt="Education">
                        </figure>
                        <div class="pillars-short-desc">
                            <h3><a href="{{ route('education') }}">Education</a></h3>
                            <p>One can see the patterns that govern the thought process of a people by...</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="pillars-box">
                        <figure class="pillars-thumbnail">
                            <img src="{{ asset('img/economic.jpg') }}" alt="Economic">
                        </figure>
                        <div class="pillars-short-desc">
                            <h3><a href="{{ route('economic.empowerment')}}">Economic Empowerment</a></h3>
                            <p>We empower the youth with the mindset, skills and resources...</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="pillars-box">
                        <figure class="pillars-thumbnail">
                            <img src="{{ asset('img/tech.jpeg') }}" alt="Technology">
                        </figure>
                        <div class="pillars-short-desc">
                            <h3><a href="{{ route('innovation.technology') }}">Innovation &amp; Technology</a></h3>
                            <p>In Africa, technology presents an opportunity to leapfrog legacy systems..</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
