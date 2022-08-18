@extends('layouts.public')
@section('title')
    - Videos
@endsection
@section('content')
    <div class="push-top-header">
            <div class="container">
                <div class="pages-title">
                </div>
            </div>
        </div>
    <section class="mb-5">
        <div class="container">
            <div class="row hover-effects-zoom-in image-hover">
                <div class="col-md-6 col-lg-6">
                    <div class="pillars-box">
                        <figure class="pillars-thumbnail">
                            <iframe style="width: 100%;height:310px; object-fit:fill" src="https://www.youtube.com/embed/xCwmAPHidz0"
                                title="Forecasts for longer drought a concern for coastal Kenya" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </figure>
                        <div class="pillars-short-desc">
                            <h3>
                                Forecasts for longer drought a concern for coastal Kenya
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="pillars-box">
                        <figure class="pillars-thumbnail">
                            <iframe style="width: 100%; height:330px;" frameborder="0" src="https://www.bbc.co.uk/programmes/p0cn071t/player"></iframe>
                        </figure>
                        <div class="pillars-short-desc">
                            <h3>
                                The challenges and opportunities of intra-Africa travel
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
