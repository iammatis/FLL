<?php
namespace App\Http\Controllers;

use App\Team;
use App\IDs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeamController extends Controller
{
    public function create()
    {
        return view('web.teams.create');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'team_name' => 'required|unique:teams',
            'organization' => 'required|min:5',
            'address' => 'required|min:5'
        ]);

        $fll = IDs::latest()->first();

        $team = new Team();
        $team->user_id = Auth::user()->id;
        $team->team_name = $request['team_name'];
        $team->organization = $request['organization'];
        $team->address = $request['address'];
        $team->fll_id = $fll->fll_id;
        $team->save();

        IDs::latest()->first()->delete();

        return redirect()->route('web/index');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createTeam(Request $request)
    {
        $this->validate($request, [
            'team_name' => 'required|unique:teams',
            'organization' => 'required|min:5',
            'address' => 'required|min:5'
        ]);

        $team_name = $request['team_name'];
        $organization = $request['organization'];
        $address = $request['address'];

        $team = new Team();
        $team->team_name = $team_name;
        $team->organization = $organization;
        $team->address = $address;

        $message = "There was an error";
        $message_code = 0;
        if($request->user()->coach->team()->save($team))
        {
            $message = "Team successfully created!";
            $message_code = 1;
        }

        return redirect()->route('dashboard')->with(['message' => $message, 'message_code' => $message_code]);
    }
}