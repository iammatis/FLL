<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tournament;
use App\Sites;
use App\Date;
use App\Aditional;

class SitesController extends Controller
{
    
    public function show($year, $id)
	{
		$site = Sites::find($id);

		return view('web.sites.show', compact('site'));
	}

    public function showTeam($year)
    {
        $regions = Tournament::select('region_id')->where('year', $year)->groupBy('region_id')->get(); // regions
        $teams = Tournament::where('year', $year)->get();

        return view('web.sites.teams', compact('regions', 'year'));
    }

    public function showCalendar()
    {
        $year = Aditional::all()->first()->year;
        $dates = Date::orderBy('date', 'desc')->get();

        return view('web.sites.dates', compact('dates', 'year'));
    }

	public function index()
	{
		$sites = Sites::all();
		return view('admin.sites.index', compact('sites'));
	}

    public function edit(Sites $site)
    {
        return view('admin.sites.edit', compact('site'));
    }

    public function patch(Request $request, Sites $site)
    {
        $this->validate($request, [
        	'parent' => 'required',
            'name' => 'required',
            'summer' => 'required'
        ]);

        $site->parent = $request['parent'];
        $site->name = $request['name'];
        $site->text = $request['summer'];
        $site->save();

        return redirect()->action('SitesController@index');
    }

    public function create()
    {
    	return view('admin.sites.create');
    }

    public function post(Request $request)
    {
        $this->validate($request, [
        	'parent' => 'required',
            'name' => 'required',
            'summer' => 'required'
        ]);

        $site = new Sites();
        $site->parent = $request['parent'];
        $site->name = $request['name'];
        $site->text = $request['summer'];
        $site->save();

        return redirect()->action('SitesController@index');
    }

    public function delete(Sites $site)
    {
        $site->delete();

        \Toastr::success('Text bol úspešne zmazaný!', 'Úspešne zmazané');
        return redirect()->back();
    }

}
