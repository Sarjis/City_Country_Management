<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [
    'uses' => 'FrontEndController@index',
    'as' => '/'
]);
Route::post('/country/save', [
    'uses' => 'CountryController@index',
    'as' => '/country/save'
]);
Route::post('/save/city', [
    'uses' => 'CityController@index',
    'as' => '/save/city'
]);
Route::get('/fetch/country', [
    'uses' => 'CountryController@fetchCountry',
    'as' => '/fetch/country'
]);
Route::get('/fetch/city', [
    'uses' => 'CityController@fetchCityInfo',
    'as' => '/fetch/city'
]);
Route::get('/search', [
    'uses' => 'CountryController@search',
    'as' => '/search'
]);
Route::get('/search-city', [
    'uses' => 'CityController@searchCityInfo',
    'as' => '/search-city'
]);
Route::get('/search-city-id', [
    'uses' => 'CityController@searchByCountryId',
    'as' => '/search-city'
]);