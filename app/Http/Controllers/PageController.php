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
        $about = DB::table('about_us')
            ->where('status', 1)
            ->first();

        $whyChooseUs = DB::table('why_choose_us')
            ->where('status', 1)
            ->get();

        // dd($whyChooseUs);


        return view('pages.about', compact('about', 'whyChooseUs'));
    }
    public function serviceDetail($slug)
    {
        $service = DB::table('services')
            ->where('slug', $slug)
            ->first();
        return view('pages.service', compact('service'));
    }
    public function contact()
    {
        return view('pages.contact');
    }
}
