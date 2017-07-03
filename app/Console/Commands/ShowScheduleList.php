<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ShowScheduleList extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'show:schedulelist {limit=0}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Show all schedule list';

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
            $header = ['#', 'Date', 'Time', 'Home Team', 'Away Team'];
            if($limit == 0) {
                $schedules = \App\Schedule::all();
            }else {
                $schedules = \App\Schedule::limit($limit)->get();
            }
            $this->table($header, $schedules);
        }else {
            $this->info('Your password is incorrect!!');
            exit;
        }
        
    }
}
