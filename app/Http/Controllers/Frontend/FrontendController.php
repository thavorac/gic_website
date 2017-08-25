<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\SlideShow;

/**
 * Class FrontendController
 * @package App\Http\Controllers
 */
class FrontendController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
//        $department = Department::where('code','GIC')->first();
//        $sliders = SlideShow::get();
//        return view('frontend.index',compact('department','sliders'));

        return view('frontend.under_construction');
    }

    public function mission_main(){

        return view("frontend.beta.mission.main");
    }


    public function mission_detail(){

        return view("frontend.beta.mission.detail");

    }


    public function homepage(){
        return view('frontend.beta.homepage.index');
    }
    public function event_list(){

    }
    public function event_detail(){

    }
    public function student_list_I3(){
        return view('frontend.beta.student_list.student_list_I3');
    }

    public function student_list_I4(){
        return view('frontend.beta.student_list.student_list_I4');
    }
    public function student_list_I5(){
        return view('frontend.beta.student_list.student_list_I5');
    }
    public function student_list_M1(){
        return view('frontend.beta.student_list.student_list_M1');
    }
    public function student_list_M2(){
        return view('frontend.beta.student_list.student_list_M2');
    }
    public function staff_detial_activite(){
        return view('frontend.beta.staff_detial.activite');
    }
    public function staff_detial_course(){
        return view('frontend.beta.staff_detial.course');
    }
    public function staff_detial_introduct()
    {
        return view('frontend.beta.staff_detial.introduct');
    }
    public function staff_detial_publications()
    {
        return view('frontend.beta.staff_detial.publications');
    }
    public function staff_detial_presentation()
    {
        return view('frontend.beta.staff_detial.presentation');
    }
    public function staff_detial_project_to_research()
    {
        return view('frontend.beta.staff_detial.project_to_research');
    }
    public function department()
    {
        return view('frontend.beta.department.department');
    }


    /**
     * @return \Illuminate\View\View
     */
    public function macros()
    {
        return view('frontend.macros');
    }
}
