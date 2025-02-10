<?php

use Illuminate\Support\Facades\DB;

function getImage($folder, $file)
{

    return "http://localhost:8002/uploads/$folder/$file";
    // return "https://orchidindependentcaring.com.au/AdminBoard/uploads/$folder/$file";
}

function siteSetting()
{
    return DB::table('site_setting')->first();
}

function services()
{
    return DB::table('services')->where('status', 1)
        ->get();
}
function about()
{
    return DB::table('about_us')->where('status', 1)
        ->where('show_in_about', 1)
        ->get();
}
