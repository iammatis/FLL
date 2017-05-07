<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Team;
use App\Aditional;

class TeamsController extends Controller
{
    public function index()
    {
    	$teams = Team::orderBy('created_at', 'desc')->limit('5')->cursor();
    	$aditional = Aditional::all()->first();

        return view('admin.teams.index', compact('teams', 'aditional'));
    }

    public function all()
    {
        return view('admin.teams.all');
    }

}