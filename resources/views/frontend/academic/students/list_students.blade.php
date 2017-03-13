@extends('frontend.layouts.master1')

@section('after-styles-end')
    <style>
        .banner{
            margin-bottom: 15px !important;
        }
    </style>

@stop
@section('content')
<div class="courses_section">
    <div class="container">
        <div class="row">

            <div class="col-xs-12 col-sm-9 col-lg-10 courses_right pull-right">
                <div class="courses_right_inner padding-border-left">

                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="custom_title">
                                    <h1>Our Students</h1>
                                    <p>Below are our students in each promotion.  </p>
                                </div><!--end custom_title-->
                            </div><!--end col-xs-12-->
                        </div><!--end row-->

                        <div class="row">
                            <div class="col-xs-12">
                                <ul class="list">
                                    @foreach($students as $student)
                                    <li>
                                        <a href="#">
                                            <div class="thumb">
                                                <img src="{{$student->photo}}" alt="">
                                            </div>
                                            <h3>{{$student->name_kh}}</h3>
                                            <h5>{{$student->id_card}}</h5>
                                        </a>
                                    </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <div class="col-xs-12 col-sm-3 col-lg-2 courses_left hidden-xs pull-left">
                <div class="courses_left_inner">
                    <h3>Promotions</h3>
                    <ul>
                        @foreach($promotions as $p)
                            @if($p['promotion'] == $promotion)
                                <li class="active">
                            @else
                                <li>
                            @endif
                                    <a href="{{route("frontend.academic.list_students",$p['promotion'])}}">Promotion {{$p['promotion']}}</a>
                                </li>
                        @endforeach
                    </ul>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection

@section('after-scripts-end')
    <script>
    </script>
@stop