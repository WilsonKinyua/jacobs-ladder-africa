 <header>
     <!-- top header -->
     <div class="top-header">
         <div class="d-flex justify-content-between">
             <div class="header-left bg-gold-color">
                 <p><strong>Phone:</strong> +254 730 116 325</p>
                 <div class="ht-right-social">
                     <a href="#"><i class="fa fa-twitter"></i></a>
                 </div>
                 <div class="ht-right-social">
                     <a href="#"><i class="fa fa-linkedin"></i></a>
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
                                 <li><a href="{{ route('about.us') }}#mission-vision">Our Vision</a></li>
                                 <li><a href="{{ route('about.us') }}#mission-vision">Our Mission</a></li>
                                 <li><a href="{{ route('index.home') }}#our-values">Our Values</a></li>
                                 <li><a href="{{ route('about.us') }}">About us</a></li>
                                 <li><a href="{{ route('team') }}">Our team</a></li>
                             </ul>
                         </li>
                         <li><a href="{{ route('our.pillars') }}">our Pillars</a>
                             <ul class="nav-dropdown">
                                 <li><a href="{{ route('climate.change') }}">Climate Change</a></li>
                                 <li><a href="{{ route('leadership.governance') }}">Leadership &amp; Governance</a>
                                 </li>
                                 <li><a href="{{ route('education') }}">Education</a></li>
                                 <li><a href="{{ route('economic.empowerment') }}">Economic Empowerment</a></li>
                                 <li><a href="{{ route('innovation.technology') }}">Innovation &amp; Technology</a>
                                 </li>
                             </ul>
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
