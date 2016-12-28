<?php
namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function getTeamForm()
    {
        return view('team_form');
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