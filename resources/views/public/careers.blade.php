@extends('layouts.public')
@section('title')
    - Careers
@endsection
@section('description')
    Join our Team
@endsection
@section('content')
    <div class="push-top-header">
        <div class="sections"
            style="background-image: url(https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1769&q=80);">
            <div class="container">
                <div class="pages-title">
                    <h1><span>Join our Team</span></h1>
                    <p><a href="{{ route('index.home') }}">Home</a> &nbsp; > &nbsp;<a class="active"
                            href="{{ route('careers') }}">Careers</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <section class="mt-5 mb-5">
        <div class="container">
            <div class="row text-center justify-content-center">
                @forelse ($careers as $career)
                    <div class="col-md-4">
                        @if ($career->vacancy_document)
                            <a href="{{ $career->vacancy_document->getUrl() }}" target="_blank">
                                <h3 class="main-color mb-4 text-uppercase">{{ $career->name ?? '' }}</h3>
                                <div class="img-job-wrapper">
                                    @if ($career->vacancy_image)
                                        <img src="{{ $career->vacancy_image->getUrl() }}" alt="{{ $career->name ?? '' }}">
                                    @endif
                                </div>
                            </a>
                        @endif
                    </div>
                @empty
                    <div class="col-md-12">
                        <h2 class="text-danger">There are currently no available positions.</h2>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection
