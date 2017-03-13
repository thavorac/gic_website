@extends('frontend.layouts.master1')

@section('after-styles-end')
    <style>
        .banner{
            margin-bottom: 15px !important;
        }
    </style>

@stop
@section('content')

    <div class="content_top clearfix">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    {!! $department->about_dept !!}
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="content_right">
                        <div class="banner" id="about_banner">

                            <div class="flex-viewport" style="overflow: hidden; position: relative;">
                                <ul class="slides" style="width: 1000%; transition-duration: 0.6s; transform: translate3d(-1110px, 0px, 0px);"><li style="display: block; width: 555px; float: left;" class="clone" aria-hidden="true">
                                        <img src="img/frontend/about/about-slide-03.jpg" alt="" draggable="false">
                                        <div class="about_caption">
                                            <h2>Rich library - open 24/7</h2>
                                        </div><!--end banner_caption-->
                                    </li>
                                    <li class="" style="width: 555px; float: left; display: block;">
                                        <img src="img/frontend/about/about-slide-01.jpg" alt="" draggable="false">
                                        <div class="about_caption">
                                            <h2> Dedicated support stuffs for students</h2>
                                        </div><!--end banner_caption-->
                                    </li>

                                    <li style="display: block; width: 555px; float: left;" class="flex-active-slide">
                                        <img src="img/frontend/about/about-slide-02.jpg" alt="" draggable="false">
                                        <div class="about_caption show">
                                            <h2>Nice classrooms with wifi</h2>
                                        </div><!--end banner_caption-->
                                    </li>
                                </ul>
                            </div>
                            <ol class="flex-control-nav flex-control-paging">
                                <li><a class="">1</a></li>
                                <li><a class="flex-active">2</a></li>
                                <li><a class="">3</a></li>
                            </ol>
                        </div><!--end banner-->
                    </div><!--end content left-->
                </div>
            </div><!--end row-->
        </div><!--end container-->
    </div>

    <div class="content_bottom clearfix">
        <div class="container">


        </div><!--end container-->
    </div>

@endsection

@section('after-scripts-end')
    <script>
    </script>
@stop