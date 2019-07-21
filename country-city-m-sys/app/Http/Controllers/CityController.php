<?php

namespace App\Http\Controllers;

use App\City;
use App\Country;
use Illuminate\Http\Request;

class CityController extends Controller
{
    function index(Request $request)
    {
        $this->validate($request, [
            'city_name' => 'required|unique:cities',
            'city_about' => 'required',
            'no_of_dwellers' => 'required',
            'location' => 'required',
            'weather' => 'required',
            'country_id' => 'required'
        ]);

        $city = new City();
        $city->city_name = $request->city_name;
        $city->city_about = $request->city_about;
        $city->no_of_dwellers = $request->no_of_dwellers;
        $city->location = $request->location;
        $city->weather = $request->weather;
        $city->country_id = $request->country_id;
        $city->save();
        return 'city';
    }

    function fetchCityInfo()
    {
        $cities = City::with('country')->orderBy('city_name', 'asc')->get();

        return response()->json([
            'cities' => $cities
        ], 200);
    }

    function searchCityInfo()
    {
        $search = \Request::get('s');
        $cities = City::with('country')
            ->where('city_name', 'LIKE',"%$search%")
            ->get();

        return response()->json([
            'cities' => $cities
        ], 200);
    }

    function searchByCountryId()
    {
        $search = \Request::get('id');
        $cities = City::with('country')
            ->where('country_id', 'LIKE', "%$search%")
            ->get();

        return response()->json([
            'cities' => $cities
        ], 200);
    }


}
