@extends('layouts.public')
@section('title')
    - Our Team
@endsection
@section('content')
    <div class="push-top-header">
        <div class="sections" style="background-image: url({{ asset('img/red.jpg') }});">
            <div class="container">
                <div class="pages-title">
                    <h1>Jacob's Ladder Africa <br> <span>The Leadership team</span></h1>
                    <p><a href="{{ route('index.home') }}">Home</a> &nbsp; > &nbsp; <a class="active"
                            href="{{ route('team') }}">The Leadership team</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <section class="mt-5">
        <div class="container">
            <div class="row g-0 text-center">
                <div class="col-md-6 col-lg-6 mb-5">
                    <div class="team-portrait" data-bs-toggle="modal" data-bs-target="#SellahBogonko">
                        <figure class="tp-headshot">
                            <img src="{{ asset('img/avatar.png') }}" alt="Sellah">
                        </figure>
                        <div class="tp-caption">
                            <div class="inner-tp-caption">
                                <div class="team-intro">
                                    <h3>Sellah Bogonko, HSC</h3>
                                    <p>
                                        CEO & Co-founder Jacob’s Ladder Africa
                                    </p>
                                </div>
                                <hr>
                                <div class="team-intro-caption">
                                    <p>
                                        There are two approaches to life: one in which one lives addressing and
                                        confronting
                                        situations as they happen, and the other is to approach life with an
                                        understanding
                                        of one’s identity and where this fits in relation to the developments,
                                        circumstances
                                        and situations that one encounters. The latter describes the approach that
                                        Sellah
                                        Bogonko lives by- as she is one given to changing the status quo wherever she
                                        finds
                                        herself.
                                        <br> <a class="main-color">Read more <i class="fa fa-arrow-right"></i>
                                        </a>
                                    </p>
                                </div>
                                <hr>
                                <div class="tp-social d-flex justify-content-center">
                                    <div class="social-icon">
                                        <p><a target="_blank" href="https://twitter.com/Sellahb"><i
                                                    class="fa fa-twitter"></i></a></p>
                                    </div>
                                    <div class="social-icon">
                                        <p><a target="_blank"
                                                href="https://www.linkedin.com/in/sellah-bogonko-hsc-85579725/"><i
                                                    class="fa fa-linkedin"></i></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 mb-5">
                    <div class="team-portrait" data-bs-toggle="modal" data-bs-target="#BilhaNdiranguModal">
                        <figure class="tp-headshot">
                            <img src="{{ asset('img/avatar.png') }}" alt="Bilha Ndirangu">
                        </figure>
                        <div class="tp-caption">
                            <div class="inner-tp-caption">
                                <div class="team-intro">
                                    <h3>Bilha Ndirangu</h3>
                                    <p><small>Co-founder Jacob’s Ladder Africa</small></p>
                                </div>
                                <hr>
                                <div class="team-intro-caption">
                                    <p>
                                        Bilha Ndirangu is the co-founder of Jacob’s Ladder Africa.
                                        <br>
                                        Bilha’s achievements and leadership track record in building creative solutions
                                        to
                                        Africa’s challenges has been recognised, as she is to be named a Tutu Fellow by
                                        the
                                        Africa Leadership Institute.
                                        <br> <a class="main-color">Read more <i class="fa fa-arrow-right"></i>
                                        </a>
                                    </p>
                                </div>
                                <hr>
                                <div class="tp-social d-flex justify-content-center">
                                    <div class="social-icon">
                                        <p><a target="_blank" href="https://twitter.com/bilha_ndirangu"><i
                                                    class="fa fa-twitter"></i></a></p>
                                    </div>
                                    <div class="social-icon">
                                        <p><a target="_blank" href="https://www.linkedin.com/in/bilha-ndirangu/"><i
                                                    class="fa fa-linkedin"></i></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Marceline --}}
                <div class="col-md-6 col-lg-6 mb-5">
                    <div class="team-portrait" data-bs-toggle="modal" data-bs-target="#Marceline">
                        <figure class="tp-headshot">
                            <img src="{{ asset('img/avatar.png') }}" alt="Marceline">
                        </figure>
                        <div class="tp-caption">
                            <div class="inner-tp-caption">
                                <div class="team-intro">
                                    <h3>Marceline Obuya</h3>
                                    <p><small>Co-founder Jacob’s Ladder Africa</small></p>
                                </div>
                                <hr>
                                <div class="team-intro-caption">
                                    <p>
                                        Marceline is a rebuilder of businesses. Marceline’s work experience in Africa over
                                        the
                                        past 25 years within the financial sector embodies the proclamation of financial
                                        liberation and ushering of opportunity within Microfinance, SACCO/Cooperatives,
                                        Agriculture, Health, Business Development, and most recently in the FinTech space.
                                        <br> <a class="main-color">Read more <i class="fa fa-arrow-right"></i>
                                        </a>
                                    </p>
                                </div>
                                <hr>
                                <div class="tp-social d-flex justify-content-center">
                                    <div class="social-icon">
                                        <p><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></p>
                                    </div>
                                    <div class="social-icon">
                                        <p><a target="_blank" href="#"><i class="fa fa-linkedin"></i></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- TEAM START -->
    </section>

    <!-- modals -->
    <!-- Bilha Ndirangu Modal -->
    <div class="modal fade" id="BilhaNdiranguModal" tabindex="-1" aria-labelledby="BilhaNdiranguModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-bold" id="BilhaNdiranguModalLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('img/avatar.png') }}" class="team-modal-img rounded-start"
                                    alt="Bilha Ndirangu">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Bilha Ndirangu</h5>
                                    <p>
                                        <strong>
                                            <small class="main-color">
                                                Co-founder Jacob’s Ladder Africa
                                            </small>
                                        </strong>
                                    </p>
                                    <p class="team-desc">
                                        Bilha Ndirangu is the co-founder of Jacob’s Ladder Africa.
                                    </p>
                                    <p class="team-desc">
                                        Bilha’s achievements and leadership track record in building creative solutions
                                        to Africa’s challenges has been recognised, as she is to be named a Tutu Fellow
                                        by the Africa Leadership Institute. She is passionate about training young
                                        people and transforming their minds so they can serve the continent better in
                                        the future. The various roles she has held throughout her career have provided
                                        platforms to not just build strong organisations, but also nurture and raise
                                        gifted young leaders.
                                    </p>
                                    <p class="team-desc">
                                        Prior to joining the African Leadership Academy, Bilha was the CEO of Africa’s
                                        Talking, based in Nairobi, Kenya. Africa’s Talking enables the continent’s
                                        technology ecosystem by empowering software developers. Over seven years, Bilha
                                        expanded Africa’s Talking into 20 markets, with offices in 14 African countries,
                                        with significant revenue growth. During her tenure at Africa’s Talking, Bilha
                                        gained a reputation as an extraordinary executor and team builder. She has been
                                        recognized as an Endeavour Entrepreneur.
                                    </p>
                                    <p class="team-desc">
                                        Bilha previously worked at Dalberg, where she was the first employee of the
                                        consulting firm’s Nairobi office. At Dalberg, she advised governments,
                                        corporations, and foundations across the continent on solutions to African
                                        challenges. She particularly thrived in education projects, including the design
                                        and delivery of Wings to Fly, Kenya’s leading secondary school scholarship
                                        program, with Equity Group and the Mastercard Foundation. To date, Wings to Fly
                                        has enabled over 26,000 promising youth in Kenya to access high-quality
                                        secondary education.
                                    </p>
                                    <p class="team-desc">
                                        Bilha holds a Bachelor of Science in Electrical Engineering and a minor in
                                        Economics from the Massachusetts Institute of Technology. Before returning to
                                        Africa, she worked with the Mitchell Madison Group in New York City. When she is
                                        not imagining Africa’s future, you might find Bilha completing a workout at a
                                        local CrossFit gym.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sellah Bogonko modal -->
    <div class="modal fade" id="SellahBogonko" tabindex="-1" aria-labelledby="SellahBogonkoLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-bold" id="SellahBogonkoLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('img/avatar.png') }}" class="team-modal-img rounded-start"
                                    alt="Sellah Bogonko, HSC">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Sellah Bogonko, HSC</h5>
                                    <p class="team-desc">
                                        There are two approaches to life: one in which one lives addressing and
                                        confronting situations as they happen, and the other is to approach life with an
                                        understanding of one’s identity and where this fits in relation to the
                                        developments, circumstances and situations that one encounters. The latter
                                        describes the approach that Sellah Bogonko lives by- as she is one given to
                                        changing the status quo wherever she finds herself.
                                    </p>
                                    <p class="team-desc">
                                        Sellah’s professional journey exemplifies a passion for change and creating
                                        lasting impact.
                                    </p>
                                    <p class="team-desc">
                                        In her role as co-founder of Jacob’s Ladder Africa, a sustainable development
                                        hub that advances the ideals of youth empowerment and self-reliance, she is
                                        responsible for developing the strategic vision that steers the organisation
                                        towards achieving its objectives. These are articulated under the pillars of
                                        Climate Change, Leadership & Governance, Education, Economic Empowerment and
                                        Innovation & Technology.
                                    </p>
                                    <p class="team-desc">
                                        Sellah is also the Founder of Zinduka Kenya, an apolitical platform that gives
                                        agency to Kenyan youth to own their future. She is passionate about causing
                                        young people to see themselves differently and thereby take different steps
                                        towards divesting themselves of limitations and accepting the status quo as the
                                        norm.
                                    </p>
                                    <p class="team-desc">
                                        In her role as Chief of Staff for Kirinyaga County, Sellah drove the
                                        interpretation and implementation of the Governor’s agenda into various projects
                                        that address challenges faced by various societal groups. She is also
                                        experienced in policy formulation, political and development communication.
                                    </p>
                                    <p class="team-desc">
                                        Between 2014 and 2017, Sellah was the Chief Operating Officer of AG Group
                                        International, in which she led the execution of group strategy and
                                        establishment of strategic partnerships. Sellah’s passion for empowering and
                                        developing those she works with shone through in this role, as she undertook the
                                        training of upcoming managers in leadership, entrepreneurship, product
                                        development and more.
                                    </p>
                                    <p class="team-desc">
                                        Sellah’s passion for empowering women is a common thread that runs throughout
                                        her professional journey. In her role as Group Operations Coordinator at
                                        Linksoft Group, she put in place initiatives to increase women in senior
                                        leadership positions, and as Strategy Operations Manager at Mellech Group, she
                                        initiated a management trainee program for young women.
                                    </p>
                                    <p class="team-desc">
                                        Sellah is currently pursuing a Executive Education Course at the Harvard Kennedy
                                        School of Government and is undertaking a Phd in Leadership and Public
                                        Governance from the International Leadership University, following a Msc in
                                        Public Governance from the same institution. Prior to this, she obtained a
                                        Bachelor of Arts Degree in Business & Sociology from Kenyatta University.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Marceline modal --}}
    <div class="modal fade" id="Marceline" tabindex="-1" aria-labelledby="MarcelineLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-bold" id="MarcelineLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('img/avatar.png') }}" class="team-modal-img rounded-start"
                                    alt="Marceline Obuya">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Marceline Obuya</h5>
                                    <p class="team-desc">
                                        Marceline is a rebuilder of businesses. Marceline’s work experience in Africa over
                                        the
                                        past 25 years within the financial sector embodies the proclamation of financial
                                        liberation and ushering of opportunity within Microfinance, SACCO/Cooperatives,
                                        Agriculture, Health, Business Development, and most recently in the FinTech space.
                                    </p>
                                    <p class="team-desc">
                                        Marceline’s mastery of midwifing SMEs to become viable businesses is a showcase of
                                        honor demonstrated by diligence in management, operations, research, training, and
                                        mentoring, which is predicated on her approach to a field that stems from a strong
                                        belief that beauty can raise from ashes which reflect itself in her mentoring
                                        patterns
                                        focusing on, upskilling people in spite of all challenges SMEs face.
                                    </p>
                                    <p class="team-desc">
                                        Marceline’s incubating spirit is clearly manifested in her track record through her
                                        ability
                                        to nurture, restore and prosper both start start-ups and established enterprises.
                                        Under
                                        her stewardship, the viability of the business is brought about by the fact that she
                                        lays
                                        the right foundation. Her craftsmanship is robust and her execution is equal to that
                                        of a
                                        warrior in the identification of the specific need, especially in the various
                                        sectors of
                                        development of adaptive strategies for channeling finance to priority sectors,
                                        working
                                        with multi- laterals, private sector, and financial institutions.
                                    </p>
                                    <p class="team-desc">
                                        Passionate about Africa and SMEs, Marceline’s eagle eye is focused on business
                                        levers like strategic planning, human resource management, operational, technical,
                                        and financial support. As an experienced consultant and advisor in wealth creation
                                        and
                                        agrarian finance, Marceline is the architect and founder of the SME Business Clinic
                                        Ltd, a role that allows her to oversee the company and intimately engage with her
                                        clients, whilst rendering herself the role of a roving CEO for a number of
                                        businesses
                                        within the Clinic.
                                    </p>
                                    <p class="team-desc">
                                        Marceline is a holder of a Master’s degree in Business Administration from
                                        Strathmore
                                        University Business School and a Certificate recipient from IESE Business School in
                                        Spain. She is currently, undertaking a Social Impact course at the University of
                                        Cape
                                        Town. She has managed the Medical Credit Fund in East Africa, a Dutch organization,
                                        where she, later on, went on to take charge of the Kenya country operations and co-
                                        Country Director with PharmAccess Foundation.
                                    </p>
                                    <p class="team-desc">
                                        She has undertaken a number of World Bank/IFC, SIDA, IFAD, FAO, and USAID-
                                        funded consultancy assignments in Kenya, other African countries, and the USA.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
