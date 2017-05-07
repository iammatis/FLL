<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tournament;
use App\TournamentArchive;
use App\Date;
use App\Region;
use App\Aditional;

class TournamentsController extends Controller
{

	public function new(Request $request)
	{
		$this->validate($request, [
            'year' => 'required|unique:tournaments|unique:tournament_archives'
        ]);

		\Eloquent::unguard();
		$ad = Aditional::all()->first();
		$ad->update([
			'year' => $request['year']
		]);

        $tours = Tournament::all();
        foreach ($tours as $tour) {
        	TournamentArchive::insert([
        		'team_id' => $tour->team_id,
        		'region_id' => $tour->region_id,
        		'year' => $tour->year
        	]);
        }

        Tournament::truncate();

		return redirect()->back();
	}
    
	public function index()
	{
		$tours = Tournament::all();

		return view('admin.tournaments.index', compact('tours'));
	}

	public function archive()
	{
		$tours = TournamentArchive::all();

		return view('admin.tournaments.archive', compact('tours'));
	}

	public function settings()
	{
		$dates = Date::all();
		$regions = Region::all();
		$count = count($regions);
		$first = intdiv($count, 2) + 1;

		return view('admin.tournaments.settings', compact('dates', 'regions', 'count', 'first'));
	}

}
