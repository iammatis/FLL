<?php
namespace App\Http\Controllers;

//use App\Team;
//use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getIdAssign()
    {
        return view('admin/id_assign');
    }

    public function getTeams()
    {
        return view('admin/teams');
    }
}