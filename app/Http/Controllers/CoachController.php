<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coach;
use App\Role;
use Illuminate\Support\Facades\Auth;
use \Colors\RandomColor;
use App\Region;

class CoachController extends Controller
{

    public function settings()
    {
        $user = Auth::user();
        $team = !empty($user->team[0]) ? $user->team[0] : array();
        $members = !empty($team->members) ? $team->members : array();
        $tournament = !empty($team->tournament) ? $team->tournament : array();
        // $colors = RandomColor::many(count($members), array('luminosity'=>'light'));
        $regions = Region::where('active', 1)->get();

        return view('web.coach.settings', compact('user', 'members', 'regions', 'team', 'tournament'));
    }

    public function create()
    {
    	return view('web.coach.create');
    }

    public function store(Request $request)
    {

		$this->validate($request, [
            'address' => 'required',
            'phone' => 'required'
        ]);

        $user = Auth::user();

        $coach = new Coach();
        $coach->user_id = $user->id;
        $coach->address = $request['address'];
        $coach->phone = $request['phone'];
        $coach->save();

        $user->detachRoles($user->roles);
        $user->attachRole(Role::where('name', 'coach')->first());

        return redirect()->view('web.coach.settings', $user);

    }

}
