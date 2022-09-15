@extends('layouts.public')
@section('title')
    - Blogs
@endsection
@section('content')
    <div class="push-top-header">
        <div class="sections"
            style="background-image: url(https://images.unsplash.com/photo-1485322551133-3a4c27a9d925?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80);">
            <div class="container">
                <div class="pages-title">
                    <h1><span>Blogs</span></h1>
                    <p><a href="{{ route('index.home') }}">Home</a> &nbsp; > &nbsp;<a class="active"
                            href="{{ route('blogs') }}">Blogs</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <section class="blogs">
        <div class="container mt-5 mb-5">
            <div class="row">
                @forelse ($blogs as $blog)
                    <div class="col-lg-3 col-sm-6 pb-2 mb-4">
                        <a href="{{ route('blog.detail', $blog->slug) }}">
                            <div class="card">
                                @if ($blog->image)
                                    <img class="card-img-top" src="{{ $blog->image->getUrl() }}"
                                        alt="{{ $blog->title ?? '' }}">
                                @endif
                                <div class="card-body">
                                    <h5 class="card-title text-capitalize">{{ $blog->category_name ?? '' }}</h5>
                                    <p class="card-text">{{ Str::limit($blog->title,150) ?? '' }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @empty
                    <div class="col-md-12 text-center">
                        <h2 class="text-danger">No blogs available!</h2>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection
