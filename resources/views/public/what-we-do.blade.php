@extends('layouts.public')
@section('title')
    - What we do
@endsection
@section('content')
    <div class="push-top-header">
        <div class="sections" style="background-image: url('{{ asset('img/grassroots.jpg') }}');height: 550px;">
            <div class="container">
                <div class="pages-title">
                    <p><a href="{{ route('index.home') }}">Home</a> &nbsp; > &nbsp; <a class="active"
                            href="{{ route('we.do') }}">What we do</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <section class="mb-5">
        <div class="container">
            <div class="row hover-effects-zoom-in image-hover">
                @foreach ($whatWeDo as $whatWeDo)
                    <div class="col-md-6 col-lg-4">
                        <div class="pillars-box">
                            <figure class="pillars-thumbnail">
                                @if ($whatWeDo->content_photo)
                                    <img src="{{ $whatWeDo->content_photo->getUrl() }}" alt="{{ $whatWeDo->title ?? '' }}">
                                @endif
                            </figure>
                            <div class="pillars-short-desc">
                                <h3><a href="{{ route('we.do.sector', $whatWeDo->slug) }}">{{ $whatWeDo->title ?? '' }}</a>
                                </h3>
                                <p>{!! Str::limit($whatWeDo->description, 50) !!}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
