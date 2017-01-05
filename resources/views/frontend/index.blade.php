@extends('frontend.layouts.master1')

@section('after-styles-end')
    <style>
        .banner{
            margin-bottom: 15px !important;
        }
    </style>

@stop
@section('content')

    <div class="mainContent clearfix">
        <div class="container">
            <div class="row clearfix">
                <div class="col-sm-12 col-xs-12">
                    <div class="banner carousel slide" id="recommended-item-carousel" data-ride="carousel">
                        <div class="slides carousel-inner">
                            <div class="item active">
                                <img src="img/frontend/home/slider/slider_image_1.jpg" alt="" />
                                <div class="banner_caption">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="caption_inner animated fadeInUp">
                                                    <h1>Welcome To {{$department->name_en}}</h1>
                                                    <p>{{$department->headline}}</p>
                                                    <a href="about.html">Learn More</a>
                                                </div><!--end caption_inner-->
                                            </div>
                                        </div><!--end row-->
                                    </div><!--end container-->
                                </div><!--end banner_caption-->
                            </div>
                            <div class="item">
                                <img src="img/frontend/home/slider/slider_image_2.jpg" alt="" />
                                <div class="banner_caption">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="caption_inner animated fadeInUp">
                                                    <h1>Admission going on</h1>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean consectetur ante volutpat sem aliquam lobortis. Mauris porta fermentum volutpat. Praesent est sapien, tincidunt vel arcu vitae, mattis sollicitudin lectus.</p>
                                                    <a href="buying-steps.html">Apply Now</a>
                                                </div><!--end caption_inner-->
                                            </div>
                                        </div><!--end row-->
                                    </div><!--end container-->
                                </div><!--end banner_caption-->
                            </div>
                            <div class="item">
                                <img src="img/frontend/home/slider/slider_image_3.jpg" alt="" />
                                <div class="banner_caption">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="caption_inner animated fadeInUp">
                                                    <h1>Arrange a tour to our college</h1>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean consectetur ante volutpat sem aliquam lobortis. Mauris porta fermentum volutpat. Praesent est sapien, tincidunt vel arcu vitae, mattis sollicitudin lectus.</p>
                                                    <a href="contact-us.html">Contact Us</a>
                                                </div><!--end caption_inner-->
                                            </div>
                                        </div><!--end row-->
                                    </div><!--end container-->
                                </div><!--end banner_caption-->
                            </div>
                            <div class="item">
                                <img src="img/frontend/home/slider/slider_image_4.jpg" alt="" />
                                <div class="banner_caption">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="caption_inner animated fadeInUp">
                                                    <h1>Find your dream course</h1>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean consectetur ante volutpat sem aliquam lobortis. Mauris porta fermentum volutpat. Praesent est sapien, tincidunt vel arcu vitae, mattis sollicitudin lectus.</p>
                                                    <a href="course-fullwidth.html">Find Course</a>
                                                </div><!--end caption_inner-->
                                            </div>
                                        </div><!--end row-->
                                    </div><!--end container-->
                                </div><!--end banner_caption-->
                            </div>
                        </div>
                        <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                            <img src="img/frontend/home/slider/prev.png">
                        </a>
                        <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                            <img src="img/frontend/home/slider//next.png">
                        </a>
                    </div><!--end banner-->
                </div>
                </div>
            <div class="row clearfix">

                <div class="col-sm-8 col-xs-12">
                    <div class="videoNine clearfix">

                        <div class="videoArea clearfix">
                            <h3>Welcome To {{$department->name_en}}</h3>
                            <div class="row">
                                <div class="col-lg-8 col-md-7 col-xs-12 videoLeft">
                                    <img src="img/frontend/home/video_image.jpg" data-video="https://www.youtube.com/embed/oOMcZoeEK0A?autoplay=1">
                                </div><!-- videoLeft -->
                                <div class="col-lg-4 col-md-5 col-xs-12 videoRight">
                                    <p>{{$department->headline}}</p>
                                    <a href="about.html" class="btn btn-block learnBtn">Learn More</a>
                                </div><!-- videoRight -->
                            </div><!-- row -->
                        </div><!-- videoArea -->

                        <div class="related_post_sec single_post">
                            <h3>Recent News</h3>
                            <ul>
                                <li>
                    <span class="rel_thumb">
                      <a href="single-post-right-sidebar.html"><img src="img/frontend/news/related_thumb_01.png" alt=""></a>
                    </span><!--end rel_thumb-->
                                    <div class="rel_right">
                                        <h4><a href="single-post-right-sidebar.html">Lorem Ipsum dolar simt Amet simply dummy Text Lorem Ipsum dolar</a></h4>
                                        <div class="meta">
                                            <span class="author">Posted in: <a href="#">Update</a></span>
                                            <span class="date">on: <a href="#">January 24, 2015</a></span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation...</p>
                                    </div><!--end rel right-->
                                </li>
                                <li>
                    <span class="rel_thumb">
                      <a href="single-post-right-sidebar.html"><img src="img/frontend/news/related_thumb_02.jpg" alt=""></a>
                    </span><!--end rel_thumb-->
                                    <div class="rel_right">
                                        <h4><a href="single-post-right-sidebar.html">Lorem Ipsum dolar simt Amet simply dummy Text Lorem Ipsum dolar</a></h4>
                                        <div class="meta">
                                            <span class="author">Posted in: <a href="#">Exam</a></span>
                                            <span class="date">on: <a href="#">January 24, 2015</a></span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation...</p>
                                    </div><!--end rel right-->
                                </li>
                            </ul>
                        </div><!--related_post_sec-->

                    </div><!--videoNine-->
                </div><!-- col-sm-8 col-xs-12 -->

                <div class="col-sm-4 col-xs-12">
                    <div class="related_post_sec">
                        <div class="list_block">
                            <h3>Latest News</h3>
                            <ul>
                                <li>
                                    <span class="rel_thumb">
                                        <img src="img/news/rel_thumb.png" alt="">
                                    </span><!--end rel_thumb-->
                                    <div class="rel_right">
                                        <a href="single-post-right-sidebar.html"><h4>Offered in small class sizes with great emphasis...</h4></a>
                                        <span class="date">Posted: <a href="single-post-right-sidebar.html">January 24, 2015</a></span>
                                    </div><!--end rel right-->
                                </li>
                                <li>
                                    <span class="rel_thumb">
                                        <img src="img/news/rel_thumb.png" alt="">
                                    </span><!--end rel_thumb-->
                                    <div class="rel_right">
                                        <a href="single-post-right-sidebar.html"><h4>Offered in small class sizes with great emphasis...</h4></a>
                                        <span class="date">Posted: <a href="single-post-right-sidebar.html">January 24, 2015</a></span>
                                    </div><!--end rel right-->
                                </li>
                                <li>
                                    <span class="rel_thumb">
                                        <img src="img/news/rel_thumb.png" alt="">
                                    </span><!--end rel_thumb-->
                                    <div class="rel_right">
                                        <a href="single-post-right-sidebar.html"><h4>Offered in small class sizes with great emphasis...</h4></a>
                                        <span class="date">Posted: <a href="single-post-right-sidebar.html">January 24, 2015</a></span>
                                    </div><!--end rel right-->
                                </li>
                            </ul>
                            <a href="#" class="more_post">More</a>
                        </div>

                    </div><!--end related_post_sec-->

                    <div class="list_block related_post_sec">
                        <div class="upcoming_events">
                            <h3>Upcoming Events</h3>
                            <ul>
                                <li class="related_post_sec single_post">
                    <span class="date-wrapper">
                      <span class="date"><span>24</span>January</span>
                    </span>
                                    <div class="rel_right">
                                        <h4><a href="single-events.html">Offered in small class sizes with great emphasis...</a></h4>
                                        <div class="meta">
                                            <span class="place"><i class="fa fa-map-marker"></i>Main Campus</span>
                                            <span class="event-time"><i class="fa fa-clock-o"></i>11.00 pm</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="related_post_sec single_post">
                    <span class="date-wrapper">
                      <span class="date"><span>24</span>January</span>
                    </span>
                                    <div class="rel_right">
                                        <h4><a href="single-events.html">Offered in small class sizes with great emphasis...</a></h4>
                                        <div class="meta">
                                            <span class="place"><i class="fa fa-map-marker"></i>Main Campus</span>
                                            <span class="event-time"><i class="fa fa-clock-o"></i>11.00 pm</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="related_post_sec single_post">
                    <span class="date-wrapper">
                      <span class="date"><span>24</span>January</span>
                    </span>
                                    <div class="rel_right">
                                        <h4><a href="single-events.html">Offered in small class sizes with great emphasis...</a></h4>
                                        <div class="meta">
                                            <span class="place"><i class="fa fa-map-marker"></i>Main Campus</span>
                                            <span class="event-time"><i class="fa fa-clock-o"></i>11.00 pm</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <a href="events-3col.html" class="btn btn-default btn-block commonBtn">More Events</a>
                        </div>
                    </div><!-- end list_block -->
                </div><!-- col-sm-4 col-xs-12 -->

            </div><!-- row clearfix -->
        </div><!-- container -->
    </div><!-- mainContent -->

    <div class="count clearfix wow fadeIn" data-wow-delay="100ms">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-sm-3">
                    <div class="text-center">
                        <div class="icon"><i class="fa fa-group"></i></div>
                        <div class="counter">
                            <span class="timer">8298</span>
                        </div>
                        <div class="seperator-small"></div>
                        <p>Students</p>
                    </div>
                </div><!-- col-sm-3 -->
                <div class="col-xs-6 col-sm-3">
                    <div class="text-center">
                        <div class="icon"><i class="fa fa-book"></i></div>
                        <div class="counter">
                            <span class="timer">142</span>
                        </div>
                        <div class="seperator-small"></div>
                        <p>Courses</p>
                    </div>
                </div><!-- col-sm-3 -->
                <div class="col-xs-6 col-sm-3">
                    <div class="text-center">
                        <div class="icon"><i class="fa fa-male"></i></div>
                        <div class="counter">
                            <span class="timer">1047</span>
                        </div>
                        <div class="seperator-small"></div>
                        <p>Stuffs</p>
                    </div>
                </div><!-- col-sm-3 -->
                <div class="col-xs-6 col-sm-3">
                    <div class="text-center">
                        <div class="icon"><i class="fa fa-map-marker"></i></div>
                        <div class="counter">
                            <span class="timer">10</span>
                        </div>
                        <div class="seperator-small"></div>
                        <p>Locations</p>
                    </div>
                </div><!-- col-sm-3 -->
            </div><!-- row -->

        </div><!-- container -->
    </div><!-- count -->

    <div class="brand-section clearfix">
        <div class="container">
            <div class="brand-slider flexslider">
                <ul class="slides">
                    <li>
                        <a href="#"><img src="img/frontend/home/brand1.png" /></a>
                    </li>
                    <li>
                        <a href="#"><img src="img/frontend/home/brand2.png" /></a>
                    </li>
                    <li>
                        <a href="#"><img src="img/frontend/home/brand3.png" /></a>
                    </li>
                    <li>
                        <a href="#"><img src="img/frontend/home/brand4.png" /></a>
                    </li>
                    <li>
                        <a href="#"><img src="img/frontend/home/brand5.png" /></a>
                    </li>
                    <li>
                        <a href="#"><img src="img/frontend/home/brand1.png" /></a>
                    </li>
                    <li>
                        <a href="#"><img src="img/frontend/home/brand2.png" /></a>
                    </li>
                    <li>
                        <a href="#"><img src="img/frontend/home/brand3.png" /></a>
                    </li>
                    <li>
                        <a href="#"><img src="img/frontend/home/brand4.png" /></a>
                    </li>
                    <li>
                        <a href="#"><img src="img/frontend/home/brand5.png" /></a>
                    </li>
                    <li>
                        <a href="#"><img src="img/frontend/home/brand1.png" /></a>
                    </li>
                    <li>
                        <a href="#"><img src="img/frontend/home/brand2.png" /></a>
                    </li>
                </ul>
            </div>
        </div>
    </div><!-- brand-section -->
@endsection

@section('after-scripts-end')
    <script>
    </script>
@stop