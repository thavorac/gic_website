@extends('frontend.layouts.beta')
@section('after-styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/department/Department.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend/department/pixel-metro.css') }}">
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <span class="title">About GIC</span>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="sidebar col-md-3">
            <div class="row">
                <div class="col-md-12" style="padding-right: 30px">
                    <div class="border">
                        <div style="list-style-type: none">
                            <div class="collapse navbar-collapse" id="myNavbar">
                                <div>
                                    <span class="title">Department GIC</span>
                                    <hr>
                                    <a href="#vision"><span class="title-sidebar">Vision</span></a>
                                    <hr>
                                    <a href="#goal"><span class="title-sidebar">Goal</span></a>
                                    <hr>
                                    <a href="#mission"><span class="title-sidebar">Mission statement</span></a>
                                    <hr>
                                    <a href="#administration"><span class="title-sidebar">Administration</span></a>
                                    <hr>
                                    <a href="#visit-gic"><span class="title-sidebar">Visit GIC</span></a>
                                    <hr>
                                    <a href="#location"><span class="title-sidebar">Location</span></a>
                                    <hr>
                                    <a href="#history"><span class="title-sidebar">History</span></a>
                                    <hr>
                                    <a href="#achievement"><span class="title-sidebar">Achievement</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="row border-left">
                <div class="col-md-12">
                    <span class="title">DESCRIPTION</span>
                    <hr>
                </div>
                <section>
                    <div class="pixel-metro">
                        <div class="content-metro" size-o="normal">
                            <div class="metro-sheet">
                                <img src="{{ asset('img/frontend/beta/homepage/img01.jpg')}}">
                            </div>
                            <div class="metro-sheet">
                                <img src="{{ asset('img/frontend/beta/homepage/img02.jpg')}}">
                            </div>
                            <div class="metro-sheet">
                                <img src="{{ asset('img/frontend/beta/homepage/img03.jpg')}}">
                            </div>
                        </div>
                        <div class="content-metro" size-o="wide">
                            <div class="metro-sheet">
                                <img src="{{ asset('img/frontend/beta/homepage/img04.jpg')}}">
                            </div>
                            <div class="metro-sheet">
                                <img src="{{ asset('img/frontend/beta/homepage/img05.jpg')}}">
                            </div>
                        </div>
                        <div class="content-metro" size-o="wide">
                            <div class="metro-sheet">
                                <img src="{{ asset('img/frontend/beta/homepage/img34.jpg')}}">
                            </div>
                            <div class="metro-sheet">
                                <img src="{{ asset('img/frontend/beta/homepage/img35.jpg')}}">
                            </div>
                        </div>
                        <div class="content-metro" size-o="small">
                            <div class="metro-sheet">
                                <img src="{{ asset('img/frontend/beta/homepage/img36.jpg')}}">
                            </div>
                            <div class="metro-sheet">
                                <img src="{{ asset('img/frontend/beta/homepage/img37.jpg')}}">
                            </div>
                        </div>
                        <div class="content-metro" size-o="small">
                            <div class="metro-sheet">
                                <img src="{{ asset('img/frontend/beta/homepage/img38.jpg')}}">
                            </div>
                            <div class="metro-sheet">
                                <img src="{{ asset('img/frontend/beta/homepage/img39.jpg')}}">
                            </div>
                        </div>
                        <div class="content-metro" size-o="small">
                            <div class="metro-sheet">
                                <img src="{{ asset('img/frontend/beta/homepage/img40.jpg')}}">
                            </div>
                            <div class="metro-sheet">
                                <img src="{{ asset('img/frontend/beta/homepage/img41.jpg')}}">
                            </div>
                        </div>
                        <div class="content-metro" size-o="small">
                            <div class="metro-sheet">
                                <img src="{{ asset('img/frontend/beta/homepage/img42.jpg')}}">
                            </div>
                            <div class="metro-sheet">
                                <img src="{{ asset('img/frontend/beta/homepage/img43.jpg')}}">
                            </div>
                        </div>
                    </div>

                </section>
                <div class="col-md-12">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris Lorem ipsum dolor sit
                        amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco laboris </p>
                    <div class="vision" id="vision">
                        <div class="border-bottom">
                            <span class="title">VISION</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris </p>
                    </div>
                    <div class="goal" id="goal">
                        <div class="border-bottom">
                            <span class="title">GOALS</span>
                        </div>
                        <p>In order to succeed in transforming the current RUPP into the flagship university of
                            Cambodia, the Mission points are as follows:</p>
                        <ul>
                            <li>Enhance teaching staff and middle-level administrative staff to hold at least master’s
                                degrees with both English and ICT competence.
                            </li>
                            <li>Be an established center for high-quality research and publications.</li>
                            <li>Increase graduate programs and enhance academic freedom.</li>
                            <li>Increase the number of international students in all types of courses.</li>
                            <li>Enhance student and faculty exchange with universities in the ASEAN University Network
                                (AUN) and other partner universities,
                                including services provided to development partners and civil society organizations.
                            </li>
                            <li>Promote integrity and a sense of belonging and ownership among students, faculty and
                                staff.
                            </li>
                            <li>Ensure a safe and sound teaching and learning environment.</li>
                            <li>Provide free information technology (IT) support and internet access to all students and
                                staff.
                            </li>
                            <li>Become a resource center for teaching/learning, research and community service.</li>
                            <li>Mainstream quality assurance and evaluation mechanisms in all departments and
                                programs.
                            </li>
                        </ul>
                    </div>
                    <div class="mission" id="mission">
                        <div class="border-bottom">
                            <span class="title">MISSION STATEMENT</span>
                        </div>
                        <p>In order to succeed in transforming the current RUPP into the flagship university of
                            Cambodia, the Mission points are as follows:</p>
                        <ul>
                            <li>Promote integrity and a sense of belonging and ownership among students, faculty and
                                staff.
                            </li>
                            <li>Ensure a safe and sound teaching and learning environment.</li>
                            <li>Provide free information technology (IT) support and internet access to all students and
                                staff.
                            </li>
                            <li>Become a resource center for teaching/learning, research and community service.</li>
                            <li>Mainstream quality assurance and evaluation mechanisms in all departments and
                                programs.
                            </li>
                        </ul>
                    </div>
                    <div class="administration" id="administration">
                        <div>
                            <span class="title">ADMINISTRATION</span>
                            <hr>
                        </div>
                        <div>
                            <img src="{{ asset('img/frontend/beta/homepage/administration.png') }}" alt="">
                            <hr>
                        </div>
                    </div>
                    <div class="visit-gic" id="visit-gic">
                        <div class="border-bottom">
                            <span class="title">VISIT GIC</span>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{ asset('img/frontend/beta/homepage/6.png') }}" class="img-responsive">
                            </div>
                            <div class="col-md-6">
                                <img src="{{ asset('img/frontend/beta/homepage/6.png') }}" alt="" class="img-responsive">
                            </div>
                        </div>
                        <div class="description">
                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</span>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{ asset('img/frontend/beta/homepage/6.png') }}" class="img-responsive">
                            </div>
                            <div class="col-md-6">
                                <img src="{{ asset('img/frontend/beta/homepage/6.png') }}" alt="" class="img-responsive">
                            </div>
                        </div>
                        <div class="description">
                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</span>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{ asset('img/frontend/beta/homepage/6.png') }}" class="img-responsive">
                            </div>
                            <div class="col-md-6">
                                <img src="{{ asset('img/frontend/beta/homepage/6.png') }}" alt="" class="img-responsive">
                            </div>
                        </div>
                        <div class="description">
                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</span>
                        </div>
                    </div>
                    <div class="location" id="location">
                        <div class="border-bottom">
                            <span class="title">Location</span>
                        </div>
                        <div id="googleMap" style="width:100%;height:400px;"></div>
                        <script>
                            function myMap() {
                                var ITC = {lat: 11.5703858, lng: 104.8982137};
                                var mapProp = {
                                    center: new google.maps.LatLng(11.5703858, 104.8982137),
                                    zoom: 16,
                                };
                                var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

                                var Marker = new google.maps.Marker({
                                    position: ITC,
                                    map: map
                                });
                            }
                        </script>
                    </div>
                    <div class="history" id="history">
                        <div class="border-bottom">
                            <span class="title">HISTORY</span>
                        </div>
                        <p>The Royal University of Phnom Penh (RUPP) is Cambodia's oldest and one of the largest public
                            universities.
                            It hosts more than 12,000 scholarship and full-fee paying students, across a diverse range
                            of undergraduate and postgraduate programs.
                            It is unique in Cambodia for offering specialist degrees in fields including the sciences,
                            humanities and social sciences,
                            as well as professional degrees in fields such as information technology, electronics,
                            psychology, social work, and tourism.
                            RUPP also provides Cambodia's foremost degree-level language programs through the Institute
                            of Foreign Languages.
                            Due to its many achievements, RUPP has full membership of the ASEAN University Network
                            (AUN).</p>

                        <p>RUPP has over 450 full-time staff. All of its 335 academic staff members hold tertiary
                            qualifications, including 15 PhDs and 280 Masters degrees.
                            are supported by over 120 administrative and maintenance staff. In addition, the university
                            maintains links with Cambodian and international NGOs,
                            local and international universities and government ministries. As a result, various
                            international and non-government organizations and government
                            offices regularly contribute adjunct faculty members to help expand RUPP's capacity.</p>

                        <P>RUPP is located on three spacious campuses. The main campus lies roughly five kilometers from
                            the center of Phnom Penh.
                            Adjoining the main campus is the Institute of Foreign Languages, which boasts peaceful
                            landscaping features alongside its modern architecture.
                            Roughly one kilometer further from town lies RUPP Campus II, in which the departments of
                            History, Sociology and Philosophy reside.</p>
                    </div>
                    <div class="achievement" id="achievement">
                        <div class="border-bottom">
                            <span class="title">ACHIEVEMENT</span>
                        </div>
                        <div>
                            <ul>
                                <li>MAT 110 Digital Imaging 1 : Photoshop (3 units)</li>
                                <li>MAT 120 Media Design 1 : Production (3 units)</li>
                                <li>MAT 125 Web Design 1 : Fundamentals (3 units)</li>
                                <li>MAT 135 Graphic Design 1 : Principles (3 units)</li>
                                <li>MAT 120 Media Design 1 : Production (3 units)</li>
                                <li>MAT 125 Web Design 1 : Fundamentals (3 units)</li>
                                <li>MAT 135 Graphic Design 1 : Principles (3 units)</li>
                                <li>MAT 120 Media Design 1 : Production (3 units)</li>
                                <li>MAT 125 Web Design 1 : Fundamentals (3 units)</li>
                                <li>MAT 135 Graphic Design 1 : Principles (3 units)</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('after-scripts')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmKjaBjdwr4NQ7rdppSaHSjyZJTgBrGWo&callback=myMap"></script>
    <script src="{{ asset('js/frontend/department/pixel-metro.js') }}"></script>
    <script type="text/javascript">
        $(".pixel-metro").pixel_metro({
            height: "500px",
            bg_metro: "images/dulieu/bg-metro3.jpg",
            bg_opacity: 0.55,
            metro_rows: 2,
        });
    </script>
@endsection