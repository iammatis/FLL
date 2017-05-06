<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coach;
use App\Role;
use Illuminate\Support\Facades\Auth;

class CoachController extends Controller
{
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

        $address = $request['address'];
        $phone = $request['phone'];

        $coach = new Coach();
        $coach->address = $address;
        $coach->phone = $phone;
        $coach->save();

        $role = Role::where('name', 'coach')->first();
        Auth::user()->attachRole($role);

        return redirect()->route('home');

    }

}
