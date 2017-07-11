<?php

use Illuminate\Database\Seeder;

class ScheduleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $schedules = array();
        $this->command->info('ScheduleTableSeeder');
        
        $teams = \App\Team::all();
        foreach($teams as $home) {
            $date = new DateTime();
            $date->setDate( 2017, 8, 12 );
            $date->setTime( 21, 00 );
            foreach($teams as $away) {
                if( $home->id != $away->id ) {
                    $schedule = [ 'date' => $date , 'time' => $date, 'home_team_id' => $home->id, 'away_team_id' => $away->id, 'created_at' => new DateTime() ];
                    array_push($schedules, $schedule);
                }
            }
        }

        App\Schedule::truncate();
        App\Schedule::insert($schedules);
    }
}
