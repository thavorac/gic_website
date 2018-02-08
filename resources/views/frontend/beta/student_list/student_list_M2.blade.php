@extends('frontend.layouts.beta')
@section('after-styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/student_list/student_list.css') }}">
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="col-md-3 col-sm-12 col-xs-12" >
                <div>
                    <h3 style="text-align: center">Student Club</h3>
                    <hr>
                    <a class="list-group-item list-group-item-info" href="#"><h4>Web development</h4></a>
                    <a class="list-group-item list-group-item-info" href="#"><h4>Mobile development</h4></a>
                    <a class="list-group-item list-group-item-info" href="#"><h4>Network</h4></a>
                    <a class="list-group-item list-group-item-info" href="#"><h4>Football</h4></a>
                    <hr><h3 style="text-align: center">Class </h3><hr>
                    <div class="class">
                        <a class="list-group-item list-group-item-info" href="{{ asset('list-I3') }}"><span>I3</span></a>
                        <a class="list-group-item list-group-item-info" href="{{ asset('list-I4') }}"><span>I4</span></a>
                        <a class="list-group-item list-group-item-info" href="{{ asset('list-I5') }}"><span>I5</span></a>
                        <a class="list-group-item list-group-item-info" href="{{ asset('list-M1') }}"><span>M1</span></a>
                        <a class="list-group-item active" href="{{ asset('list-M2') }}"><span>M2</span></a>
                    </div>
                    <hr>
                </div>
            </div>
            <div class="col-md-9 col-sm-12 col-xs-12 border-left">
                <div class="row" style="margin-top: 65px">
                    <div class="col-md-10 col-sm-10 col-xs-9">
                        <input class="form-control height" type="text" style="width: 100%" placeholder="Search">
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-3">
                        <button type="button" class="btn btn-default height">
                            <span class="glyphicon glyphicon-search"></span> Search
                        </button>
                    </div>
                </div>
                <div>
                    <h3>M2</h3>
                    <hr>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-6">
                                <div class="panel panel-default">
                                    <img src="{{asset('img/frontend/beta/homepage/1.png')}}" class="img-responsive">
                                    <div class="information">
                                        <span class="name">John Doe</span><br>
                                        <span class="Sex-ID">Sex: </span><span class="italic">M</span> /
                                        <span class="Sex-ID">ID: </span><span class="italic">e20120104</span>
                                        <p>Iam virtutem ex consuetudine vitae sermonisque nostri nostri...
                                            <a href="#">Detial</a></p>
                                        <hr>
                                        <span class="italic">M2 , network</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-6">
                                <div class="panel panel-default">
                                    <img src="{{asset('img/frontend/beta/homepage/1.png')}}" class="img-responsive">
                                    <div class="information">
                                        <span class="name">John Doe</span><br>
                                        <span class="Sex-ID">Sex: </span><span class="italic">M</span> /
                                        <span class="Sex-ID">ID: </span><span class="italic">e20120104</span>
                                        <p>Iam virtutem ex consuetudine vitae sermonisque nostri nostri...
                                            <a href="#">Detial</a></p>
                                        <hr>
                                        <span class="italic">M2 , network</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-6">
                                <div class="panel panel-default">
                                    <img src="{{asset('img/frontend/beta/homepage/1.png')}}" class="img-responsive">
                                    <div class="information">
                                        <span class="name">John Doe</span><br>
                                        <span class="Sex-ID">Sex: </span><span class="italic">M</span> /
                                        <span class="Sex-ID">ID: </span><span class="italic">e20120104</span>
                                        <p>Iam virtutem ex consuetudine vitae sermonisque nostri nostri...
                                            <a href="#">Detial</a></p>
                                        <hr>
                                        <span class="italic">M2 , network</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-6">
                                <div class="panel panel-default">
                                    <img src="{{asset('img/frontend/beta/homepage/2.png')}}" class="img-responsive">
                                    <div class="information">
                                        <span class="name">John Doe</span><br>
                                        <span class="Sex-ID">Sex: </span><span class="italic">M</span> /
                                        <span class="Sex-ID">ID: </span><span class="italic">e20120104</span>
                                        <p>Iam virtutem ex consuetudine vitae sermonisque nostri nostri...
                                            <a href="#">Detial</a></p>
                                        <hr>
                                        <span class="italic">M2 , network</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-6">
                                <div class="panel panel-default">
                                    <img src="{{asset('img/frontend/beta/homepage/2.png')}}" class="img-responsive">
                                    <div class="information">
                                        <span class="name">John Doe</span><br>
                                        <span class="Sex-ID">Sex: </span><span class="italic">M</span> /
                                        <span class="Sex-ID">ID: </span><span class="italic">e20120104</span>
                                        <p>Iam virtutem ex consuetudine vitae sermonisque nostri nostri...
                                            <a href="#">Detial</a></p>
                                        <hr>
                                        <span class="italic">M2 , network</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-6">
                                <div class="panel panel-default">
                                    <img src="{{asset('img/frontend/beta/homepage/2.png')}}" class="img-responsive">
                                    <div class="information">
                                        <span class="name">John Doe</span><br>
                                        <span class="Sex-ID">Sex: </span><span class="italic">M</span> /
                                        <span class="Sex-ID">ID: </span><span class="italic">e20120104</span>
                                        <p>Iam virtutem ex consuetudine vitae sermonisque nostri nostri...
                                            <a href="#">Detial</a></p>
                                        <hr>
                                        <span class="italic">M2 , network</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-6">
                                <div class="panel panel-default">
                                    <img src="{{asset('img/frontend/beta/homepage/3.png')}}" class="img-responsive">
                                    <div class="information">
                                        <span class="name">John Doe</span><br>
                                        <span class="Sex-ID">Sex: </span><span class="italic">M</span> /
                                        <span class="Sex-ID">ID: </span><span class="italic">e20120104</span>
                                        <p>Iam virtutem ex consuetudine vitae sermonisque nostri nostri...
                                            <a href="#">Detial</a></p>
                                        <hr>
                                        <span class="italic">M2 , network</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-6">
                                <div class="panel panel-default">
                                    <img src="{{asset('img/frontend/beta/homepage/3.png')}}" class="img-responsive">
                                    <div class="information">
                                        <span class="name">John Doe</span><br>
                                        <span class="Sex-ID">Sex: </span><span class="italic">M</span> /
                                        <span class="Sex-ID">ID: </span><span class="italic">e20120104</span>
                                        <p>Iam virtutem ex consuetudine vitae sermonisque nostri nostri...
                                            <a href="#">Detial</a></p>
                                        <hr>
                                        <span class="italic">M2 , network</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-6">
                                <div class="panel panel-default">
                                    <img src="{{asset('img/frontend/beta/homepage/3.png')}}" class="img-responsive">
                                    <div class="information">
                                        <span class="name">John Doe</span><br>
                                        <span class="Sex-ID">Sex: </span><span class="italic">M</span> /
                                        <span class="Sex-ID">ID: </span><span class="italic">e20120104</span>
                                        <p>Iam virtutem ex consuetudine vitae sermonisque nostri nostri...
                                            <a href="#">Detial</a></p>
                                        <hr>
                                        <span class="italic">M2 , network</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-6">
                                <div class="panel panel-default">
                                    <img src="{{asset('img/frontend/beta/homepage/4.png')}}" class="img-responsive">
                                    <div class="information">
                                        <span class="name">John Doe</span><br>
                                        <span class="Sex-ID">Sex: </span><span class="italic">M</span> /
                                        <span class="Sex-ID">ID: </span><span class="italic">e20120104</span>
                                        <p>Iam virtutem ex consuetudine vitae sermonisque nostri nostri...
                                            <a href="#">Detial</a></p>
                                        <hr>
                                        <span class="italic">M2 , network</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-6">
                                <div class="panel panel-default">
                                    <img src="{{asset('img/frontend/beta/homepage/4.png')}}" class="img-responsive">
                                    <div class="information">
                                        <span class="name">John Doe</span><br>
                                        <span class="Sex-ID">Sex: </span><span class="italic">M</span> /
                                        <span class="Sex-ID">ID: </span><span class="italic">e20120104</span>
                                        <p>Iam virtutem ex consuetudine vitae sermonisque nostri nostri...
                                            <a href="#">Detial</a></p>
                                        <hr>
                                        <span class="italic">M2 , network</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-6">
                                <div class="panel panel-default">
                                    <img src="{{asset('img/frontend/beta/homepage/4.png')}}" class="img-responsive">
                                    <div class="information">
                                        <span class="name">John Doe</span><br>
                                        <span class="Sex-ID">Sex: </span><span class="italic">M</span> /
                                        <span class="Sex-ID">ID: </span><span class="italic">e20120104</span>
                                        <p>Iam virtutem ex consuetudine vitae sermonisque nostri nostri...
                                            <a href="#">Detial</a></p>
                                        <hr>
                                        <span class="italic">M2 , network</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection