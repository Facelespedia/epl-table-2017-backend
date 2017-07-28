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
    $teams = \App\Team::all();
    return $teams;
});
Route::get('/api/schedules', function() {
    $schedules = \App\Schedule::all();
    return $schedules;
});
Route::get('/api/delete/team/{name}/', function($name) {
    $team = \App\Team::where('club',$name)->first();
    // $team->delete();
    $teams = \App\Team::all();
    return $team;
});
Route::resource('teams', 'TeamController', ['only' => [
    'destroy']
]);