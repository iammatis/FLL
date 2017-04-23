<?php
namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeamsController extends Controller
{
    public function getTeamsOverlook()
    {
        return view('teams/teams_overlook');
    }

    public function getTeamsAdministration()
    {
        return view('teams/teams_administration');
    }

}