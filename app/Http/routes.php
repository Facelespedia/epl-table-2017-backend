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
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('table.index');
});
Route::get('/api/teams', function() {
    $teams = \App\Team::all();
    return $teams;
});
Route::get('/api/schedules', function(Request $request) {
    if($request->input('team_home') == null || $request->input('team_away') == null) {
        $schedules = \App\Schedule::all();
        foreach($schedules as $s) {
                $id = (int)$s->id-1;
                $id_h = (int)($s->home_team_id) - 1;
                $id_a = (int)($s->away_team_id) - 1;
                $team_h = \App\Team::find($id_h+1);
                $team_a = \App\Team::find($id_a+1);
                $team_h_name = $team_h->club;
                $team_a_name = $team_a->club;
                $schedules->get($id)->home_team_id = $team_h_name;
                $schedules->get($id)->away_team_id = $team_a_name;
        }
        return $schedules;
    }else {
        $team_h = \App\Team::where('club', $request->input('team_home'))->first();
        $team_a = \App\Team::where('club', $request->input('team_away'))->first();
        $schedule = \App\Schedule::where('home_team_id', $team_h->id)
        ->where('away_team_id', $team_a->id)->first();
        $schedule->home_team_id = $team_h->club;
        $schedule->away_team_id = $team_a->club;
        return $schedule;
    }
});
Route::post('/api/delete/team/{id}', 'TeamController@destroy');
Route::post('/api/delete/schedule/{id}', 'ScheduleController@destroy');
Route::put('/api/edit/team/{id}', 'TeamController@update');
Route::put('/api/edit/match/{id}', 'ScheduleController@update');
Route::get('/admin/{type?}', function($type="match") {
    if($type == "match") {
        return view('dashboard.match.index');
    }else if($type == "team") {
        return view('dashboard.team.index');
    }
});
Route::get('/search/autocomplete/{query?}', function($query="") {
    $teams = \App\Team::where('club', $query)
    ->orWhere('club', 'like', '%' . $query . '%')->get();
    return $teams;
});

// token = hHWcA7CTOEvobq3oHbpv63d3kcHenEHlpWESOzcX