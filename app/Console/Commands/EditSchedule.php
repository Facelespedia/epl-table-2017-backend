<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class EditSchedule extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'edit:schedule';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command edit schedule';

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
            $header = ['ID', 'Club', 'Played', 'Won', 'Drawn', 'Lost', 'GF', 'GA', 'GD', 'Points'];
            $teams = \App\Team::select('id', 'club', 'played', 'won', 'drawn','lost', 'goal_for', 'goal_against', 'goal_difference', 'points')->get();
            
            $this->table($header, $teams);
            $team_home_id = $this->ask('Please enter id team home');
            $team_away_id = $this->ask('Please enter id team away');

            
            $year = $this->ask('Please fill in year');
            $month = $this->ask('Please fill in month');
            $day = $this->ask('Please fill in day');
            $hour = $this->ask('Please fill in time(hour)');
            $minute = $this->ask('Please fill in time(minute)');
            $date = new \DateTime();
            $date->setDate($year, $month, $day);
            $date->setTime($hour, $minute);

            $data = [ 'date' => $date, 'time' => $date ];

            \App\Schedule::where('home_team_id', $team_home_id)
                                        ->where('away_team_id', $team_away_id)
                                        ->update($data);
        }else {
            $this->info('Your password is incorrect!!');
            exit;
        }
    }
}
