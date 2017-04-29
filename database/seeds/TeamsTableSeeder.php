<?php

use Illuminate\Database\Seeder;
use App\Team;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	for ($i=0; $i < 30; $i++) { 

            $team = new Team();
            $team->coach_id = 1;
            $team->team_name = str_random(20);
            $team->organization = str_random(25);
            $team->address = str_random(40);
            $team->save();

    	}

    }
}
