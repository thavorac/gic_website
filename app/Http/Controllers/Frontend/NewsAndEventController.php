<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\SlideShow;

/**
 * Class NewsAndEventController
 * @package App\Http\Controllers
 */
class NewsAndEventController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function list_news()
    {
        $department = Department::where('code','GIC')->first();
        return view('frontend.news_events.list_news',compact('department'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function news($id)
    {
        $department = Department::where('code','GIC')->first();
        return view('frontend.news_events.news',compact('department'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function list_events()
    {
        $department = Department::where('code','GIC')->first();
        return view('frontend.news_events.list_events',compact('department'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function event($id)
    {
        $department = Department::where('code','GIC')->first();
        return view('frontend.news_events.event',compact('department'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function student_messages()
    {
        $department = Department::where('code','GIC')->first();
        return view('frontend.news_events.student_messages',compact('department'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function list_blogs()
    {
        $department = Department::where('code','GIC')->first();
        return view('frontend.news_events.blogs.list_blogs',compact('department'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function blog($id)
    {
        $department = Department::where('code','GIC')->first();
        return view('frontend.news_events.blogs.blog',compact('department'));
    }
}
