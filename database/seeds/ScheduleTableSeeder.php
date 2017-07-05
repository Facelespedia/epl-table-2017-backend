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
        $date_month_8 = [ 12, 19, 26 ];
        $match_month_8 = [[   [19, 2], [18, 10], [14, 16], 
                               [13, 17], [12, 20], [7, 15],
                               [6, 8], [5, 4], [3, 11], [1, 9]     ],
                          [    [20, 14], [17, 5], [16 ,12], [15, 1],
                               [11, 7], [10, 6], [9, 3], [8, 13], 
                               [4, 19], [2, 18]                     ],
                          [    [19, 15], [18, 3], [17, 4], [13, 20],
                               [12, 9], [10, 1], [8, 14], [6, 16], 
                               [5, 7], [2, 11]                       ]];
        $this->command->info('ScheduleTableSeeder');
        

        for( $i = 0; $i < count($date_month_8); $i++ ) {
            $date = new DateTime();
            $date->setDate(2017, 8, $date_month_8[$i] );
            $date->setTime(21, 00);
            for( $j = 0; $j < count($match_month_8[$i]); $j++ ) {
                $schedule = [ 'date' => $date , 'time' => $date, 'home_team_id' => $match_month_8[$i][$j][0], 'away_team_id' => $match_month_8[$i][$j][1], 'created_at' => new DateTime() ];
                array_push($schedules, $schedule);
            }
        }

        App\Schedule::truncate();
        App\Schedule::insert($schedules);
    }
}
