<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ShowScheduleList extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'show:schedulelist';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Show all schedule list';

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
            $header = ['#', 'Date', 'Time', 'Home Team', 'Away Team'];
            $schedules = \App\Schedule::select('id', 'date', 'time', 'home_team_id', 'away_team_id')->get();
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
            $this->table($header, $schedules);
        }else {
            $this->info('Your password is incorrect!!');
            exit;
        }
        
    }
}
