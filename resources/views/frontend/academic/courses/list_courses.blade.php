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

                    <div class="search_section">
                        <form action="#" method="post">
                            <ul>
                                <li>
                                    <input type="text" name="course-name" class="form-control" placeholder="Course Name">
                                </li>
                                <li>
                                    <div class="selectBox clearfix">
                                        <select name="guiest_id2" id="guiest_id2" sb="54045175" style="display: none;">
                                            <option value="0">Level</option>
                                            <option value="1">Level_1</option>
                                            <option value="2">Level_2</option>
                                            <option value="3">Level_3</option>
                                        </select><div id="sbHolder_54045175" class="sbHolder"><a id="sbToggle_54045175" href="#" class="sbToggle"></a><a id="sbSelector_54045175" href="#" class="sbSelector">Level</a><ul id="sbOptions_54045175" class="sbOptions" style="display: none;"><li><a href="#0" rel="0">Level</a></li><li><a href="#1" rel="1">Level_1</a></li><li><a href="#2" rel="2">Level_2</a></li><li><a href="#3" rel="3">Level_3</a></li></ul></div>
                                    </div><!-- selectBox -->
                                </li>
                                <li class="search_button">
                                    <button class="btn btn-default btn-block commonBtn" type="submit">Search</button>
                                </li>
                            </ul>
                        </form>
                    </div><!--End search_section-->

                    <div class="courses">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Program Name</th>
                                <th>Area Of Interest</th>
                                <th>Duration</th>
                                <th>Type</th>
                                <th>Campus</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr class="option">
                                <td>A</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>
                                    <ul>
                                        <li class="active">
                                            <a href="single-course-right-sidebar.html">Architectural Technician (Weekend)</a>
                                        </li>
                                        <li>
                                            <a href="single-course-right-sidebar.html">Computers and Engineering</a>
                                        </li>
                                        <li>
                                            <a href="single-course-right-sidebar.html">Continuing Education</a>
                                        </li>
                                    </ul>
                                </td>
                                <td>Engineering &amp; Architecture <br>(Fulltime on campus)</td>
                                <td>Fulltime <br>on campus <br>2 Years</td>
                                <td>Ontario College<br> Of Diploma</td>
                                <td>Ottawa</td>
                            </tr>
                            <tr>
                                <td>
                                    <ul>
                                        <li class="active">
                                            <a href="single-course-right-sidebar.html">Architectural Technician (Weekend)</a>
                                        </li>
                                        <li>
                                            <a href="single-course-right-sidebar.html">Computers and Engineering</a>
                                        </li>
                                        <li>
                                            <a href="single-course-right-sidebar.html">Continuing Education</a>
                                        </li>
                                    </ul>
                                </td>
                                <td>Engineering &amp; Architecture <br>(Fulltime on campus)</td>
                                <td>Fulltime <br>on campus <br>2 Years</td>
                                <td>Ontario College<br> Of Diploma</td>
                                <td>Ottawa</td>
                            </tr>
                            <tr>
                                <td>
                                    <ul>
                                        <li class="active">
                                            <a href="single-course-right-sidebar.html">Architectural Technician (Weekend)</a>
                                        </li>
                                        <li>
                                            <a href="single-course-right-sidebar.html">Computers and Engineering</a>
                                        </li>
                                        <li>
                                            <a href="single-course-right-sidebar.html">Continuing Education</a>
                                        </li>
                                    </ul>
                                </td>
                                <td>Engineering &amp; Architecture <br>(Fulltime on campus)</td>
                                <td>Fulltime <br>on campus <br>2 Years</td>
                                <td>Ontario College<br> Of Diploma</td>
                                <td>Ottawa</td>
                            </tr>
                            <tr>
                                <td>
                                    <ul>
                                        <li class="active">
                                            <a href="single-course-right-sidebar.html">Architectural Technician (Weekend)</a>
                                        </li>
                                        <li>
                                            <a href="single-course-right-sidebar.html">Computers and Engineering</a>
                                        </li>
                                        <li>
                                            <a href="single-course-right-sidebar.html">Continuing Education</a>
                                        </li>
                                    </ul>
                                </td>
                                <td>Engineering &amp; Architecture <br>(Fulltime on campus)</td>
                                <td>Fulltime <br>on campus <br>2 Years</td>
                                <td>Ontario College<br> Of Diploma</td>
                                <td>Ottawa</td>
                            </tr>
                            <tr>
                                <td>
                                    <ul>
                                        <li class="active">
                                            <a href="single-course-right-sidebar.html">Architectural Technician (Weekend)</a>
                                        </li>
                                        <li>
                                            <a href="single-course-right-sidebar.html">Computers and Engineering</a>
                                        </li>
                                        <li>
                                            <a href="single-course-right-sidebar.html">Continuing Education</a>
                                        </li>
                                    </ul>
                                </td>
                                <td>Engineering &amp; Architecture <br>(Fulltime on campus)</td>
                                <td>Fulltime <br>on campus <br>2 Years</td>
                                <td>Ontario College<br> Of Diploma</td>
                                <td>Ottawa</td>
                            </tr>
                            <tr>
                                <td>
                                    <ul>
                                        <li class="active">
                                            <a href="single-course-right-sidebar.html">Architectural Technician (Weekend)</a>
                                        </li>
                                        <li>
                                            <a href="single-course-right-sidebar.html">Computers and Engineering</a>
                                        </li>
                                        <li>
                                            <a href="single-course-right-sidebar.html">Continuing Education</a>
                                        </li>
                                    </ul>
                                </td>
                                <td>Engineering &amp; Architecture <br>(Fulltime on campus)</td>
                                <td>Fulltime <br>on campus <br>2 Years</td>
                                <td>Ontario College<br> Of Diploma</td>
                                <td>Ottawa</td>
                            </tr>
                            <tr>
                                <td>
                                    <ul>
                                        <li class="active">
                                            <a href="single-course-right-sidebar.html">Architectural Technician (Weekend)</a>
                                        </li>
                                        <li>
                                            <a href="single-course-right-sidebar.html">Computers and Engineering</a>
                                        </li>
                                        <li>
                                            <a href="single-course-right-sidebar.html">Continuing Education</a>
                                        </li>
                                    </ul>
                                </td>
                                <td>Engineering &amp; Architecture <br>(Fulltime on campus)</td>
                                <td>Fulltime <br>on campus <br>2 Years</td>
                                <td>Ontario College<br> Of Diploma</td>
                                <td>Ottawa</td>
                            </tr>
                            <tr>
                                <td>
                                    <ul>
                                        <li class="active">
                                            <a href="single-course-right-sidebar.html">Architectural Technician (Weekend)</a>
                                        </li>
                                        <li>
                                            <a href="single-course-right-sidebar.html">Computers and Engineering</a>
                                        </li>
                                        <li>
                                            <a href="single-course-right-sidebar.html">Continuing Education</a>
                                        </li>
                                    </ul>
                                </td>
                                <td>Engineering &amp; Architecture <br>(Fulltime on campus)</td>
                                <td>Fulltime <br>on campus <br>2 Years</td>
                                <td>Ontario College<br> Of Diploma</td>
                                <td>Ottawa</td>
                            </tr>
                            <tr>
                                <td>
                                    <ul>
                                        <li class="active">
                                            <a href="single-course-right-sidebar.html">Architectural Technician (Weekend)</a>
                                        </li>
                                        <li>
                                            <a href="single-course-right-sidebar.html">Computers and Engineering</a>
                                        </li>
                                        <li>
                                            <a href="single-course-right-sidebar.html">Continuing Education</a>
                                        </li>
                                    </ul>
                                </td>
                                <td>Engineering &amp; Architecture <br>(Fulltime on campus)</td>
                                <td>Fulltime <br>on campus <br>2 Years</td>
                                <td>Ontario College<br> Of Diploma</td>
                                <td>Ottawa</td>
                            </tr>
                            <tr>
                                <td>
                                    <ul>
                                        <li class="active">
                                            <a href="single-course-right-sidebar.html">Architectural Technician (Weekend)</a>
                                        </li>
                                        <li>
                                            <a href="single-course-right-sidebar.html">Computers and Engineering</a>
                                        </li>
                                        <li>
                                            <a href="single-course-right-sidebar.html">Continuing Education</a>
                                        </li>
                                    </ul>
                                </td>
                                <td>Engineering &amp; Architecture <br>(Fulltime on campus)</td>
                                <td>Fulltime <br>on campus <br>2 Years</td>
                                <td>Ontario College<br> Of Diploma</td>
                                <td>Ottawa</td>
                            </tr>
                            <tr>
                                <td>
                                    <ul>
                                        <li class="active">
                                            <a href="single-course-right-sidebar.html">Architectural Technician (Weekend)</a>
                                        </li>
                                        <li>
                                            <a href="single-course-right-sidebar.html">Computers and Engineering</a>
                                        </li>
                                        <li>
                                            <a href="single-course-right-sidebar.html">Continuing Education</a>
                                        </li>
                                    </ul>
                                </td>
                                <td>Engineering &amp; Architecture <br>(Fulltime on campus)</td>
                                <td>Fulltime <br>on campus <br>2 Years</td>
                                <td>Ontario College<br> Of Diploma</td>
                                <td>Ottawa</td>
                            </tr>
                            <tr>
                                <td>
                                    <ul>
                                        <li class="active">
                                            <a href="single-course-right-sidebar.html">Architectural Technician (Weekend)</a>
                                        </li>
                                        <li>
                                            <a href="single-course-right-sidebar.html">Computers and Engineering</a>
                                        </li>
                                        <li>
                                            <a href="single-course-right-sidebar.html">Continuing Education</a>
                                        </li>
                                    </ul>
                                </td>
                                <td>Engineering &amp; Architecture <br>(Fulltime on campus)</td>
                                <td>Fulltime <br>on campus <br>2 Years</td>
                                <td>Ontario College<br> Of Diploma</td>
                                <td>Ottawa</td>
                            </tr>
                            </tbody>
                        </table>
                    </div><!--End courses-->

                    <ul class="pagination">
                        <li>
                            <a aria-label="Previous" href="#">
                                <span aria-hidden="true">Previous</span>
                            </a>
                        </li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">6</a></li>
                        <li><a href="#">...</a></li>
                        <li><a href="#">38</a></li>
                        <li>
                            <a aria-label="Next" href="#">
                                <span aria-hidden="true">Next</span>
                            </a>
                        </li>
                    </ul>

                </div><!-- end courses_right_inner -->
            </div><!-- end courses_right -->

            <div class="col-xs-12 col-sm-3 col-lg-2 courses_left hidden-xs pull-left">
                <div class="courses_left_inner">
                    <h3>Courses</h3>
                    <ul>
                        <li class="active"><a href="course-fullwidth.html">View all programs (A - Z)</a></li>
                        <li><a href="course-fullwidth.html">Full Time Programs</a></li>
                        <li><a href="course-fullwidth.html">Part-Time Studies</a></li>
                    </ul>
                    <h3>AREAS OF STUDY</h3>
                    <ul>
                        <li><a href="single-course-right-sidebar.html">Academic Upgrading</a></li>
                        <li><a href="single-course-right-sidebar.html">Arts</a></li>
                        <li><a href="single-course-right-sidebar.html">Business</a></li>
                        <li><a href="single-course-right-sidebar.html">Computers and Engineering</a></li>
                        <li><a href="single-course-right-sidebar.html">Continuing Education</a></li>
                        <li><a href="single-course-right-sidebar.html">Employment Preparation</a></li>
                        <li><a href="single-course-right-sidebar.html">English as a Second Language</a></li>
                        <li><a href="single-course-right-sidebar.html">Health and Human Services</a></li>
                        <li><a href="single-course-right-sidebar.html">Indigenous</a></li>
                        <li><a href="single-course-right-sidebar.html">Online Options</a></li>
                        <li><a href="single-course-right-sidebar.html">Science and Technology</a></li>
                        <li><a href="single-course-right-sidebar.html">Sport and Exercise</a></li>
                        <li><a href="single-course-right-sidebar.html">Trades and Apprenticeships</a></li>
                        <li><a href="single-course-right-sidebar.html">University Transfer Options</a></li>
                    </ul>
                </div><!--end courses_left_inner-->
            </div><!--end courses_left-->

        </div><!-- end row -->
    </div><!-- end container -->
</div>

@endsection

@section('after-scripts-end')
    <script>
    </script>
@stop