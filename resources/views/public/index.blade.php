@extends('layouts.public')
@section('content')
    @if (count($sliders) > 0)
        <div class="home-slider">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    @foreach ($sliders as $slider)
                        @if ($loop->first)
                            <button type="button" data-bs-target="#carouselExampleIndicators"
                                data-bs-slide-to="{{ $loop->index }}" class="active" aria-current="true"
                                aria-label="{!! $slider->title ?? '' !!}"></button>
                        @endif
                        @if (!$loop->first)
                            <button type="button" data-bs-target="#carouselExampleIndicators"
                                data-bs-slide-to="{{ $loop->index }}" aria-label="{!! $slider->title ?? '' !!}"></button>
                        @endif
                    @endforeach
                </div>
                <div class="carousel-inner" role="listbox">
                    @foreach ($sliders as $slider)
                        @if ($loop->first)
                            @if ($slider->image)
                                <div class="carousel-item active"
                                    style="background-image: url('{{ $slider->image->getUrl() }}')">
                                    <div class="container">
                                        <div class="slider-caption">
                                            <h2 class="display-4 animated fadeInRight">
                                                <span class="text-capitalize">
                                                    {!! $slider->title ?? '' !!}
                                                </span>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endif
                        @if (!$loop->first)
                            <div class="carousel-item" style="background-image: url('{{ $slider->image->getUrl() }}')">
                                <div class="container">
                                    <div class="slider-caption">
                                        <h2 class="display-4 animated fadeInRight">
                                            <span class="text-capitalize">{!! $slider->title ?? '' !!}</span>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    @endif
    <div class="banner-pattern"></div>
    <section class="about-us mb-5 mt-5" id="mission-vision">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="about-us-img">
                        <img src="{{ asset('img/about-us.png') }}" alt="About Jacob’s Ladder Africa">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="about-us-content">
                        <h1 class="headings-bottom-line">Jacob’s Ladder Africa</h1>
                        <p>
                            Jacob’s Ladder Africa seeks to activate 30 Million jobs in the African Green Economy by 2033. It
                            is a sustainable development hub that advances the agenda of youth in Africa towards
                            self-reliance and productivity. We seek to alleviate the current state of insufficiency among
                            the youth and empower them as the continent’s future leaders, to enable them to forge a new
                            pathway for themselves and others.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section id="our-values" class="mission-vision">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-6 border-right">
                    <div class="vision-content">
                        <div class="mission-vision-icon">
                            <img src="{{ asset('img/vision.png') }}" alt="Our Vision">
                        </div>
                        <h2 class="headings">Our Vision</h2>
                        <p>
                            An integrated, independent and fruitful Africa, emboldened and empowered to chart unique
                            pathways to her highest potential.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 mission-border-right">
                    <div class="vision-content">
                        <div class="mission-vision-icon">
                            <img src="{{ asset('img/mission.png') }}" alt="Our Mission">
                        </div>
                        <h2 class="headings">Our Mission</h2>
                        <p>
                            Activating 30 million jobs in the African Green Economy by 2033 by catalysing an alternative
                            economic culture
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div>
        <div class="row text-center">
            <div class="col-lg-12 text-center">
                <div class="section-title mt-5">
                    <h2 class="headings">Our Values</h2>
                    <p class="mb-3">
                        We believe that the best way to achieve our goals is through the power of the people. Harnessing the
                        power of collaboration to achieve our goals
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="our-values-box">
                    <div class="our-values-icon">
                        <img src="{{ asset('img/africa.png') }}" alt="Africa">
                    </div>
                    <h4 class="">Authentically African</h4>
                    <p class="">
                        We embody the essence of Africa and are passionately steering the
                        continent towards her destiny through innovative, ingenious and transformative solutions.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 bl-movil-view">
                <div class="our-values-box">
                    <div class="our-values-icon">
                        <img src="{{ asset('img/hand.png') }}" alt="Hand Raised">
                    </div>
                    <h4>Boldness</h4>
                    <p>
                        We are boldly unapologetic about the potential and possibilities of Africa and the
                        potency of her youth as agents of change towards an integrated, independent and fruitful
                        continent.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ">
                <div class="our-values-box">
                    <div class="our-values-icon">
                        <img src="{{ asset('img/diversity.png') }}" alt="Diversity">
                    </div>
                    <h4>Diversity</h4>
                    <p>
                        This is our home and we believe that a diversity of voices at the table can bring
                        about the transformative solutions that Africa requires.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ">
                <div class="our-values-box">
                    <div class="our-values-icon">
                        <img src="{{ asset('img/together.png') }}" alt="Umoja">
                    </div>
                    <h4>Umoja</h4>
                    <p>
                        Our approach towards building an integrated Africa and the solutions we exemplify
                        reflect African attributes of community-building, passion and unity in thought and action.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="banner-pattern"></div>
    <div class="our-pillars-grid-carousel-container">
        <div class="row g-0 bg-pillars">
            <div class="col-md-3 col-lg-3 layer-counter text-center">
                <div class="our-pillars">
                    <h2 class="text-white text-bold">What We Do</h2>
                </div>
            </div>
            <div class="col-md-9 col-lg-9 carousel-layer">
                <div class="pillars-carousel slider">
                    @foreach ($whatWeDo as $whatWeDo)
                        <div class="slide">
                            <a href="{{ route('we.do.sector', $whatWeDo->slug) }}">
                                <div class="our-pillars-grid-layer">
                                    <figure class="gl-thumbnail">
                                        @if ($whatWeDo->content_photo)
                                            <img src="{{ $whatWeDo->content_photo->getUrl() }}"
                                                alt="{{ $whatWeDo->title ?? '' }}">
                                        @endif
                                    </figure>
                                    <div class="gl-caption">
                                        <h2>{{ $whatWeDo->title ?? '' }}</h2>
                                        <p>{!! Str::limit($whatWeDo->description, 50) !!}</p>
                                    </div>
                                    <div class="gl-overlay"></div>
                                </div>
                            </a>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
    <section class="news-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center p-4">
                    <h2>Latest News & Development | <a class="main-color" href="{{ route('videos') }}">Videos</a></h2>
                    <div class="headings-under-line"></div>
                </div>
                <div class="col-lg-7 left-news-section">
                    <div class="slide">
                        <a href="#">
                            <div class="our-pillars-grid-layer">
                                <figure class="gl-thumbnail">
                                    <img src="{{ asset('img/grassroots.jpg') }}" alt="Kenya Grassroots conversation">
                                </figure>
                                <div class="gl-caption">
                                    <p><span class="badge bg-info">Kenya Grassroots conversation</span><span
                                            class="date-time"><i class="fa fa-clock-o"></i> 15th & 16th July, 2022</span>
                                    </p>
                                    <h2>
                                        120 young people passionate about climate change. An exciting and engaging 2 day
                                        event of peer learning and identifying opportunities in the African Green Economy.
                                    </h2>
                                </div>
                                <div class="gl-overlay"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 right-news-section">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="slide">
                                <a href="#">
                                    <div class="our-pillars-grid-layer">
                                        <figure class="gl-thumbnail">
                                            <img src="{{ asset('img/national-youth.jpeg') }}"
                                                alt="Kenya's first National Youth Dialogue on the Elections">
                                        </figure>
                                        <div class="gl-caption">
                                            <p><span class="badge bg-info">Kenya's first National Youth Dialogue on the
                                                    Elections</span><span class="date-time"><i class="fa fa-clock-o"></i>
                                                    June 30th 2022</span>
                                            </p>
                                            <h2>
                                                1500 youth from various parts of the country. Formation of the Kenya youth
                                                Charter 2022
                                            </h2>
                                        </div>
                                        <div class="gl-overlay"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="slide">
                                <a href="#">
                                    <div class="our-pillars-grid-layer">
                                        <figure class="gl-thumbnail">
                                            <img src="{{ asset('img/green.jpg') }}"
                                                alt="First ever baseline survey on youth attitudes on climate change in Kenya">
                                        </figure>
                                        <div class="gl-caption">
                                            <p><span class="badge bg-info">First ever baseline survey on youth attitudes on
                                                    climate change in Kenya </span><span class="date-time"><i
                                                        class="fa fa-clock-o"></i> July 2022</span>
                                            </p>
                                            <h2>7 more countries to be surveyed by the end of 2022</h2>
                                        </div>
                                        <div class="gl-overlay"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 left-news-section">
                    <div class="slide">
                        <a href="#">
                            <div class="our-pillars-grid-layer">
                                <figure class="gl-thumbnail">
                                    <img src="{{ asset('img/bilha.jpg') }}"
                                        alt="Bilha Ndirangu speaks at the London Climate Week.">
                                </figure>
                                <div class="gl-caption">
                                    {{-- <p><span class="badge bg-info">Bilha Ndirangu speaks at the London Climate Week.</span> --}}
                                    </p>
                                    <h2>
                                        She represented the initial findings of the survey and her ambitious plans to
                                        activate 30 Million jobs in the African Green Economy in Kenya.
                                    </h2>
                                </div>
                                <div class="gl-overlay"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 right-news-section">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="slide">
                                <a href="#">
                                    <div class="our-pillars-grid-layer">
                                        <figure class="gl-thumbnail">
                                            <img src="{{ asset('img/class.png') }}"
                                                alt="Jacobs Ladder co-founder selected as part of the 2022 Tutu Fellows Cohort.">
                                        </figure>
                                        <div class="gl-caption">
                                            <p><span class="badge bg-info">Bilha Ndirangu</span></p>
                                            <h2>Jacob's Ladder co-founder selected as part of the 2022 Tutu Fellows Cohort.
                                            </h2>
                                        </div>
                                        <div class="gl-overlay"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="slide">
                                <a href="#">
                                    <div class="our-pillars-grid-layer">
                                        <figure class="gl-thumbnail">
                                            <img src="{{ asset('img/new-news.png') }}"
                                                alt="Bilha Ndirangu shares the Jabobs Ladder 30M Green Jobs by 2033 with CNBC">
                                        </figure>
                                        <div class="gl-caption">
                                            <h2>Bilha Ndirangu shares the Jacob’s Ladder’s objective of 30m Green Jobs by
                                                2033 with CNBC
                                            </h2>
                                        </div>
                                        <div class="gl-overlay"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 right-news-section">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="slide">
                                <a href="#">
                                    <div class="our-pillars-grid-layer">
                                        <figure class="gl-thumbnail">
                                            <img src="{{ asset('img/Bilha photo-News.jpeg') }}"
                                                alt="Jacobs Ladder co-founder selected as part of the 2022 Tutu Fellows Cohort.">
                                        </figure>
                                        <div class="gl-caption">
                                            <p><span class="badge bg-info">Bilha Ndirangu</span></p>
                                            <h2>
                                                Bilha Ndirangu speaks at the London Climate week
                                            </h2>
                                        </div>
                                        <div class="gl-overlay"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="banner-pattern"></div>
@endsection
