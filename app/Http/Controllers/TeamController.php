<?php
namespace App\Http\Controllers;

use App\Team;
use App\IDs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Member;
use App\Date;

class TeamController extends Controller
{
    public function create()
    {
        return view('web.teams.create');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|unique:teams',
            'organization' => 'required|min:5',
            'address' => 'required|min:5',
            'city' => 'required'
        ]);

        $count = $request['count'];

        // for ($i=1; $i <= $count; $i++) { 
        //     $this->validate($request, [
        //         'member'.$i => 'required',
        //         'birth'.$i => 'required'
        //     ]);
        // }

        $team = new Team();
        $team->user_id = Auth::user()->id;
        $team->name = $request['name'];
        $team->organization = $request['organization'];
        $team->address = $request['address'];
        $team->city = $request['city'];
        $team->save();

        for ($i=1; $i <= $count; $i++) { 
            $member = new Member();
            $member->name = $request['member'.$i];
            $member->birth = \DateTime::createFromFormat('d/m/Y', $request['birth'.$i])->format('Y-m-d');
            $member->team_id = $team->id;
            $member->save();
        }

        return redirect()->route('settings', Auth::user()->id);
    }

    public function show(Team $team)
    {
        $tm = $team;
        $members = Member::where('team_id', $tm->id)->get();
        return view('web.teams.show', compact('tm', 'members'));
    }

    public function edit(Request $request, Team $team)
    {
        $members = Member::where('team_id', $team->id)->get();

        $this->validate($request, [
            'name' => 'required',
            'organization' => 'required|min:5',
            'address' => 'required|min:5',
            'city' => 'required'
        ]);

        $count = $request['count'];

        for ($i=0; $i < $count; $i++) {
            // $datum = Date::where('name', 'Registrácia')->first()->date;
            // $to = date('d/m/Y', strtotime($datum . ' -9 years'));
            // $from = date('d/m/Y', strtotime($datum . ' -17 years'));

            $this->validate($request, [
                'member'.$i => 'required',
                'birth'.$i => 'required'
                // 'birth'.$i => 'required|before:'.$to.'|after:'.$from
                // 'birth'.$i => 'required|after:'.$from
            ]);
        }

        $team->name = $request['name'];
        $team->organization = $request['organization'];
        $team->city = $request['city'];
        $team->address = $request['address'];
        $team->save();

        foreach ($members as $member) { // Old members
            $member->name = $request['member'.$member->id];
            $member->birth = \DateTime::createFromFormat('d/m/Y', $request['birth'.$member->id])->format('Y-m-d');
            $member->save();
        }

        for ($i=0; $i < $count; $i++) { // New members
            $member = new Member();
            $member->name = $request['member'.$i];
            $member->birth = \DateTime::createFromFormat('d/m/Y', $request['birth'.$i])->format('Y-m-d');
            $member->team_id = $team->id;
            $member->save();
        }

        return redirect()->route('settings', Auth::user()->id);
    }

    public function delete(Member $member)
    {

        $name = $member->name;
        $member->delete();

        \Toastr::success('Člen tímu '. $name .' bol úspešne zmazaný.', 'Člen zmazaný');

        return redirect()->back();
    }
}