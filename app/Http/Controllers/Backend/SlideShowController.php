<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

/**
 * Class SlideShowController
 * @package App\Http\Controllers\Backend
 */
class SlideShowController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.slideshow.index');
    }
}