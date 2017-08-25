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
                    <span><u>Presentation</u></span>
                </div>
                <div>
                    <span class="title-presentation">Facultes/Departements/Services</span>
                    <span><a href="#"><br>Faculte d'informatique</a></span>
                    <span class="title-presentation"><br>Entites de recherche</span>
                    <span><a href="#"><br>Centre de Recherche Information, Droit et Societe (CRIDS)</a>
                            <a href="#"><br>Research Center on Information Systems Engineering (PReCISE)</a> - <a
                                href="#" style="color: blue"> Professeur, Directeur IS </a><a href="#"><br>Chaire e-Gouvernement (EGov)</a></span>
                    <span class="title-presentation"><br>Organes</span>
                    <span><a href="#"><br>Conseil du corps academique (COACA)</a><a href="#"><br>Bureau de la Faculte d'informatique</a><a
                                href=""><br>Conseil de faculte Informatique</a></span>
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
                                <img class="float-right" src="{{ asset('img/frontend/beta/homepage/brand-arrow-right.png') }}" />
                            </a>
                        </div>
                        <div class="border-bottom">
                            <u>
                                <a href="{{ asset('staff_detial-presentation') }}">
                                    <span style="color:#205192 ">Presentation</span>
                                    <img class="float-right" src="{{ asset('img/frontend/beta/homepage/brand-arrow-right.png') }}" />
                                </a>
                            </u>
                        </div>
                        <div class="border-bottom">
                            <a href="{{ asset('staff_detial-project_to_research') }}">
                                <span>Project to Research</span>
                                <img class="float-right" src="{{ asset('img/frontend/beta/homepage/brand-arrow-right.png') }}" />
                            </a>
                        </div>
                        <div class="border-bottom">
                            <a href="{{ asset('staff_detial-publications') }}">
                                <span>Publications</span>
                                <img class="float-right" src="{{ asset('img/frontend/beta/homepage/brand-arrow-right.png') }}" />
                            </a>
                        </div>
                        <div class="border-bottom">
                            <a href="{{ asset('staff_detial-activite') }}">
                                <span>Activite</span>
                                <img class="float-right" src="{{ asset('img/frontend/beta/homepage/brand-arrow-right.png') }}" />
                            </a>
                        </div>
                        <div style="padding: 5px 5px 0px 5px">
                            <a href="{{ asset('staff_detial-course') }}">
                                <span>Course</span>
                                <img class="float-right" src="{{ asset('img/frontend/beta/homepage/brand-arrow-right.png') }}" />
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