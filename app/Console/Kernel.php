<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        Commands\Inspire::class,
        Commands\ShowTeamList::class,
        Commands\ShowScheduleList::class,
        Commands\InsertTeam::class,
        Commands\DeleteTeam::class,
        Commands\EditTeam::class,
        Commands\InsertSchedule::class,
        Commands\EditSchedule::class,
        Commands\DeleteSchedule::class,
        Commands\CreateJsonTeam::class,
        Commands\CreateJsonSchedule::class,
        Commands\CreateJsonData::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();
    }
}
