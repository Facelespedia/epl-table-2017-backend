<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CreateJsonTeam extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:json_team';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command create json team';

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

        $posts[] = \App\Team::all();

        $response['teams'] = $posts;

        $fp = fopen('teams.json', 'w');
        fwrite($fp, json_encode($response));
        fclose($fp);
    }
}
