<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function view(){
        return view('edufun.aboutus');
    }
}
