<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralsController extends Controller
{
    
	public function team()
	{
		return view('web.general.team');
	}

	public function conditions()
	{
		return view('web.general.conditions');
	}

	public function regions()
	{
		return view('web.general.regions');
	}

}
