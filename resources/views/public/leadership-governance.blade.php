@extends('layouts.public')
@section('title')
    - What we do | Leadership &amp; Governance
@endsection
@section('content')
    <div class="push-top-header">
        <div class="sections" style="background-image: url('{{ asset('img/header.jpeg') }}');">
            <div class="container">
                <div class="pages-title">
                    <h1>Jacob's Ladder Africa <br> <span>What we do - Leadership &amp; Governance</span></h1>
                    <p><a href="{{ route('index.home') }}">Home</a> &nbsp; > &nbsp; <a href="{{ route('our.pillars') }}">What
                            we do</a>
                        &nbsp; > &nbsp; <a class="active" href="{{ route('leadership.governance') }}">Leadership &amp;
                            Governance</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <section class="mt-5 mb-5">
        <div class="container">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ asset('img/leadership.jpeg') }}" class="img-fluid rounded-start" alt="Leadership">
                </div>
                <div class="col-md-8 border-right">
                    <div class="card-body">
                        <h3 class="card-title">Leadership &amp; Governance</h3>
                        <p>
                            Leadership and governance are critical components of development and constructing the
                            building
                            blocks for an Africa of the future. The current median age of Africa’s leadership is 60
                            years while that
                            of the population is 20.3 years, which is quite telling of the generational gap that exists
                            between the
                            youth and the leaders meant to chart a path forward for them.
                        </p>
                        <p>
                            We believe that the youth need to be actively engaged in the leadership, decision making and
                            policy
                            development so that they can play an active role in steering the vehicle of their own
                            future. Jacob’s
                            Ladder Africa seeks to provide the platforms for the youth to engage in meaningful and
                            transformative conversations and initiatives aimed at empowering and facilitating their
                            leadership
                            and governance participation in the continent.
                        </p>
                        <p>
                            <i>Two initiatives under Leadership and Governance…</i>
                        </p>
                        <p>
                            For more on Zinduka and The African Ideology Institute <a href="{{ route('index.home') }}"
                                class="main-color" target="_blank" rel="noopener noreferrer">click here</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
