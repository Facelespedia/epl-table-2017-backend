<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class EditTeam extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'edit:team';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command edit team';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $password = $this->secret('Please enter your password!');
        if($password == '123456') {
            $id = $this->ask('Please enter team id that you want to edit');
            $team = \App\Team::find($id);
            $this->info($team);
            $club = $this->ask('Please enter club if you do not want to change input 0');
            if($club!="0") $team->club = $club;
            $played = $this->ask('Please enter played if you do not want to change input 0');
            if($played!=0) $team->played = $played;
            $won = $this->ask('Please enter won if you do not want to change input 0');
            if($won!=0) $team->won = $won;
            $drawn = $this->ask('Please enter drawn if you do not want to change input 0');
            if($drawn!=0) $team->drawn = $drawn;
            $lost = $this->ask('Please enter lost if you do not want to change input 0');
            if($lost!=0) $team->lost = $lost;
            $goal_for = $this->ask('Please enter goal for if you do not want to change input 0');
            if($goal_for!=0) $team->goal_for = $goal_for;
            $goal_against = $this->ask('Please enter goal against if you do not want to change input 0');
            if($goal_against!=0) $team->goal_against = $goal_against;
            $goal_difference = $this->ask('Please enter goal difference if you do not want to change input 0');
            if($goal_difference!=0) $team->goal_difference = $goal_difference;
            $points = $this->ask('Please enter points if you do not want to change input 0');
            if($points!=0) $team->points = $points;
            $team->save();
            $this->info($team);
            $this->info('Edit team success!!');
        }else {
            $this->info('Your password is incorrect!!');
            exit;
        }
    }
}
