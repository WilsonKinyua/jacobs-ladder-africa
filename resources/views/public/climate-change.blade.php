@extends('layouts.public')
@section('title')
    - What we do | Climate Change
@endsection
@section('description')
    
@endsection
@section('content')
    <div class="push-top-header">
        <div class="sections" style="background-image: url('{{ asset('img/climate-change.jpeg') }}');">
            <div class="container">
                <div class="pages-title">
                    <h1>Jacob's Ladder Africa <br> <span>What we do - Climate Change</span></h1>
                    <p><a href="{{ route('index.home') }}">Home</a> &nbsp; > &nbsp; <a href="{{ route('our.pillars') }}">What
                            we do</a>
                        &nbsp; > &nbsp; <a class="active" href="{{ route('climate.change') }}">Climate Change</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <section class="mt-5 mb-5">
        <div class="container">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ asset('img/climate-change.jpeg') }}" class="img-fluid rounded-start" alt="Climate">
                </div>
                <div class="col-md-8 border-right">
                    <div class="card-body">
                        <h3 class="card-title">Climate Change</h3>
                        <p>
                            The global conversation on climate change has largely centered around the need
                            to take urgent
                            action to reverse climatic trends. As a result of diverse conventions, countries
                            have set ambitious
                            carbon emission reduction targets. Organizations have also restructured their
                            ways of doing business
                            and have implemented regulatory frameworks in response to climate change.
                        </p>
                        <p>
                            The missing component in all these conversations is the element of opportunity,
                            particularly where
                            the youth in Africa and emerging markets are concerned. Africa occupies a unique
                            position in that
                            what has been identified as challenges are actually opportunities to pivot to a
                            whole new reality.
                        </p>
                        <p>
                            Many African countries are at nascent stages where the conversation on climate
                            change is
                            concerned, and yet the continent would be disproportionately affected by the
                            adverse effects of
                            climate change. With 60% of the African population being under the age of 25,
                            the youth can be
                            catalysts that leverage technology and innovation to combat climate change.
                        </p>
                        <p>
                            We believe that it is time to articulate Africa’s role in the global climate
                            change arena and position
                            the natural and human resources in the form of the youth that we have to offer
                            the world.
                        </p>
                        <p>
                            It is against this background that JLA invites interested parties with a desire
                            to see  a background
                            that we convene an inaugural high level conference on climate change: the
                            <strong>Africa
                                Youth Climate
                                Summit</strong>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
