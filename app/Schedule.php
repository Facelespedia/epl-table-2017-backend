<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = ['date', 'time', 'home_team_id', 'away_team_id', 'created_at'];
}
