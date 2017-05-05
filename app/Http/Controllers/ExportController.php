<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;

class ExportController extends Controller
{
 
	public function export()
	{
        $table = Team::all();
        $output = implode(",", \DB::getSchemaBuilder()->getColumnListing('teams')) . "\n" ;
        foreach ($table as $row) {
            $output .=  implode(",",$row->toArray());
            $output .= "\n";
        }
        $headers = array(
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="Teams.csv"',
        );

        return \Response::make(rtrim($output, "\n"), 200, $headers);
	}

}
