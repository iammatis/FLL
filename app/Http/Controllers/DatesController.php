<?php
namespace App\Http\Controllers;
use App\Dates;

class DatesController extends Controller
{

    public function index()
    {
        $dates = Dates::all();

        return view('admin.dates.index', compact('dates'));
    }

    public function update(\Request $request, Dates $date)
    {
        $date = Dates::find();

        $date->datum = $request['datum_reg'];
        $date->save();
    }

}