<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CreateJsonSchedule extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:json_schedule';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command create json schedule';

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
        $response = array();
        $posts = array();

        $posts[] = \App\Schedule::all();

        $response['schedules'] = $posts;

        $fp = fopen('schedules.json', 'w');
        fwrite($fp, json_encode($response));
        fclose($fp);
    }
}
