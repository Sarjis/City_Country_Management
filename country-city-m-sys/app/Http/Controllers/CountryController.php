<?php

namespace App\Http\Controllers;

use App\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
//    function validation($request)
//    {
//        $this->validate($request, [
//            'country_name' => 'require',
//            'country_about' => 'require'
//        ]);
//    }

    function index(Request $request)
    {
        $this->validate($request, [
            'country_name' => 'required|unique:countries|min:4',
            'country_about' => 'required',
        ]);

        $coutry = new Country();
        $coutry->country_name = $request->country_name;
        $coutry->country_about = $request->country_about;
        $coutry->save();
        return 'success';

    }

    function fetchCountry()
    {
        $countries = Country::with('cities')->orderBy('country_name', 'asc')->get();


        return response()->json([
            'countries' => $countries
        ], 200);
    }

    function search()
    {
        $search = \Request::get('s');
        $countries= Country::with('cities')->where('country_name','LIKE', "%$search%")->get();

        return response()->json([
            'countries' => $countries
        ], 200);
    }
}
