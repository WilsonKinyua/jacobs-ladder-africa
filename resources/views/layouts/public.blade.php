<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Jacob’s Ladder Africa" />
    <title>
        @hasSection('title')
        Jacob’s Ladder Africa @yield('title')
        @else
            Jacob's Ladder Africa
        @endif
    </title>

    <!-- META TAGS -->
    <meta name="description"
        content="Jacob’s Ladder Africa is a sustainable development hub that advances the agenda of youth in Africa towards self-reliance and productivity. We seek to alleviate the current state of insufficiency among the youth and empower them as the continent’s future leaders, to enable them to forge a new pathway for themselves and others.">
    <meta name="keywords"
        content="Jacob’s Ladder Africa, Africa, youth in Africa, Climate Change, Education, Leadership & Governance, Economic Empowerment, Innovation & Technology">
    <meta name="title" content="Jacob’s Ladder Africa">

    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ Request::url() }}">
    <meta property="og:title" content="Jacob’s Ladder Africa">
    <meta property="og:description"
        content="Jacob’s Ladder Africa is a sustainable development hub that advances the agenda of youth in Africa towards self-reliance and productivity. We seek to alleviate the current state of insufficiency among the youth and empower them as the continent’s future leaders, to enable them to forge a new pathway for themselves and others.">
    <meta property="og:image" content="{{ asset('img/logo.png') }}">

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ Request::url() }}">
    <meta property="twitter:title" content="Jacob’s Ladder Africa">
    <meta property="twitter:description"
        content="Jacob’s Ladder Africa is a sustainable development hub that advances the agenda of youth in Africa towards self-reliance and productivity. We seek to alleviate the current state of insufficiency among the youth and empower them as the continent’s future leaders, to enable them to forge a new pathway for themselves and others.">
    <meta property="twitter:image" content="{{ asset('img/logo.png') }}">

    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('img/site.webmanifest') }}">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <!-- font awesome -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- main style -->
    <link rel="stylesheet" href="{{ asset('css/navigation.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.min.css') }}">
    <!-- owl carousel -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
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
                        <h3 class="text-white"><i class="fa fa-home"></i> Our address</h3>
                        <p>
                            Consumate Court, Ole Odume Road,
                            P O Box. 22429 - 00100,
                            Nairobi, Kenya
                        </p>
                        <h3 class="text-white"><i class="fa fa-envelope"></i> Have any questions?</h3>
                        <p><a class="main-color" href="mailto:info@jacobsladder.africa">info@jacobsladder.africa</a></p>
                        <h3 class="text-white"><i class="fa fa-phone"></i> Call us</h3>
                        <p><a class="main-color">+254 730 116 606 | +254 730 116 325</a></p>
                    </div>
                </div>
            </div>
            <hr class="divider">
            <div class="footer-bottom">
                <div class="fb-copyright">
                    <p>© 2022 Jacob’s Ladder Africa | All Rights Reserved</p>
                </div>
                <div class="fb-social">
                    <div class="span-fb-social"><a href="#"><i class="fa fa-twitter"></i></a></div>
                    <div class="span-fb-social"><a href="#"><i class="fa fa-linkedin"></i></a></div>
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
