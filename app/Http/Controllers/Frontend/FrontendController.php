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

    public function Student_List_I3(){
        return view('frontend.beta.Student_List.Student_List_I3');
    }

    public function Student_List_I4(){
        return view('frontend.beta.Student_List.Student_List_I4');
    }
    public function staff_detial_activite(){
        return view('frontend.beta.staff_Detial.activite');
    }
    public function staff_detial_course(){
        return view('frontend.beta.staff_Detial.course');
    }
    public function staff_detial_introduct()
    {
        return view('frontend.beta.staff_Detial.introduct');
    }
    public function staff_detial_publications()
    {
        return view('frontend.beta.staff_Detial.publications');
    }
    public function staff_detial_presentation()
    {
        return view('frontend.beta.staff_Detial.presentation');
    }
    public function staff_detial_project_to_research()
    {
        return view('frontend.beta.staff_Detial.project_to_research');
    }
    public function department()
    {
        return view('frontend.beta.department.department');
    }

    public function scholarship(){
        return view('frontend.beta.scholarship.scholarship_link');
    }
    public function partnership(){
        return view('frontend.beta.partnership.partner');
    }
    public function partner_link1(){
        return view('frontend.beta.partnership.partner_link1');
    }
    public function partner_link2(){
        return view('frontend.beta.partnership.partner_link2');
    }
    public function partner_link3(){
        return view('frontend.beta.partnership.partner_link2');
    }
    public function partner_link4(){
        return view('frontend.beta.partnership.partner_link4');
    }


    /**
     * @return \Illuminate\View\View
     */
    public function macros()
    {
        return view('frontend.macros');
    }
}
