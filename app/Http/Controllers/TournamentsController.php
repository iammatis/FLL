<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tournament;
use App\TournamentArchive;
use App\Date;
use App\Region;
use App\Aditional;
use App\Team;
use App\IDs;
use App\Kit;
use App\Invoice;

class TournamentsController extends Controller
{

	public function register(Request $request, Team $team)
	{

		$yr = Aditional::all()->first();
		$fll = IDs::latest()->first();

		$tour = new Tournament();
		$tour->team_id = $team->id;
		$tour->region_id = $request['tournament'];
		$tour->year = $yr->year;
		$tour->fll_id = $fll->fll_id;
		$tour->save();

		IDs::latest()->first()->delete();

		// Automatically add to kits
		$kit = new Kit();
		$kit->team_id = $team->id;
		$kit->save();

		// Automatically add to invoices
		$invoice = new Invoice();
		$invoice->team_id = $team->id;
		$invoice->registration = new \Carbon\Carbon();
		$invoice->save();

		return redirect()->back();

	}

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
        		'year' => $tour->year,
        		'fll_id' => $tour->fll_id
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
