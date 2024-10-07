<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\JsonResponse;
use Exception;

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
            ->where('slug', 'who-we-are')
            ->first();
        $mission = DB::table('about_us')
            ->where('status', 1)
            ->where('slug', 'mission')
            ->first();
        $whyUs = DB::table('about_us')
            ->where('status', 1)
            ->where('slug', 'why-us')
            ->first();
        $areaWeCover = DB::table('about_us')
            ->where('status', 1)
            ->where('slug', 'area-we-cover')
            ->first();

        $whyChooseUs = DB::table('why_choose_us')
            ->where('status', 1)
            ->get();

        // dd($whyChooseUs);

        return view('pages.about', compact('about', 'whyChooseUs', 'mission', 'whyUs', 'areaWeCover'));
    }

    public function serviceDetail($slug)
    {
        $service = DB::table('services')
            ->where('slug', $slug)
            ->first();

        $otherServices = DB::table('services')
            ->whereNot('id', $service->id)
            ->get();
        return view('pages.service', compact('service', 'otherServices'));
    }

    public function contact()
    {

        $gettingStarted = DB::table('getting_started')
            ->where('status', 1)
            ->orderBy('step', 'asc')
            ->get();

        return view('pages.contact', compact('gettingStarted'));
    }

    public function storeEnquiry(Request $request): JsonResponse
    {
        $response = [
            'status' => false,
            "msg" => "Something went wrong!",
            "result" => []
        ];

        try {

            $messages = [
                'name.required' => 'Name is required.',
                'phone.required' => 'Phone number is required.',
                'phone.digits' => 'Phone number must be 10 digits.',
                'email.required' => 'Email is required.',
                'email.email' => 'Please provide a valid email address.',
                'subject.required' => 'Subject is required.',
                'message.required' => 'Message is required.'
            ];

            $validate = Validator::make(
                $request->all(),
                [
                    'name' => 'required|string|max:255',
                    'phone' => 'required|digits:10',
                    'email' => 'required|email',
                    'subject' => 'required',
                    'message' => 'required',
                ],
                $messages
            );

            if ($validate->fails()) {
                $response['result'] = $validate->errors()->toArray();

                return response()->json([
                    'status' => false,
                    'msg' => $validate->errors()->first(),
                    'result' => $validate->errors()->toArray()
                ]);
            }

            DB::table('contact')->insert([
                'name' => $request->name,
                'contact_number' => $request->phone,
                'email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message,
            ]);

            $response['status'] = true;
            $response['msg'] = "We received your inquiry. We will contact you soon";
        } catch (Exception $e) {
            $response['msg'] = $e->getMessage();
        }

        return response()->json($response);
    }


    function blogs()
    {
        $blogs = DB::table('blogs')
            ->where('status', 1)
            ->get();
        return view('pages.blogs', compact('blogs'));
    }

    function blogDetail($slug)
    {
        $detail = DB::table('blogs')
            ->where('slug', $slug)
            ->first();

        $otherBlogs = DB::table('blogs')
            ->whereNot('id', $detail->id)
            ->get();

        return view('pages.blogDetail', compact('detail', 'otherBlogs'));
    }

    function career()
    {
        $joinOurTeam = DB::table('about_us')
            ->where('status', 1)
            ->where('slug', 'join-our-team')
            ->first();

        $whyWorkWithUs = DB::table('about_us')
            ->where('status', 1)
            ->where('slug', 'why-work-with-us')
            ->first();
        return view('pages.career', compact('joinOurTeam', 'whyWorkWithUs'));
    }
}
