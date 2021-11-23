<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
    {
        public function index(Request $request)
        {
            if($request->lang<>'')
            {
                app()->setLocale($request->lang);
            }
            return view('welcome');//,compact('parentid'));
        }
    public function switchLang($lang)
    {
        if (array_key_exists($lang, Config::get('languages'))) {
            Session::put('applocale', $lang);
        }
        return Redirect::back();
    }

    public function switchWeb($lang)
    {
      //upton or hr
            Session::put('apptype', $lang);

        return Redirect::back();
    }

}