@extends('frontend.layouts.master1')

@section('after-styles-end')
    <style>
        .banner{
            margin-bottom: 15px !important;
        }
    </style>

@stop
@section('content')
<div class="custom_content clearfix">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="custom_title">
                    <h1>Teachers</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris </p>
                </div><!--end custom_title-->
            </div><!--end col-xs-12-->
        </div><!--end row-->

        <div class="row">
            <div class="col-xs-12">
                <ul class="list">
                    <li>
                        <a href="{{route("frontend.staff",1)}}">
                            <div class="thumb">
                                <img src="img/stuff/member/1.png" alt="">
                            </div>
                            <h3>John Doe</h3>
                            <h5>Teacher</h5>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="thumb">
                                <img src="img/stuff/member/2.png" alt="">
                            </div>
                            <h3>John Doe</h3>
                            <h5>Teacher</h5>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="thumb">
                                <img src="img/stuff/member/3.png" alt="">
                            </div>
                            <h3>John Doe</h3>
                            <h5>Teacher</h5>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="thumb">
                                <img src="img/stuff/member/4.png" alt="">
                            </div>
                            <h3>John Doe</h3>
                            <h5>Teacher</h5>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="thumb">
                                <img src="img/stuff/member/1.png" alt="">
                            </div>
                            <h3>John Doe</h3>
                            <h5>Teacher</h5>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="thumb">
                                <img src="img/stuff/member/2.png" alt="">
                            </div>
                            <h3>John Doe</h3>
                            <h5>Teacher</h5>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="thumb">
                                <img src="img/stuff/member/3.png" alt="">
                            </div>
                            <h3>John Doe</h3>
                            <h5>Teacher</h5>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="thumb">
                                <img src="img/stuff/member/4.png" alt="">
                            </div>
                            <h3>John Doe</h3>
                            <h5>Teacher</h5>
                        </a>
                    </li>
                </ul>
            </div><!--end col-xs-12-->
        </div><!--end row-->

    </div>
</div>
@endsection

@section('after-scripts-end')
    <script>
    </script>
@stop