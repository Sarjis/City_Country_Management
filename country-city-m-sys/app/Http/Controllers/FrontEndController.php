<?php

namespace App\Http\Controllers;

use App\Country;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    function index()
    {
        return view('front-end.index');
    }


}
