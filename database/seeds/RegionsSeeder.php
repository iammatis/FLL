<?php

use Illuminate\Database\Seeder;

class RegionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    	DB::table('regions')->insert([
    		[
    			'name' => 'Bratislava',
    			'active' => 1,
    		],
    		[
    			'name' => 'Petržalka',
    			'acitve' => 0,
    		],
    		[
    			'name' => 'Košice',
    			'acitve' => 1,
    		],
    		[
    			'name' => 'Poprad',
    			'acitve' => 1,
    		],
    		[
    			'name' => 'Žilina',
    			'acitve' => 1,
    		],
    		[
    			'name' => 'Žiar nad Hronom',
    			'acitve' => 0,
    		],
    		[
    			'name' => 'Banská Bystrica',
    			'acitve' => 1,
    		]
    		]);

    }
}
