<?php
namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeamsController extends Controller
{
    public function index()
    {
        return view('admin.teams.index');
    }

    public function all()
    {
        return view('admin.teams.all');
    }

}