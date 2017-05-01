<?php
namespace App\Http\Controllers;

use App\Date;
use Illuminate\Http\Request;

class DatesController extends Controller
{

    public function index()
    {
        $dates = Date::all();

        return view('admin.dates.index', compact('dates'));
    }

    public function create(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|min:5',
            'date' => 'required'
        ]);

        $name = $request['name'];
        $datum = \DateTime::createFromFormat('d/m/Y', $request['date'])->format('Y-m-d');

        $newDate = new Date();
        $newDate->name = $name;
        $newDate->date = $datum;
        $newDate->save();

        return redirect()->route('dates');
    }

    public function patch(Request $request, Date $date)
    {

        \Eloquent::unguard();

        $datum = \DateTime::createFromFormat('d/m/Y', $request['date'])->format('Y-m-d');

        $date->update([
            'name' => $request['name'],
            'date' => $datum
        ]);

        return redirect()->back();
    }

    public function delete(Date $date)
    {
        $date->delete();

        return redirect()->back();
    }

}