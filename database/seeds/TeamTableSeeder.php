<?php

use Illuminate\Database\Seeder;

class TeamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('TeamTableSeeder');
        $teams = array();
        for( $i = 0 ; $i < 5 ; $i++ ) {
             $team = [
            'club' => 'Liverpoll',
            'played' => '0',
            'won' => '0',
            'drawn' => '0',
            'lost' => '0',
            'goal_for' => '0',
            'goal_against' => '0',
            'goal_difference' => '0',
            'points' => '0',
            ];
           array_push($teams, $team);
        }
        // $obj = json_decode (json_encode ($teams), FALSE);
        // var_dump($teams);
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        App\Team::truncate();
        App\Team::insert($teams);
    }
}
