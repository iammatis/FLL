<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	/*----------  Web Users  ----------*/

    	DB::table('permissions')->insert([
        	'name' => 'create-coach',
        	'display_name' => 'Create Coach',
        	'description' => 'Registred User Can become coach',
    	]);
    	
    	DB::table('permissions')->insert([
        	'name' => 'create-team',
        	'display_name' => 'Create Team',
        	'description' => 'Can create his/her team',
    	]);

		DB::table('permissions')->insert([
        	'name' => 'create-coachAd',
        	'display_name' => 'Create coach Ad',
        	'description' => 'Can create ad searching for team',
    	]);

		DB::table('permissions')->insert([
        	'name' => 'create-userAd',
        	'display_name' => 'Create user Ad',
        	'description' => 'Can create ad searching for coach',
    	]);

    	/*----------  DashBoard Users  ----------*/
        
    	DB::table('permissions')->insert([
        	'name' => 'edit-teams',
        	'display_name' => 'Edit Teams',
        	'description' => 'Edit existing teams',
    	]);

		DB::table('permissions')->insert([
        	'name' => 'control-users',
        	'display_name' => 'Control Users',
        	'description' => 'Can create/edit/delete dashboard users',
    	]);

    	DB::table('permissions')->insert([
        	'name' => 'control-dates',
        	'display_name' => 'Control dates',
        	'description' => 'Can create/edit/delete dates',
    	]);

		DB::table('permissions')->insert([
        	'name' => 'control-invoices',
        	'display_name' => 'Control Invoices',
        	'description' => 'Can create/edit/delete invoices',
    	]);

    	DB::table('permissions')->insert([
        	'name' => 'control-news',
        	'display_name' => 'Control News',
        	'description' => 'Can create/edit/delete news',
    	]);

    }
}
