<?php

use Illuminate\Database\Seeder;
use App\News;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i=0; $i < 10; $i++) { 
			$news = new News();
			$news->user_id = 1;
	        $news->title = str_random(16);
	        $news->text = file_get_contents('http://loripsum.net/api');
	        $news->save();
    	}
    }
}
