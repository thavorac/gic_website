<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\SlideShow;

/**
 * Class ResearchAndDevelopmentController
 * @package App\Http\Controllers
 */
class ResearchAndDevelopmentController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function list_projects()
    {
        $department = Department::where('code','GIC')->first();
        return view('frontend.research_development.list_projects',compact('department'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function project($id)
    {
        $department = Department::where('code','GIC')->first();
        return view('frontend.research_development.project',compact('department'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function list_partners()
    {
        $department = Department::where('code','GIC')->first();
        return view('frontend.research_development.list_partners',compact('department'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function partner($id)
    {
        $department = Department::where('code','GIC')->first();
        return view('frontend.research_development.partner',compact('department'));
    }
}
