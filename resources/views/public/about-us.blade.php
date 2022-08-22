@extends('layouts.public')
@section('content')
    <div class="push-top-header">
        <div class="sections"
            style="
    background-image: url('{{ asset('img/mission-vision.jpeg') }}');height: 750px;
     ">
            <div class="container">
                <div class="pages-title">
                    <h1>Jacob's Ladder Africa <br> <span>About Us</span></h1>
                    <p><a href="{{ route('index.home') }}">Home</a> &nbsp; > &nbsp; <a class="active"
                            href="{{ asset('about.us') }}">About Us</a></p>
                </div>
            </div>
        </div>
    </div>

    <section class="about-us mb-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="about-us-img">
                        <img src="{{ asset('img/about-us.png') }}" alt="About us">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="about-us-content">
                        <h2 class="headings-bottom-line">About Jacob’s Ladder Africa </h2>
                        <p>
                            Jacob’s Ladder Africa seeks to activate 30 Million jobs in the African Green Economy by 2032. It
                            is a sustainable development hub that advances the agenda of youth in Africa towards
                            self-reliance and productivity. We seek to alleviate the current state of insufficiency among
                            the youth and empower them as the continent’s future leaders, to enable them to forge a new
                            pathway for themselves and others.
                        </p>
                        <p>
                            Jacob’s Ladder Africa seeks to do this through two main pillars critical to the future of
                            Africa: Climate Change and Leadership & Governance.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section id="mission-vision" class="mission-vision">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-6 border-right">
                    <div class="vision-content">
                        <div class="mission-vision-icon">
                            <img src="{{ asset('img/vision.png') }}" alt="Vision">
                        </div>
                        <h2 class="headings">Our Vision</h2>
                        <p>
                            An integrated, independent and fruitful Africa, emboldened and empowered to chart unique
                            pathways to her highest potential.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 mission-border-right">
                    <div class="vision-content">
                        <div class="mission-vision-icon">
                            <img src="{{ asset('img/mission.png') }}" alt="Mission">
                        </div>
                        <h2 class="headings">Our Mission</h2>
                        <p>
                            Activating 30 million jobs in the African Green Economy by 2032 by catalysing an alternative
                            economic culture
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
