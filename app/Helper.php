<?php

use Illuminate\Support\Facades\DB;

function getImage($folder, $file)
{

    return "http://localhost:8002/uploads/$folder/$file";
    // return "https://advisornp.com/AdminBoard/uploads/$folder/$file";
}

function siteSetting()
{
    return DB::table('site_setting')->first();
}
