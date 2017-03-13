@extends('frontend.layouts.master1')

@section('after-styles-end')
    <style>
        .banner{
            margin-bottom: 15px !important;
        }
    </style>

@stop
@section('content')
<div class="single_content">
    <div class="container">
        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12 custom_right">
                <div class="single_content_left padding-border-right-twenty">
                    <div class="tab_menu">
                        <ul>
                            <?php $index = 0; ?>
                            @foreach($timetables_by_year as $timetable)
                                @if($index == 0)
                                    <li class="active">
                                @else
                                    <li>
                                @endif
                                        <a href="#{{$timetable->id}}" data-toggle="tab">{{$timetable->trimester}}</a>
                                    </li>
                                <?php $index++; ?>
                            @endforeach
                        </ul>
                    </div>
                    <div class="tab-content single_tab_content">
                        <?php
                            $index = 0;
                            $active = "active";
                        ?>
                        @foreach($timetables_by_year as $timetable)
                            <?php
                                if($index != 0) {
                                    $active = "";
                                }
                            ?>
                            <div role="tabpanel" class="tab-pane {{$active}}" id="{{$timetable->id}}">
                                <embed src="{{$timetable->file}}" width="100%" height="1000px"/>
                            </div>
                            <?php $index++; ?>
                        @endforeach
                    </div>
                </div>
            </div>



        </div><!--end row-->
    </div><!--end container-->
</div>
@endsection

@section('after-scripts-end')
    <script>
    </script>
@stop