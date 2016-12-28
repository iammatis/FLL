<?php
namespace App\Http\Controllers;

use App\Coach;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CoachController extends Controller
{
    public function getCoachForm()
    {
        return view('coach_form');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createCoach(Request $request)
    {
        $this->validate($request, [
            'meno' => 'required|min:3',
            'priezvisko' => 'required',
            'telefon' => 'required|numeric|min:8'
        ]);

        $meno = $request['meno'];
        $priezvisko = $request['priezvisko'];
        $telefon = $request['telefon'];

        $coach = new Coach();
        $coach->meno = $meno;
        $coach->priezvisko = $priezvisko;
        $coach->telefon = $telefon;
        $coach->user_id = Auth::id();

        $message = "There was an error";
        $message_code = 0;
        if($coach->save())
        {
            $message = "You successfully became a coach!";
            $message_code = 1;
        }

        return redirect()->route('dashboard')->with(['message' => $message, 'message_code' => $message_code]);
    }
}