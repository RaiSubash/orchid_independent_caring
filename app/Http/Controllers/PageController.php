<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function index()
    {

        $sliders = DB::table('slider')
            ->where('status', 1)
            ->get();

        $about = DB::table('about_us')
            ->where('status', 1)
            ->first();

        $services = DB::table('services')
            ->where('status', 1)
            ->get();

        $testimonials = DB::table('testimonials')
            ->where('status', 1)
            ->get();

        $blogs = DB::table('blogs')
            ->where('status', 1)
            ->get();

        // dd($sliders);
        return view('index', compact('sliders', 'about', 'services', 'testimonials', 'blogs'));
    }

    public function about()
    {
        return view('pages.about');
    }
    public function service()
    {
        return view('pages.service');
    }
    public function contact()
    {
        return view('pages.contact');
    }
}
