<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CreateJsonData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:json_data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command create json data';

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

        $schedules = \App\Schedule::all();
        $teams = \App\Team::all();

        $response['schedules'] = $schedules;
        $response['teams'] = $teams;

        $fp = fopen('epl_data.json', 'w');
        fwrite($fp, json_encode($response));
        fclose($fp);
    }
}
