 <header>
     <!-- top header -->
     <div class="top-header">
         <div class="d-flex justify-content-between">
             <div class="header-left bg-gold-color">
                 <p><strong>Phone:</strong> +254 757 917 741</p>
                 <div class="ht-right-social">
                     <a href="https://www.facebook.com/JacobsLadderAfrica/" target="_blank"><i
                             class="fa fa-facebook"></i></a>
                 </div>
                 <div class="ht-right-social">
                     <a href="#"><i class="fa fa-twitter"></i></a>
                 </div>
                 <div class="ht-right-social">
                     <a href="https://www.linkedin.com/company/jacob-s-ladder-africa/" target="_blank"><i class="fa fa-linkedin"></i></a>
                 </div>
                 <div class="ht-right-social">
                     <a href="#"><i class="fa fa-instagram"></i></a>
                 </div>
             </div>
             <div class="header-right bg-image">
                 <!-- <div class="ht-right-social">
                    <a href="#"><i class="fa fa-twitter"></i></a>
                </div>
                <div class="ht-right-social">
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                </div>
                <div class="ht-right-social">
                    <a href="#"><i class="fa fa-instagram"></i></a>
                </div> -->
             </div>
         </div>
     </div>
     <div class="main-nav" id="navbar">
         <div class="container">
             <nav id="navbarmain" class="navigation">
                 <div class="nav-header">
                     <a class="nav-logo" href="{{ route('index.home') }}">
                         <img src="{{ asset('img/logo.png') }}" class="white-logo" alt="Logo">
                     </a>
                     <div class="nav-toggle"></div>
                 </div>
                 <div class="nav-menus-wrapper">
                     <ul class="nav-menu align-to-right text-uppercase">
                         <li><a href="{{ route('index.home') }}">HOME</a>
                         </li>
                         <li><a href="#">Who we are</a>
                             <ul class="nav-dropdown">
                                 <li><a href="{{ route('index.home') }}#mission-vision">Our Vision</a></li>
                                 <li><a href="{{ route('index.home') }}#mission-vision">Our Mission</a></li>
                                 <li><a href="{{ route('index.home') }}#our-values">Our Values</a></li>
                                 {{-- <li><a href="{{ route('about.us') }}">About us</a></li> --}}
                                 <li><a href="{{ route('team') }}">Our team</a></li>
                             </ul>
                         </li>
                         <li><a href="{{ route('we.do') }}">What we do</a>
                             <ul class="nav-dropdown">
                                 @foreach (App\Models\WhatWeDo::all() as $item)
                                     <li>
                                         <a href="{{ route('we.do.sector', $item->slug) }}">{{ $item->title ?? '' }}</a>
                                     </li>
                                 @endforeach
                                 {{-- <li><a href="{{ route('climate.change') }}">Climate Change</a></li>
                                 <li><a href="{{ route('leadership.governance') }}">Leadership &amp; Governance</a>
                                 </li>
                                 <li><a href="{{ route('education') }}">Education</a></li>
                                 <li><a href="{{ route('economic.empowerment') }}">Economic Empowerment</a></li>
                                 <li><a href="{{ route('innovation.technology') }}">Innovation &amp; Technology</a>
                                 </li> --}}
                             </ul>
                         </li>
                         <li>
                            <a href="{{ route('blogs') }}">Blogs</a>
                         </li>
                         <li>
                            <a href="{{ route('careers') }}">Careers</a>
                         </li>
                         <li><a href="{{ route('contact.us') }}">CONTACT us</a>
                         </li>
                         <li>
                             <a href="{{ route('register.now') }}" class="btn-register-now">join the movement</a>
                         </li>
                     </ul>
                 </div>
             </nav>
         </div>
     </div>

 </header>
