<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="_token" content="{{ csrf_token() }}" />

        <title>@yield('title', app_name())</title>

        <!-- Meta -->
        <meta name="description" content="@yield('meta_description', 'Department Information and Communication Engineering')">
        <meta name="author" content="@yield('meta_author', 'Thavorac CHUN')">
        @yield('meta')

        <!-- Styles -->
        @yield('before-styles-end')

        {{ Html::style(elixir('css/frontend.css')) }}

        <link rel="icon" type="image/png" href="img/favicon.png">
        <link href="{{url('css/frontend/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{url('css/frontend/plugins/select_option1.css')}}">
        <link rel="stylesheet" href="{{url('css/frontend/fonts/font-awesome/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{url('css/frontend/plugins/flexslider.css')}}" type="text/css" media="screen" />
        <link rel="stylesheet" href="{{url('css/frontend/plugins/fullcalendar.min.css')}}">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,600italic,400italic,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="{{url('css/frontend/plugins/animate.css')}}">
        <link rel="stylesheet" href="{{url('css/frontend/plugins/magnific-popup.css')}}">

        @yield('after-styles-end')

        <!-- Fonts -->
        {{ Html::style('https://fonts.googleapis.com/css?family=Lato:100,300,400,700') }}
    </head>
    <body>
        <div class="main_wrapper">

            <div class="topbar clearfix">
                <div class="container">
                    <ul class="topbar-left">
                        <li class="phoneNo"><i class="fa fa-phone"></i>0123 45678910</li>
                        <li class="email-id hidden-xs hidden-sm"><i class="fa fa-envelope"></i>
                            <a href="mailto:info@yourdomain.com">info@yourdomain.com</a>
                        </li>
                    </ul>
                    <ul class="topbar-right">
                        <li class="hidden-xs"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="hidden-xs"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="hidden-xs"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li class="hidden-xs"><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                        <li class="hidden-xs"><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li class="dropdown top-search list-inline">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-search"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <form action="courses.html" method="post">
                                    <input type="text" placeholder="Course Name" id="exampleInputEmail1" class="form-control">
                                    <button class="btn btn-default commonBtn" type="submit">Search</button>
                                </form>
                            </ul>
                        </li>
                        <li class="dropdown language">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-globe"></i>EN
                                <i class="fa fa-caret-down"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="active">
                                    <a href="#">English </a>
                                </li>
                                <li><a href="#">Spanish</a></li>
                                <li><a href="#">Russian</a></li>
                                <li><a href="#">German</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="header clearfix">
                <nav class="navbar navbar-main navbar-default">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="header_inner">
                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav" aria-expanded="false">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                        <a class="navbar-brand logo clearfix" href="index.html"><img src="img/frontend/logo.png" alt="" class="img-responsive" /></a>
                                    </div>
                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <div class="collapse navbar-collapse" id="main-nav">
                                        <ul class="nav navbar-nav navbar-right">
                                            <li class="active"><a href="index.html">Home</a></li>
                                            <li class="dropdown list-inline">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Courses</a>
                                                <ul class="dropdown-menu">
                                                    <li class="dropdown">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Courses Grid View</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="course-grid-3col.html">3 Columns</a></li>
                                                            <li><a href="course-grid-4col.html">4 Columns</a></li>
                                                            <li><a href="course-grid-sidebar-right.html">Sidebar Right</a></li>
                                                            <li><a href="course-grid-sidebar-left.html">Sidebar Left</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Courses List View</a>
                                                        <ul  class="dropdown-menu">
                                                            <li><a href="course-right-sidebar.html">Sidebar Right</a></li>
                                                            <li><a href="course-left-sidebar.html">Sidebar Left</a></li>
                                                            <li><a href="course-fullwidth.html">Fullwidth</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Single Course</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="single-course-right-sidebar.html">Sidebar Right</a></li>
                                                            <li><a href="single-course-left-sidebar.html">Sidebar Left</a></li>
                                                            <li><a href="single-course-fullwidth.html">Fullwidth</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Buy Course</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="buying-steps.html">Payment</a></li>
                                                            <li><a href="buying-confirmation.html">Confirmation </a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PAGES</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="about.html">About College</a></li>
                                                    <li class="dropdown">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Photo Gallery</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="photo-gallery3col.html">Gallery 3 Columns</a></li>
                                                            <li><a href="photo-gallery4col.html">Gallery 4 Columns</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Apply Now</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="buying-steps.html">Apply For Addmission</a></li>
                                                            <li><a href="buying-confirmation.html">Confirmation</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Prices Table</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="price-table-3col.html">Prices 3 column</a></li>
                                                            <li><a href="price-table-4col.html">Prices 4 column</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="campus.html">Our Campus</a></li>
                                                    <li><a href="stuff.html">Stuff</a></li>
                                                    <li><a href="international_students.html">International Students</a></li>
                                                    <li><a href="contact-us.html">Contact Us</a></li>
                                                    <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                                    <li><a href="404-error.html">404 Not Found</a></li>
                                                    <li><a href="coming-soon-dark.html" target="_blank">Coming Soon</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">BLOG</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="blog-right-sidebar.html">Blog Sidebar Right</a></li>
                                                    <li><a href="blog-left-sidebar.html">Blog Sidebar Left</a></li>
                                                    <li><a href="single-post-right-sidebar.html">Single Post Sidebar Right</a></li>
                                                    <li><a href="single-post-left-sidebar.html">Single Post Sidebar Left</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Events</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="events-3col.html">Events 3 Columns</a></li>
                                                    <li><a href="events-right-sidebar.html">Events Sidebar Right</a></li>
                                                    <li><a href="events-left-sidebar.html">Events Sidebar Left</a></li>
                                                    <li><a href="single-events.html">Single Event</a></li>
                                                    <li><a href="events-calendar.html">Events Callender</a></li>
                                                </ul>
                                            </li>
                                            <li class="apply_now"><a href="buying-steps.html">Apply Now</a></li>
                                        </ul>
                                    </div><!-- navbar-collapse -->
                                </div>
                            </div>
                        </div>
                    </div><!-- /.container -->
                </nav><!-- navbar -->
            </div>

            {{--Content--}}
            @yield('content')

            <div class="menuFooter clearfix">
                <div class="container">
                    <div class="row clearfix">

                        <div class="col-sm-3 col-xs-6">
                            <ul class="menuLink clearfix">
                                <li><a href="about.html">About Royal College</a></li>
                                <li><a href="campus.html">About Campus</a></li>
                                <li><a href="stuff.html">Staff Members</a></li>
                                <li><a href="about.html">Why Choose Us?</a></li>
                            </ul>
                        </div><!-- col-sm-3 col-xs-6 -->

                        <div class="col-sm-3 col-xs-6 borderLeft clearfix">
                            <ul class="menuLink clearfix">
                                <li><a href="course-fullwidth.html">All Courses</a></li>
                                <li><a href="buying-steps.html">Admission</a></li>
                                <li><a href="photo-gallery3col.html">Photo Gallery</a></li>
                                <li><a href="international_students.html">International Students</a></li>
                            </ul>
                        </div><!-- col-sm-3 col-xs-6 -->

                        <div class="col-sm-3 col-xs-6 borderLeft clearfix">
                            <div class="footer-address">
                                <h5>Location:</h5>
                                <address>
                                    Royal College<br>
                                    1727 Lombard St.<br>
                                    San Francisco
                                </address>
                                <a href="contact-us.html"><span class="place"><i class="fa fa-map-marker"></i>Main Campus</span></a>
                            </div>
                        </div><!-- col-sm-3 col-xs-6 -->

                        <div class="col-sm-3 col-xs-6 borderLeft clearfix">
                            <div class="socialArea clearfix">
                                <h5>Find us on:</h5>
                                <ul class="list-inline ">
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                </ul>
                            </div><!-- social -->
                            <div class="contactNo clearfix">
                                <h5>Call us on:</h5>
                                <h3>012-3434-456768</h3>
                            </div><!-- contactNo -->
                        </div><!-- col-sm-3 col-xs-6 -->

                    </div><!-- row clearfix -->
                </div><!-- container -->
            </div><!-- menuFooter -->

            <div class="footer clearfix">
                <div class="container">
                    <div class="row clearfix">
                        <div class="col-sm-6 col-xs-12 copyRight">
                            <p>© 2016 Copyright Royal College Bootstrap Template by <a href="http://www.iamabdus.com">Abdus</a></p>
                        </div><!-- col-sm-6 col-xs-12 -->
                        <div class="col-sm-6 col-xs-12 privacy_policy">
                            <a href="contact-us.html">Contact us</a>
                            <a href="privacy-policy.html">Privacy Policy</a>
                        </div><!-- col-sm-6 col-xs-12 -->
                    </div><!-- row clearfix -->
                </div><!-- container -->
            </div><!-- footer -->

        </div>



        <!-- Scripts -->
        {{ HTML::script('https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js') }}
        <script>window.jQuery || document.write('<script src="{{asset('js/frontend/jquery.min.js')}}"><\/script>')</script>
        {!! Html::script('js/frontend/bootstrap/bootstrap.min.js') !!}

        {!! Html::script('js/frontend/plugins/jquery.flexslider.js') !!}
        {!! Html::script('js/frontend/plugins/jquery.selectbox-0.1.3.min.js') !!}
        {!! Html::script('js/frontend/plugins/jquery.magnific-popup.js') !!}
        {!! Html::script('js/frontend/plugins/waypoints.min.js') !!}
        {!! Html::script('js/frontend/plugins/jquery.counterup.js') !!}
        {!! Html::script('js/frontend/plugins/wow.min.js') !!}
        {!! Html::script('js/frontend/plugins/navbar.js') !!}
        {!! Html::script('js/frontend/plugins/moment.min.js') !!}
        {!! Html::script('js/frontend/plugins/fullcalendar.min.js') !!}
        {!! Html::script('js/frontend/custom.js') !!}


        @yield('before-scripts-end')
        {!! Html::script(elixir('js/frontend.js')) !!}
        @yield('after-scripts-end')
    </body>
</html>