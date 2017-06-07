<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Role;
use Hash;

class UserController extends Controller
{

    public function index()
    {
        return view('admin.users.index');
    }

    public function create()
    {
        $roles = Role::all();

        return view('admin.users.create', compact('roles'));
    }

    public function register()
    {
    	return view('web.users.register');
    }

    public function showPassword()
    {
        $user = Auth::user();
        return view('web.coach.pass', compact('user'));
    }

    public function editPassword(Request $request)
    {

        $this->validate($request, [
            'current-password' => 'required',
            'password' => 'required|min:4|confirmed'
        ]);

        $user = Auth::user();

        if (Hash::check($request['current-password'], $user->password)) {
            $user->password = bcrypt($request['password']);
            $user->save();
        }else {
            \Toastr::error('Staré heslo sa nezhoduje!', 'Zlé staré heslo!');
            return redirect()->back();
        }

        \Toastr::success('Vaše heslo bolo úspešne zmenené!', 'Heslo zmenené!');
        return redirect()->route('settings', $user->id);
    }

}