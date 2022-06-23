@extends('layouts.public')
@section('title')
    - Our Pillars | Education
@endsection
@section('content')
    <div class="push-top-header">
        <div class="sections" style="background-image: url('{{ asset('img/education.jpeg') }}');">
            <div class="container">
                <div class="pages-title">
                    <h1>Jacob's Ladder Africa <br> <span>Our Pillars - Education</span></h1>
                    <p><a href="{{ route('index.home') }}">Home</a> &nbsp; > &nbsp; <a
                            href="{{ route('our.pillars') }}">Our
                            Pillars</a>
                        &nbsp; > &nbsp; <a class="active" href="{{ route('education') }}">Education</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <section class="mt-5 mb-5">
        <div class="container">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ asset('img/education.jpeg') }}" class="img-fluid rounded-start" alt="Leadership">
                </div>
                <div class="col-md-8 border-right">
                    <div class="card-body">
                        <h3 class="card-title">Education</h3>
                        <p>
                            One can see the patterns that govern the thought process of a people by observing how they
                            live
                            their lives and the decisions they make. Therefore, to bring about sustainable
                            socio-economic
                            change and development, it is critical to determine and influence how people think.
                            Education is a
                            tool to introduce new ways for the youth to think about their identity, learn patterns of
                            problem
                            solving and the unique ways that Africans are equipped to solve those challenges.
                        </p>
                        <p>
                            Jacob’s Ladder Africa seeks to provoke the thinking patterns of the youth, beyond the
                            theoretical
                            offerings in classrooms through adopting pragmatic and scalable approaches to solving
                            Africa’s
                            problem.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
