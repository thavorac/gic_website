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
