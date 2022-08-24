@extends('layouts.public')
@section('title')
    - {{ $whatWeDo->title ?? '' }}
@endsection
@section('description')
    {{ $whatWeDo->meta_descriptions ?? '' }}
@endsection
@section('content')
    <section class="mb-5">
        <div class="container" style="padding-top: 200px">
            <div class="row g-0">
                <div class="col-md-4">
                    @if ($whatWeDo->content_photo)
                        <img src="{{ $whatWeDo->content_photo->getUrl() }}" class="img-fluid rounded-start"
                            alt="{{ $whatWeDo->title ?? '' }}">
                    @endif
                </div>
                <div class="col-md-8 border-right">
                    <div class="card-body">
                        <h1 class="card-title text-capitalize">{{ $whatWeDo->title ?? '' }}</h1>
                        <p>
                            {!! $whatWeDo->description ?? '' !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
