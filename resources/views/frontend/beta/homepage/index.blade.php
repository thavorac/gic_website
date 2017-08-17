@extends('frontend.layouts.beta')
@section('after-styles')
    <link rel="stylesheet" type="text/css" href="css/frontend/homepage/home-page-body.css">
@endsection
@section('content')
    <div class="row">
        <div class="col-md-8 col-sm-8 col-xs-12">
            <div class="col-md-12 col-ms-12 col-xs-12" style="border-right: 1px solid #e2e2e2 ; height: auto">
                <div class="title">
                    <span> WELCOME TO ROYAL COLLEGE</span>
                </div>
                <div class="border">
                    <div class="row" style="margin-bottom: 10px">
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <img src="img/frontend/beta/homepage/video_image.jpg" class="img-responsive"/>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <p style="font-size: 16px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean
                                consectetur ante volutpat sem aliquam lobortis. Mauris porta fermentum volutpat. Praesent
                                est sapien, tincidunt vel arcu vitae, mattis sollicitudin lectus. Mauris porta fermentum
                                volutpat. Praesent est sapien, tincidunt vel arcu vitae, mattis sollicitudin lectus.</p>
                            <button class="button">LEARN MORE</button>
                        </div>
                    </div>
                </div>
                <div class="border">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 title">
                            <span>RECENT NEWS</span>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 margin">
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <img src="img/frontend/beta/homepage/related_thumb_01.png" class="img-responsive"/>
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <div>
                                        <span class="title2">Lorem Ipsum dolar simt Amet simply dummy Text Lorem Ipsum dolar</span>
                                    </div>
                                    <div class="font">
                                        <span> Posted in: <span style="color: green"> Update </span></span>
                                        <span style="padding-left: 25px"> on: <span style="color: green">January 24, 2015 </span></span>
                                    </div>
                                    <div>
                                        <p class="font-P">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                            do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                            minim veniam, quis nostrud exercitation...</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 margin">
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <img src="img/frontend/beta/homepage/related_thumb_02.jpg" class="img-responsive"/>
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <div>
                                        <span class="title2">Lorem Ipsum dolar simt Amet simply dummy Text Lorem Ipsum dolar</span>
                                    </div>
                                    <div class="font">
                                        <span> Posted in: <span style="color: green"> Update </span></span>
                                        <span style="padding-left: 25px"> on: <span style="color: green">January 24, 2015 </span></span>
                                    </div>
                                    <div>
                                        <p class="font-P">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                            do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                            minim veniam, quis nostrud exercitation...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="box panel-default">
                            <div class="title">
                                <span>UPCOMING EVENTS</span>
                            </div>
                            <div class="border">
                                <div class="row event">
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <button style="text-align: center">
                                            <span style="font-size: 30px">24</span>
                                            <span>January</span>
                                        </button>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-8">
                                        <div class="title1">
                                            <span>Offered in small class sizes with great emphasis...</span>
                                        </div>
                                        <div>
                                            <span class="glyphicon glyphicon-map-marker">Main compose</span>
                                            <span class="glyphicon glyphicon-time" style="padding-left: 40px">11:00pm</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="border">
                                <div class="row event">
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <button style="text-align: center">
                                            <span style="font-size: 30px">24</span>
                                            <span>January</span>
                                        </button>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-8">
                                        <div class="title1">
                                            <span>Offered in small class sizes with great emphasis...</span>
                                        </div>
                                        <div>
                                            <span class="glyphicon glyphicon-map-marker">Main compose</span>
                                            <span class="glyphicon glyphicon-time" style="padding-left: 40px">11:00pm</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="border">
                                <div class="row event">
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <button style="text-align: center">
                                            <span style="font-size: 30px">24</span>
                                            <span>January</span>
                                        </button>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-8">
                                        <div class="title1">
                                            <span>Offered in small class sizes with great emphasis...</span>
                                        </div>
                                        <div>
                                            <span class="glyphicon glyphicon-map-marker">Main compose</span>
                                            <span class="glyphicon glyphicon-time" style="padding-left: 40px">11:00pm</span>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <button class="button">MORE EVENTS</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="box panel-default">
                            <div class="title">
                                <span> FIND A COURSE</span>
                            </div>
                            <div class="body">
                                <div>
                                    <span>Offered in small class sizes with great emphasis on the demands of the specification and exam technique.</span>
                                </div>
                                <div class="select-style">
                                    <select>
                                        <option value="Location">Location</option>
                                        <option value="Location1">Location1</option>
                                        <option value="Location2">Location2</option>
                                        <option value="Location3">Location3</option>
                                    </select>
                                </div>
                                <div class="select-style">
                                    <select>
                                        <option value="Level">Level</option>
                                        <option value="Level1">Level1</option>
                                        <option value="Level2">Level2</option>
                                        <option value="Level3">Level3</option>
                                    </select>
                                </div>
                                <input class="input" placeholder="Course name">
                                <button class="button">SEARCH</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-md-4 col-sm-4 col-xs-12">
            <div class="panel panel-default">
                <div class="title" style="text-align: center">
                    <span> OUR POPULATION COURSES</span>
                </div>
                <a href="https://www.facebook.com/">
                    <div class="body image">
                        <img class="img img-responsive" src="img/frontend/beta/homepage/learn_1.jpg">
                        <div>
                            <button class="box-title" style="height: 60px">
                                <span class="box-left">NETWORK</span>
                                <img class="image-right" src="img/frontend/beta/homepage/brand-arrow-right.png"/>
                            </button>
                        </div>
                    </div>
                </a>
                <a href="https://www.youtube.com/">
                    <div class="body image">
                        <img class="img img-responsive" src="img/frontend/beta/homepage/learn_2.jpg">
                        <div>
                            <button class="box-title" style="height: 60px">
                                <span class="box-left">WEB DEVELOPMENT</span>
                                <img class="image-right" src="img/frontend/beta/homepage/brand-arrow-right.png"/>
                            </button>
                        </div>
                    </div>
                </a>
                <a href="https://www.gmail.com/">
                    <div class="body image">
                        <img class="img img-responsive" src="img/frontend/beta/homepage/learn_4.jpg">
                        <div>
                            <button class="box-title" style="height: 60px">
                                <span class="box-left">MOBILE DEVELOPMENT</span>
                                <img class="image-right" src="img/frontend/beta/homepage/brand-arrow-right.png"/>
                            </button>
                        </div>
                    </div>
                </a>
                <a href="https://www.yahoo.com/">
                    <div class="body image">
                        <img class="img img-responsive" src="img/frontend/beta/homepage/learn_3.jpg">
                        <div>
                            <button class="box-title" style="height: 60px">
                                <span class="box-left">FOOTBALL</span>
                                <img class="image-right" src="img/frontend/beta/homepage/brand-arrow-right.png"/>
                            </button>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection