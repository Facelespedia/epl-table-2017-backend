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
    protected $signature = 'show:teamlist';

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
        $this->info('Display this on the screen');
    }
}
