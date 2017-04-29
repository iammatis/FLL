<?php
namespace App\Http\Controllers;

class KitsController extends Controller
{
    public function index()
    {
        return view('kits.index');
    }

    public function store()
    {
        return view('kits.store');
    }

}