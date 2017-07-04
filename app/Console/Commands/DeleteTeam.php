<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DeleteTeam extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'delete:team';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete team';

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
            $id = $this->ask('Please enter team id that you want to delete');
            $team = \App\Team::find($id);
            $team->delete();
            $this->info('Delete success!!');
        }else {
            $this->info('Your password is incorrect!!');
            exit;
        }
    }
}
