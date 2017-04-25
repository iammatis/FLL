<?php
namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getDashboard()
    {
        return view('dashboard');
    }

    public function getUsersOverlook()
    {
        return view('users/usersOverlook');
    }

    public function getUsersAddUser()
    {
        return view('users/usersAddUser');
    }

    public function postSignIn(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt(['email' => $request['email'], 'password' => $request['password']]))
        {
            return redirect()->route('dashboard');
        }
        return redirect()->back();
    }

    public function postSignUp(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|unique:users',
            'full_name' => 'required|max:120',
            'password' => 'required|min:4',
            'repeatpassword' => 'required|min:4|same:password'
        ]);

        $email = $request['email'];
        $full_name = $request['full_name'];
        $password = bcrypt($request['password']);

        $user = new User();
        $user->email = $email;
        $user->full_name = $full_name;
        $user->password = $password;
        $user->save();

        return redirect()->route('usersOverlook');
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}