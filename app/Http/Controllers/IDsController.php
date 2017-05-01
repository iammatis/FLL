<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\IDs;

class IDsController extends Controller
{
    public function store(Request $request)
    {
		$this->validate($request, [
            'ids' => 'required'
        ]);

        $ids = $request['ids'];

        if ($str = str_contains($ids, '-')) {
        	$splitRange = explode('-', $ids, 2);
        	for ($i=(int)$splitRange[0]; $i < (int)$splitRange[1]; $i++) { 
        		$fllid = new IDs();
        		$fllid->fll_id = $i;
        		$fllid->save();
        	}
        }else{
        	$fllid = new IDs();
	        $fllid->fll_id = $ids;
	        $fllid->save();
        }

        return redirect()->route('teams/index');
    }
}
