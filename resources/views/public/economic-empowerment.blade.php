@extends('layouts.public')
@section('title')
    - What we do | Economic Empowerment
@endsection
@section('content')
    <div class="push-top-header">
        <div class="sections" style="background-image: url('{{ asset('img/education.jpeg') }}');">
            <div class="container">
                <div class="pages-title">
                    <h1>Jacob's Ladder Africa <br> <span>What we do - Economic Empowerment</span></h1>
                    <p><a href="{{ route('index.home') }}">Home</a> &nbsp; > &nbsp; <a href="{{ route('our.pillars') }}">What
                            we do</a>
                        &nbsp; > &nbsp; <a class="active" href="{{ route('economic.empowerment') }}">Economic Empowerment</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <section class="mt-5 mb-5">
        <div class="container">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ asset('img/economic.jpg') }}" class="img-fluid rounded-start" alt="Leadership">
                </div>
                <div class="col-md-8 border-right">
                    <div class="card-body">
                        <h3 class="card-title">Economic Empowerment</h3>
                        <p>
                            We empower the youth with the mindset, skills and resources to enable them to undertake
                            relevant
                            and sustainable economic activities that benefit communities and enhance their prosperity.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
