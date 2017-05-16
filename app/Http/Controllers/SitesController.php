<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tournament;
use App\Sites;

class SitesController extends Controller
{
    
    public function show($year, $id)
	{
		$site = Sites::find($id)->first();

		return view('web.sites.show', compact('site'));
	}

	public function showTeam($year)
	{
		$regions = Tournament::select('region_id')->where('year', $year)->groupBy('region_id')->get(); // regions
		$teams = Tournament::where('year', $year)->get();

		return view('web.sites.teams', compact('regions', 'year'));
	}

}
