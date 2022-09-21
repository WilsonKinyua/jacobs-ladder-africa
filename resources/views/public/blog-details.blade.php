@extends('layouts.public')
@section('title')
    - {{ $blog->title ?? '' }}
@endsection
@section('description')
    {{ $blog->seo_description ?? '' }}
@endsection
@section('keywords')
    {{ $blog->keywords ?? '' }}
@endsection
@section('content')
    <div class="push-top-header">
        <div>
            <div class="container">
            </div>
        </div>
    </div>
    <section class="space-ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 order-1 order-lg-1 mb-2">
                    <div class="blog-post blog-details">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="blog-post-image left-side">
                                    @if ($blog->image)
                                        <img class="img-fluid" src="{{ $blog->image->getUrl() }}"
                                            alt="{{ $blog->title ?? '' }}">
                                    @endif
                                </div>
                                <style>
                                    img {
                                        max-width: 95%
                                    }
                                    a {
                                        color: #228c22;
                                    }
                                </style>
                                <div class="col-md-12 text-center">
                                    <div class="d-sm-flex bg-light border-radius p-md-3">
                                        <p class="mb-0 text-dark">
                                            {{ $blog->title ?? '' }}
                                        </p>
                                    </div>
                                </div>
                                <hr class="my-4 my-sm-5">
                                <div class="blog-post-content">
                                    <div class="blog-post-details">
                                        <p>
                                            {!! $blog->description ?? '' !!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4 my-sm-5">
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
