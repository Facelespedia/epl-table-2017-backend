<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class InsertTeam extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'insert:team';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Insert team at parameter';

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
            $name = $this->ask('What is your team name?');
            $team = \App\Team::create();
            $team->club = $name;
            $team->save();
        }else {
            $this->info('Your password is incorrect!!');
            exit;
        }
    }
}
