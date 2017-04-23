<?php
namespace App\Http\Controllers;
use App\Dates;

use Illuminate\Http\Request;

class DatesController extends Controller
{

    public function getDatesOverlook()
    {
        return view('dates/datesOverlook');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function edit_dates(Request $request)
    {
        $this->validate($request, [
            'reg_teams' => 'date_format:d-m-Y',
            'reg_regions' => 'date_format:d-m-Y',
            'edit_teams' => 'date_format:d-m-Y',
            'edit_members' => 'date_format:d-m-Y'
        ]);

        $reg_teams = $request['reg_teams'];
        $reg_regions = $request['reg_regions'];
        $edit_teams = $request['edit_teams'];
        $edit_members = $request['edit_members'];

        $dates = Dates::find(0);

        $dates->reg_teams = $reg_teams;
        $dates->reg_regions = $reg_regions;
        $dates->edit_teams = $edit_teams;
        $dates->edit_members = $edit_members;

        $dates->update();

        return redirect()->route('teams');
    }
}