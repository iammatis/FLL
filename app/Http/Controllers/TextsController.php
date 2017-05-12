<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TournamentTexts;
use App\RegionTexts;

class TextsController extends Controller
{

	public function show($tour_id, $region_id)
	{
		$tour = TournamentTexts::find($tour_id);
		$region = RegionTexts::find($region_id);

		return view('web.texts.show', compact('tour', 'region'));
	}

	public function index()
	{
		$tours = TournamentTexts::all();
		$regions = RegionTexts::all();
		$arr = array();

		$temp = array();
		foreach ($regions as $region) {
			array_push($arr[$region->year], $region->toArray());
		}

		return view('admin.texts.index', compact('tours', 'arr'));
	}

}
