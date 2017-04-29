<?php
namespace App\Http\Controllers;

class KitsController extends Controller
{
    public function index()
    {
        return view('admin.kits.index');
    }

    public function store()
    {
        return view('admin.kits.store');
    }

}