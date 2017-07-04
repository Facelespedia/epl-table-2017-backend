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
        $team_name = ['Arsenal', 'Bournemouth', 'Brighton and Hove Albion', 'Burnley', 'Chelsea',
                      'Crystal Palace', 'Everton', 'Huddersfield Town', 'Leicester City', 'Liverpool',
                      'Manchester City', 'Manchester United', 'Newcastle United', 'Southampton', 'Stoke City',
                      'Swansea City', 'Tottenham Hotspur', 'Watford', 'West Bromwich Albion', 'West Ham United'
                        ];
        for( $i = 0 ; $i < 20 ; $i++ ) {

            $team = [
                'club' => $team_name[$i],
                'played' => '0',
                'won' => '0',
                'drawn' => '0',
                'lost' => '0',
                'goal_for' => '0',
                'goal_against' => '0',
                'goal_difference' => '0',
                'points' => '0',
                'created_at' => new DateTime()
            ];
           array_push($teams, $team);
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        App\Team::truncate();
        App\Team::insert($teams);
    }
}
