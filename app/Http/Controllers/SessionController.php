<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;
use App\Role;

class SessionController extends Controller
{

	public function postSignIn(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt(['email' => $request['email'], 'password' => $request['password']]))
        {
            return redirect()->route('settings', Auth::user());
        }
        return redirect()->route('home');
    }

	public function postSignInAdmin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt(['email' => $request['email'], 'password' => $request['password']]))
        {
            return redirect()->route('dashboard');
        }
        return redirect()->route('adminLogin');
    }

    public function postSignUpAdmin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|unique:users',
            'full_name' => 'required|max:120',
            'password' => 'required|min:4|confirmed',
            'rola' => 'required'
        ]);

        $user = new User();
        $user->email = $request['email'];
        $user->full_name = $request['full_name'];
        $user->password = bcrypt($request['password']);
        $user->save();

        $role = Role::where('name', $request['rola'])->first();
        $user->attachRole($role);

        return redirect()->route('users/index');
    }

    public function postSignUp(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:4|confirmed'
        ]);

        $user = new User();
        $user->email = $request['email'];
        $user->full_name = $request['name'];
        $user->password = bcrypt($request['password']);
        $user->save();

        $role = Role::where('name', 'user')->first();
        $user->attachRole($role);

        Auth::login($user);
        return view('web.coach.settings', compact('user'));
    }

    public function getLogoutAdmin()
    {
        Auth::logout();
        return redirect()->route('adminLogin');
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
