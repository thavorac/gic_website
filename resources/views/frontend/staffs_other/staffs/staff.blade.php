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
            background-image: url("https://pbs.twimg.com/profile_banners/50988711/1384539792/600x200");
            background-position: 0 50%;
            background-size: 100% auto;
            border-bottom: 1px solid #e1e8ed;
            border-radius: 4px 4px 0 0;
            height: 95px;
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
            width: 140px;
        }
        .twPc-divUser {
            margin: 20px 0 0;
        }
        .twPc-divName {
            font-size: 18px;
            font-weight: 700;
            line-height: 21px;
        }
        .twPc-divName a {
            color: inherit !important;
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
                            <!-- Twitter Button | you can get from: https://about.twitter.com/tr/resources/buttons#follow -->
                            <a href="https://twitter.com/mertskaplan" class="twitter-follow-button" data-show-count="false" data-size="large" data-show-screen-name="false" data-dnt="true">Follow @mertskaplan</a>
                            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                            <!-- Twitter Button -->
                        </div>

                        <a title="Mert Salih Kaplan" href="https://twitter.com/mertskaplan" class="twPc-avatarLink">
                            <img alt="Mert Salih Kaplan" src="https://pbs.twimg.com/profile_images/378800000352678934/34f9e192635975bf42e534434e2b6273_bigger.jpeg" class="twPc-avatarImg">
                        </a>

                        <div class="twPc-divUser">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="twPc-divName">
                                        <a href="https://twitter.com/mertskaplan">Mert S. Kaplan</a>
                                    </div>
                                <span>
                                    <a href="https://twitter.com/mertskaplan">@<span>mertskaplan</span></a>
                                </span>
                                </div>
                                <div class="col-md-8">
                                    <div class="twPc-divStats">
                                        <ul class="twPc-Arrange">
                                            <li class="twPc-ArrangeSizeFit">
                                                <a href="https://twitter.com/mertskaplan" title="9.840 Tweet">
                                                    <span class="twPc-StatLabel twPc-block">Tweets</span>
                                                    <span class="twPc-StatValue">9.840</span>
                                                </a>
                                            </li>
                                            <li class="twPc-ArrangeSizeFit">
                                                <a href="https://twitter.com/mertskaplan/following" title="885 Following">
                                                    <span class="twPc-StatLabel twPc-block">Following</span>
                                                    <span class="twPc-StatValue">885</span>
                                                </a>
                                            </li>
                                            <li class="twPc-ArrangeSizeFit">
                                                <a href="https://twitter.com/mertskaplan/followers" title="1.810 Followers">
                                                    <span class="twPc-StatLabel twPc-block">Followers</span>
                                                    <span class="twPc-StatValue">1.810</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-xs-12" style="padding-left: 30px; padding-right: 30px;">

                                <div class="tab_menu">
                                    <ul>
                                        <li class="active"><a href="#explore_program" data-toggle="tab">Explore This Program</a></li>
                                        <li><a href="#what_learn" data-toggle="tab">What you’llearn</a></li>
                                        <li><a href="#cost" data-toggle="tab">What it costs</a></li>
                                        <li><a href="#admission_requirements" data-toggle="tab">Admission Requirements</a></li>
                                    </ul>
                                </div><!--end tab_menu-->
                                <div class="tab-content single_tab_content">
                                    <div role="tabpanel" class="tab-pane active" id="explore_program">
                                        <h1>Welcome To Royal College</h1>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed</p>
                                        <div class="admission_video">
                                            <img src="img/courses/video.jpg" data-video="https://www.youtube.com/embed/oOMcZoeEK0A?autoplay=1">
                                        </div>
                                        <h1>Welcome To COLÉGIO PRELÚDIO</h1>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed</p>
                                        <h1>Welcome To COLÉGIO PRELÚDIO</h1>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in </p>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6">
                                                <div class="left_half">
                                                    <h1>Welcome To COLÉGIO RELÚDIO</h1>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, </p>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 pull-right">
                                                <div class="right_half">
                                                    <h1>Welcome To COLÉGIO RELÚDIO</h1>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, </p>
                                                </div>
                                            </div>
                                        </div><!--end row-->
                                        <h1>Welcome To COLÉGIO PRELÚDIO</h1>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in </p>
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