@extends('layouts.public')
@section('title')
    - What we do | Innovation & Technology
@endsection
@section('content')
    <div class="push-top-header">
        <div class="sections" style="background-image: url({{ asset('img/tech-pple.jpeg') }});">
            <div class="container">
                <div class="pages-title">
                    <h1>Jacob's Ladder Africa <br> <span>What we do - Innovation &amp; Technology</span></h1>
                    <p><a href="{{ route('index.home') }}">Home</a> &nbsp; > &nbsp; <a href="{{ route('our.pillars') }}">What we do</a>
                        &nbsp; > &nbsp; <a class="active" href="{{ asset('innovation.technology') }}">Innovation &amp;
                            Technology</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <section class="mt-5 mb-5">
        <div class="container">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ asset('img/tech.jpeg')}}" class="img-fluid rounded-start" alt="Leadership">
                </div>
                <div class="col-md-8 border-right">
                    <div class="card-body">
                        <h3 class="card-title">Innovation &amp; Technology</h3>
                        <p>
                            In Africa, technology presents an opportunity to leapfrog legacy systems that the rest of
                            the world
                            has operated in and craft innovative solutions that address our unique challenges. The youth
                            are at
                            an advantage as they now have access to technological resources which provide access to
                            information and connectivity through which they can develop solutions to elevate themselves
                            and
                            their communities.
                        </p>
                        <p>
                            We take advantage of the availability of technological resources to help the youth by
                            empowering
                            them with the resources they need to build and scale solutions across various sectors.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
