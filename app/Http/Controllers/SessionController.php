<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            return redirect()->route('home');
        }
        return redirect()->back();
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
            'password' => 'required|min:4|confirmed'
        ]);

        $email = $request['email'];
        $full_name = $request['full_name'];
        $password = bcrypt($request['password']);

        $user = new User();
        $user->email = $email;
        $user->full_name = $full_name;
        $user->password = $password;
        $user->save();

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
        return redirect()->route('home');
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
