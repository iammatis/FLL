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

        // $datum = \DateTime::createFromFormat('d/m/Y', $request['date'])->format('Y-m-d');

        $newDate = new Date();
        $newDate->name = $$request['name'];;
        $newDate->date = \DateTime::createFromFormat('d/m/Y', $request['date'])->format('Y-m-d');
        $newDate->save();

        \Toastr::success('Dátum bol úspešne pridaný!', 'Úspešne pridané');
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

        \Toastr::success('Informácie o dátume boli úspešne zmenené!', 'Úspešne zmenené');
        return redirect()->back();
    }

    public function delete(Date $date)
    {
        $date->delete();

        \Toastr::success('Dátum bol úspešne zmazaný!', 'Úspešne zmazané');
        return redirect()->back();
    }

}