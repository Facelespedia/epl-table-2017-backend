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
        $date = new DateTime();
        $date_month_8 = [ [8, 12], [8, 19], [8, 26] ];
        $match_month_8 = [[   [19, 2], [18, 10], [14, 16], 
                               [13, 17], [12, 20], [7, 15],
                               [6, 8], [5, 4], [3, 11], [1, 9]     ],
                          [],[]];
        $date_month_9 = [ ];
        $date->setTime(21, 00);
        $this->command->info('ScheduleTableSeeder');

        for( $i = 0; $i < count($date_month_8); $i++ ) {
            $date->setDate(2017, $date_month_8[$i][0], $date_month_8[$i][1] );
            for( $j = 0; $j < count($match_month_8[$i]); $j++ ) {
                $schedule = [ 'date' => $date , 'time' => $date, 'home_team_id' => $match_month_8[$i][$j][0], 'away_team_id' => $match_month_8[$i][$j][1] ];
                array_push($schedules, $schedule);
            }
        }

        App\Schedule::truncate();
        App\Schedule::insert($schedules);
    }
}
