<?php
namespace App\Http\Controllers;

use App\Role;

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
}