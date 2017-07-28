<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('table.index');
});
Route::get('/api/teams', function() {
    $response = array();
    $teams = \App\Team::all();
    $response['teams'] = $teams;
    return $response;
});
Route::get('/api/schedules', function() {
    $response = array();
    $schedules = \App\Schedule::all();
    $response['schedules'] = $schedules;
    return $response;
});