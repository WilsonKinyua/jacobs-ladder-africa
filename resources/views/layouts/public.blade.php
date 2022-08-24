<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Jacob’s Ladder Africa" />
    <title>
        @if (View::hasSection('title'))
            {{ trans('panel.site_title') }}@yield('title')
        @else
            Jacob’s Ladder Africa
        @endif
    </title>
    <meta name="keywords" content="@if (View::hasSection('keywords')) @yield('keywords')@else keywords here 😄 @endif" />
    <meta name="title"
        content="@if (View::hasSection('title')) {{ trans('panel.site_title') }}@yield('title')@else Jacob’s Ladder Africa @endif">
    <meta name="description"
        content="@if (View::hasSection('description')) @yield('description')@else Jacob’s Ladder Africa is a sustainable development hub that advances the agenda of youth in Africa towards self-reliance and productivity. @endif">

    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ Request::url() }}">
    <meta property="og:title"
        content="@if (View::hasSection('title')) {{ trans('panel.site_title') }}@yield('title')@else Jacob’s Ladder Africa @endif">
    <meta property="og:description"
        content="@if (View::hasSection('description')) @yield('description')@else Jacob’s Ladder Africa is a sustainable development hub that advances the agenda of youth in Africa towards self-reliance and productivity. @endif">
    <meta property="og:image" content="{{ asset('img/logo.png') }}">

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ Request::url() }}">
    <meta property="twitter:title"
        content="@if (View::hasSection('title')) {{ trans('panel.site_title') }}@yield('title')@else Jacob’s Ladder Africa @endif">
    <meta property="twitter:description"
        content="@if (View::hasSection('description')) @yield('description')@else Jacob’s Ladder Africa is a sustainable development hub that advances the agenda of youth in Africa towards self-reliance and productivity. @endif">
    <meta property="twitter:image" content="{{ asset('img/logo.png') }}">

    <link rel="icon" type="image/png" href="{{ asset('img/favicon.ico') }}" />

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/main.min.css') }}">
    <!-- Google tag (gtag.js) -->
    {{-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-PQGSC2FKD3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-PQGSC2FKD3');
    </script> --}}
</head>

<body>

    @include('partials.header')


    @yield('content')


    <!-- footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row g-0">
                        <div class="col-lg-2">
                            <div class="footer-logo">
                                <img src="{{ asset('img/logo.png') }}" alt="Logo">
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <p>
                                Jacob’s Ladder Africa is a sustainable development hub that advances the agenda of youth
                                in Africa towards self-reliance and productivity. We seek to alleviate the current state
                                of insufficiency among the youth and empower them as the continent’s future leaders, to
                                enable them to forge a new pathway for themselves and others.
                            </p>
                            <a href="{{ route('about.us') }}" class="text-white">Read more <i
                                    class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-4">
                        <h3 class="text-white">Geographical Scope</h3>
                        <img src="{{ asset('img/map.png') }}" alt="" class="geo">
                        <!-- <h3 class="text-white mt-4">Twitter Feeds</h3>
                        <div class="twitter-feed">
                            <a class="twitter-timeline" data-theme="dark"
                                href="https://twitter.com/NEWMARKWORLD?ref_src=twsrc%5Etfw">Tweets
                                by NEWMARKWORLD</a>
                            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        </div> -->
                    </div>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-5">
                        {{-- <h3 class="text-white"><i class="fa fa-home"></i> Our address</h3>
                        <p>
                            Consumate Court, Ole Odume Road,
                            P O Box. 22429 - 00100,
                            Nairobi, Kenya
                        </p> --}}
                        <h3 class="text-white"><i class="fa fa-envelope"></i> Have any questions?</h3>
                        <p><a class="main-color" href="mailto:info@jacobsladder.africa">info@jacobsladder.africa</a>
                        </p>
                        <h3 class="text-white"><i class="fa fa-phone"></i> Call us</h3>
                        <p><a class="main-color">+254 757 917 741</a></p>
                    </div>
                </div>
            </div>
            <hr class="divider">
            <div class="footer-bottom">
                <div class="fb-copyright">
                    <p>© 2022 Jacob’s Ladder Africa | All Rights Reserved</p>
                </div>
                <div class="fb-social">
                    <div class="span-fb-social"><a href="https://www.facebook.com/JacobsLadderAfrica/"><i
                                class="fa fa-facebook"></i></a></div>
                    <div class="span-fb-social"><a href="#"><i class="fa fa-twitter"></i></a></div>
                    <div class="span-fb-social"><a href="https://www.linkedin.com/company/jacob-s-ladder-africa/"
                            target="_blank"><i class="fa fa-linkedin"></i></a></div>
                    <div class="span-fb-social last-box"><a href="#"><i class="fa fa-instagram"></i></a></div>
                </div>
            </div>
        </div>
    </footer>
    <!-- FOOTER -->
    <!-- jquery -->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <!-- bootstrap -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <!-- owl carousel -->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('js/main.js') }}"></script>
    <!-- navigation.js -->
    <script src="{{ asset('js/navigation.js') }}"></script>
    @yield('scripts')
</body>

</html>
