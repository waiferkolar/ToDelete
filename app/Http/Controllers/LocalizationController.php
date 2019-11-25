<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;

class LocalizationController extends Controller
{
    public function index($lang){
        if(array_key_exists($lang,Config::get("lang"))){
            Session::put("locale",$lang);
        }
        return redirect()->back();
    }
}
