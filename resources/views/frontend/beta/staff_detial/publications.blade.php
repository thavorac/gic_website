@extends('frontend.layouts.beta')
@section('after-styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/Staff_Detial/staffdetial.css') }}">
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="title">
                <span>Staff Member</span>
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation asda ullamco laboris quis
                    nostrud exercitation asda ullamco laboris
                </p>
            </div>
        </div>
        <div class="col-md-8 border-right">
            <div class="panel panel-default">
                <div class="border-bottom">
                    <div class="row">
                        <div class="col-md-5 border-right">
                            <img src="{{ asset('img/frontend/beta/homepage/1.png') }}" class="img-responsive"/>
                        </div>
                        <div class="col-md-7">
                            <div class="border-bottom">
                                <div class="Name">
                                    <span>John Doe</span>
                                </div>
                                <div class="contact">
                                    <span class="contact">Web Develop</span>
                                </div>
                            </div>
                            <div class="Name">
                                <span> Contact Information</span>
                            </div>
                            <div class="contact">
                                <span>(855)23 880 370</span>
                                <a href="https://gmail.com">
                                    <h4>John.Doe@gmail.com</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="title-detial">
                    <span><u>Publications</u></span>
                </div>
                <div class="2017">
                    <span class="title-year">2017</span>
                    <span><a href="#"><br>Model-Driven Approach for Privacy Management in Business Ecosystem </a>- <a href="#">Feltus, C.</a>, Grandry, E.,<a href="#">Kupper, T.</a> & <a
                                href="#">Colin, J-N.</a><span class="italic">5th International Conference on Model-Driven Engineering and Software Development: MODELSWARD 2017.</span></span>
                </div>
                <div class="2016">
                    <span class="title-year">2016</span>
                    <span><a href="#"><br>Du secret a la confiance... quelques elements de cryptographie</a>-<a
                                href="#">Colin, J-N.</a><span class="italic"> L'identification electronique et les services de confiance depuis le reglement eIDAS.
                            </span>Larcier , Vol 39, p. 7-28 1. (Collection du CRIDS; Vol 39)</span>
                </div>
                <div class="2015">
                    <span class="title-year">2015</span>
                    <span>
                        <a href="#"><br>The School IT Administrator Analysing the profile, role and training needs of network administrators in Europe's schools</a> - <a
                                href="#">Colin, J-N.</a>European Schoolnet. 88 p.<a href="#">The iTEC technical artefacts, architecture and educational cloud</a> - Van Assche, F., Anido-Rifon, L.,<a
                                href="#">Colin, J. N.</a>, Griffiths, D. & Simon, B.<span class="italic">Re-engineering the Uptake of ICT in Schools.</span>Van Assche, F., Griffiths, D.,
                            Mc Nicol, S., Anido-Rifon, L. & Lewin, C. (eds.). Springer International Publishing Switzerland 2014, p. 59-78 20 p. Chapter 4 <a href="#">The iTEC Eduteka</a> -
                            Anido, L., van Assche, F.,<a href="#">Colin, J. N.</a>, Ellis, W., Griffiths, D. & Simon, B. Dans : Intelligent Systems Reference Library. 84, p. 115-135 21 p.
                            <a href="#">Protecting Personal Data: Access Control for Privacy Preserving Perimeter Protection System </a>- <a href="#">Rath, T. M. A.</a> & <a href="#">Colin, J. N.
                            </a><span class="italic">Lecture Notes in Computer Science (including subseries Lecture Notes in Artificial Intelligence and Lecture Notes in Bioinformatics).</span>
                    </span>
                </div>
                <div class="2014">
                    <span class="title">2014</span>
                    <span><a href="#"><br>Modeling and Expressing Purpose Validation Policy for Privacy-aware Usage Control in Distributed Environment </a>-<a href="#"> Rath, T. M. A. </a>&
                        <a href="#"> Colin, J-N. </a>8 p. <a href="#">Authentication and authorisation for widget-based applications in a loosely-coupled web eLearning environment - Colin, J-N.</a>
                        & <a href="#"></a>Hoang, M. T. <span class="italic">Proceedings of the 10th International Conference on Web Information Systems and Technologies (WEBIST 2014).</span>
                        </span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="carousel slide" id="myCarousel">
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-sm-3">
                                    <div class="thumbnail">
                                        <a href="#"><img src="{{ asset('img/frontend/beta/homepage/1.png') }}" class="img-responsive"></a>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="thumbnail">
                                        <a href="#"><img src="{{ asset('img/frontend/beta/homepage/1.png') }}" class="img-responsive"></a>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="thumbnail">
                                        <a href="#"><img src="{{ asset('img/frontend/beta/homepage/1.png') }}" class="img-responsive"></a>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="thumbnail">
                                        <a href="#"><img src="{{ asset('img/frontend/beta/homepage/1.png') }}" class="img-responsive"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-3">
                                    <div class="thumbnail">
                                        <a href="#"><img src="{{ asset('img/frontend/beta/homepage/2.png') }}" class="img-responsive"></a>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="thumbnail">
                                        <a href="#"><img src="{{ asset('img/frontend/beta/homepage/2.png') }}" class="img-responsive"></a>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="thumbnail">
                                        <a href="#"><img src="{{ asset('img/frontend/beta/homepage/2.png') }}" class="img-responsive"></a>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="thumbnail">
                                        <a href="#"><img src="{{ asset('img/frontend/beta/homepage/2.png') }}" class="img-responsive"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-3">
                                    <div class="thumbnail">
                                        <a href="#"><img src="{{ asset('img/frontend/beta/homepage/4.png') }}" class="img-responsive"></a>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="thumbnail">
                                        <a href="#"><img src="{{ asset('img/frontend/beta/homepage/4.png') }}" class="img-responsive"></a>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="thumbnail">
                                        <a href="#"><img src="{{ asset('img/frontend/beta/homepage/4.png') }}" class="img-responsive"></a>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="thumbnail">
                                        <a href="#"><img src="{{ asset('img/frontend/beta/homepage/4.png') }}" class="img-responsive"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-3">
                                    <div class="thumbnail">
                                        <a href="#"><img src="{{ asset('img/frontend/beta/homepage/4.png') }}" class="img-responsive"></a>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="thumbnail">
                                        <a href="#"><img src="{{ asset('img/frontend/beta/homepage/4.png') }}" class="img-responsive"></a>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="thumbnail">
                                        <a href="#"><img src="{{ asset('img/frontend/beta/homepage/4.png') }}" class="img-responsive"></a>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="thumbnail">
                                        <a href="#"><img src="{{ asset('img/frontend/beta/homepage/4.png') }}" class="img-responsive"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <nav>
                            <ul>
                                <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                                <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="direct border" style="border-top: 4px solid #192f46">
                        <div class="border-bottom">
                            <a href="{{ asset('staff_detial-introduct') }}">
                                <span>Introduct</span>
                                <img class="float-right" src="{{ asset('img/frontend/beta/homepage/brand-arrow-right.png') }}"/>
                            </a>
                        </div>
                        <div class="border-bottom">
                            <a href="{{ asset('staff_detial-presentation') }}">
                                <span>Presentation</span>
                                <img class="float-right" src="{{ asset('img/frontend/beta/homepage/brand-arrow-right.png') }}"/>
                            </a>
                        </div>
                        <div class="border-bottom">
                            <a href="{{ asset('staff_detial-project_to_research') }}">
                                <span>Project to Research</span>
                                <img class="float-right" src="{{ asset('img/frontend/beta/homepage/brand-arrow-right.png') }}"/>
                            </a>
                        </div>
                        <div class="border-bottom">
                            <u>
                                <a href="{{ asset('staff_detial-publication') }}">
                                    <span style="color:#205192 ">Publications</span>
                                    <img class="float-right" src="{{ asset('img/frontend/beta/homepage/brand-arrow-right.png') }}"/>
                                </a>
                            </u>
                        </div>
                        <div class="border-bottom">
                            <a href="{{ asset('staff_detial-activite') }}">
                                <span>Activite</span>
                                <img class="float-right" src="{{ asset('img/frontend/beta/homepage/brand-arrow-right.png') }}"/>
                            </a>
                        </div>
                        <div style="padding: 5px 5px 0px 5px">
                            <a href="{{ asset('staff_detial-course') }}">
                                <span>Course</span>
                                <img class="float-right" src="{{ asset('img/frontend/beta/homepage/brand-arrow-right.png') }}"/>
                            </a>
                        </div>
                    </div>
                    <div class="border" style="margin-top: 30px; border-top: 4px solid #192f46">
                        <span class="title-Hours">BUSINESS HOURS</span>
                        <span class="day"><br>Monday-Friday</span>
                        <span>: 10am to 8pm</span>
                        <span class="day"><br>Saturday</span>
                        <span>: 11am to 3pm</span>
                        <span class="day"><br>Sunday</span>
                        <span>: closed</span>
                    </div>
                    <div class="border" style="margin-top: 30px; border-top: 4px solid #192f46">
                        <span class="locat-title">OUR LOCATION</span>
                        <div id="googleMap" style="width:100%;height:250px;"></div>
                        <script>
                            function myMap() {
                                var ITC = {lat: 11.5703858, lng: 104.8982137};
                                var mapProp= {
                                    center:new google.maps.LatLng(11.5703858, 104.8982137),
                                    zoom:16,
                                };
                                var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

                                var marker = new google.maps.Marker({
                                    position: ITC,
                                    map: map
                                });
                            }
                        </script>
                        <span class="locat-body">Lid est laborum dolo</span>
                        <span><br>12345 Main Street, New York, NY 02781</span>
                        <span><br>Phone: 1.800.555.6789</span>
                        <span><br>Web: www.yoursite.com</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
@section('after-scripts')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmKjaBjdwr4NQ7rdppSaHSjyZJTgBrGWo&callback=myMap"></script>
@endsection