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
        $newDate->name = $request['name'];
        $newDate->date = \DateTime::createFromFormat('d/m/Y', $request['date'])->format('Y-m-d');
        $newDate->save();

        \Toastr::success('Dátum bol úspešne pridaný!', 'Úspešne pridané');
        return redirect()->route('dates');
    }

    public function patch(Request $req)
    {

        $dates = Date::all();

        foreach ($dates as $date) { // Validácia existujúcich dátumov
            $this->validate($req, [
                'name'.$date->id => 'required',
                'date'.$date->id => 'required'
            ]);
        }

        foreach ($dates as $datum) // Uloží všetky zmeny na už existujúcih dátumoch
        {
            $datum->name = $req['name'.$datum->id];
            $datum->info = $req['info'.$datum->id] ? $req['info'.$datum->id] : "";
            $datum->date = \DateTime::createFromFormat('d/m/Y', $req['date'.$datum->id])->format('Y-m-d');
            $datum->save();
        }

        if($req['newName'] && $req['newDate']) // At least one but not both
        {
            $datum = new Date();
            $datum->name = $req['newName'];
            $datum->info = $req['newInfo'.$datum->id] ? $req['newInfo'.$datum->id] : "";
            $datum->date = \DateTime::createFromFormat('d/m/Y', $req['newDate'])->format('Y-m-d');
            $datum->save();
            \Toastr::success('Nový dátum úspešne pridaný!', 'Dátum úspešne pridaný');

        }elseif ($req['newName'] && !$req['newDate']) {
            \Toastr::error('Nový dátum vyžaduje dátum!', 'Chyba v novom dátume');

        }elseif (!$req['newName'] && $req['newDate']) {
            \Toastr::error('Nový dátum vyžaduje názov!', 'Chyba v novom dátume');
        }

        \Toastr::success('Zmenené dátumy boli úspešne upravené!', 'Dátumy úspešne pridané');
        return redirect()->back();

    }

    public function delete(Date $date)
    {
        $date->delete();

        \Toastr::success('Dátum bol úspešne zmazaný!', 'Úspešne zmazané');
        return redirect()->back();
    }

}