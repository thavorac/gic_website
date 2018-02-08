@extends('frontend.layouts.master1')

@section('after-styles-end')
    <style>
        .twPc-div {
            background: #fff none repeat scroll 0 0;
            border: 1px solid #e1e8ed;
            border-radius: 6px;
            /*height: 200px;*/
            /*max-width: 340px;*/
            width: 100%;
        }
        .twPc-bg {
            background-image: url("https://pbs.twimg.com/profile_banners/6253282/1431474710/web");
            background-position: 0 50%;
            background-size: 100% auto;
            border-bottom: 1px solid #e1e8ed;
            border-radius: 4px 4px 0 0;
            height: 200px;
            width: 100%;
        }
        .twPc-block {
            display: block !important;
        }
        .twPc-button {
            margin: -35px -10px 0;
            text-align: right;
            width: 100%;
        }
        .twPc-avatarLink {
            background-color: #fff;
            border-radius: 6px;
            display: inline-block !important;
            float: left;
            margin: -30px 5px 0 50px;
            max-width: 100%;
            padding: 1px;
            vertical-align: bottom;
        }
        .twPc-avatarImg {
            border: 2px solid #fff;
            border-radius: 7px;
            box-sizing: border-box;
            color: #fff;
            height: 140px;
        }
        .twPc-divUser {
            margin: 20px 0 0;
        }
        .twPc-divName p{
            font-size: 12px;
            font-weight: 500;
            line-height: 18px;
            padding-top: 10px;
        }
        .twPc-divName a {
            font-size: 26px;
            line-height: 30px;
            color: #0060b1;;
        }
        .twPc-divStats {
            margin-left: 0;
            padding: 10px 0;
        }
        .twPc-Arrange {
            box-sizing: border-box;
            display: table;
            margin: 0;
            min-width: 100%;
            padding: 0;
            table-layout: auto;
        }
        ul.twPc-Arrange {
            list-style: outside none none;
            margin: 0;
            padding: 0;
        }
        .twPc-ArrangeSizeFit {
            display: table-cell;
            padding: 0;
            vertical-align: top;
        }
        .twPc-ArrangeSizeFit a:hover {
            text-decoration: none;
        }
        .twPc-StatValue {
            display: block;
            font-size: 18px;
            font-weight: 500;
            transition: color 0.15s ease-in-out 0s;
        }
        .twPc-StatLabel {
            color: #8899a6;
            font-size: 10px;
            letter-spacing: 0.02em;
            overflow: hidden;
            text-transform: uppercase;
            transition: color 0.15s ease-in-out 0s;
        }

    </style>

@stop
@section('content')
    <div class="container" style="margin-top: 20px; margin-bottom: 20px;">
        <div class="row">
            <div class="col-xs-12">
                <div class="twPc-div">
                    <a class="twPc-bg twPc-block"></a>

                    <div>
                        <div class="twPc-button">
                            <a href="#" class="twitter-follow-button" data-show-count="false" data-size="large" data-show-screen-name="false" data-dnt="true">Follow @mertskaplan</a>

                        </div>

                        <a title="Mert Salih Kaplan" href="https://twitter.com/mertskaplan" class="twPc-avatarLink">
                            <img alt="{{$employee->name_kh}}" src="{{$employee->photo}}" class="twPc-avatarImg">
                        </a>

                        <div class="twPc-divUser">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="twPc-divName">
                                        <a href="#">{{$employee->name_kh}}</a> <br/>
                                        <span>{{$employee->name_latin}} <br/></span>

                                        <p>
                                            <i class="fa fa-phone-square"></i> {{$employee->phone}} <br/>
                                            <i class="fa fa-envelope-square"></i> {{$employee->email}}
                                        </p>
                                    </div>
                                </div>

                            </div>


                        </div>
                        <div class="row">
                            <div class="col-xs-12" style="padding-left: 30px; padding-right: 30px;">

                                <div class="tab_menu">
                                    <ul>
                                        <li class="active"><a href="#explore_program" data-toggle="tab">About me</a></li>
                                        <li><a href="#what_learn" data-toggle="tab">Publications</a></li>
                                        <li><a href="#cost" data-toggle="tab">Projects</a></li>
                                        <li><a href="#admission_requirements" data-toggle="tab">Academic</a></li>
                                    </ul>
                                </div><!--end tab_menu-->
                                <div class="tab-content single_tab_content">
                                    <div role="tabpanel" class="tab-pane active" id="explore_program">
                                        <h1>Interest</h1>
                                        {!! $employee->interest !!}

                                        <h1>About me</h1>
                                        {!! $employee->about_me !!}
                                    </div><!--end tab-pane-->
                                    <div role="tabpanel" class="tab-pane" id="what_learn">
                                        <h1>Title goes here</h1>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed</p>
                                    </div><!--end tab-pane-->
                                    <div role="tabpanel" class="tab-pane" id="cost">
                                        <h1>Title goes here</h1>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed</p>
                                    </div><!--end tab-pane-->
                                    <div role="tabpanel" class="tab-pane" id="admission_requirements">
                                        <h1>Title goes here</h1>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    </div><!--end tab-pane-->
                                </div><!--end tab-content-->

                            </div>
                        </div>
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