<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ShowTeamList extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'show:teamlist {limit=0}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Show all team list';

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
        
        $limit = $this->argument('limit');
        $password = $this->secret('Please enter your password!');

        if($password == '123456') {
            $header = ['ID', 'Club', 'Played', 'Won', 'Drawn', 'Lost', 'GF', 'GA', 'GD', 'Points'];
            if($limit == 0) {
                $teams = \App\Team::all();
            }else {
                $teams = \App\Team::limit($limit)->get();
            }
            $this->table($header, $teams);
        }else {
            $this->info('Your password is incorrect!!');
            exit;
        }
        
    }
}
