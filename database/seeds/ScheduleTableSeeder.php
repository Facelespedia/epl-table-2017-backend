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
        $date = new DateTime();
        $date->setDate(2017, 8, 12);
        $date->setTime(21, 00);
        $this->command->info('ScheduleTableSeeder');
        $schedule = [ 'date' => $date , 'time' => $date];

        App\Schedule::truncate();
        App\Schedule::insert($schedule);
    }
}
