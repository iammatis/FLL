<?php
namespace App\Http\Controllers;

class UsersController extends Controller
{
    public function getUsersOverlook()
    {
        return view('users/usersOverlook');
    }

    public function getUsersAddUser()
    {
        return view('users/usersAddUser');
    }
}