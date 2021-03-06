<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class InsertSchedule extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'insert:schedule';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command insert schedule';

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
            
            $year = $this->ask('Please fill in year');
            $month = $this->ask('Please fill in month');
            $day = $this->ask('Please fill in day');
            $hour = $this->ask('Please fill in time(hour)');
            $minute = $this->ask('Please fill in time(minute)');
            $id_home = $this->ask('Please fill in team home id');
            $id_away = $this->ask('Please fill in team away id');
            $team_home = \App\Team::find($id_home);
            $team_away = \App\Team::find($id_away);

            $date = new \DateTime();
            $date->setDate($year, $month, $day);
            $date->setTime($hour, $minute);
            $s = [ 'date' => $date , 'time' => $date, 'home_team_id' => $id_home, 'away_team_id' => $id_away ];
            $schedule = \App\Schedule::create($s);

            $this->info('Insert schedule success!!');
        }else {
            $this->info('Your password is incorrect!!');
            exit;
        }
    }
}
