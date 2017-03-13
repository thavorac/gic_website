<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\SlideShow;

/**
 * Class StaffAndOtherController
 * @package App\Http\Controllers
 */
class StaffAndOtherController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function list_staffs()
    {
        $department = Department::where('code','GIC')->first();
        return view('frontend.staffs_other.staffs.list_staffs',compact('department'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function staff($id)
    {
        $department = Department::where('code','GIC')->first();
        return view('frontend.staffs_other.staffs.staff',compact('department'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function useful_links()
    {
        $department = Department::where('code','GIC')->first();
        return view('frontend.staffs_other.useful_links',compact('department'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function gallery()
    {
        $department = Department::where('code','GIC')->first();
        return view('frontend.staffs_other.gallery',compact('department'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function room_labs()
    {
        $department = Department::where('code','GIC')->first();
        return view('frontend.staffs_other.room_labs',compact('department'));
    }
}
