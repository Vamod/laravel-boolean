<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    public function home(){
        return view('home');
    }
    public function chisiamo(){
        //chisiamo è il nome del file non del name di route
        return view('chisiamo');
    }
}
