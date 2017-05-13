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
        	for ($i=(int)$splitRange[0]; $i <= (int)$splitRange[1]; $i++) {
                if (IDs::where('fll_id', '=', $i)->exists()) {
                    \Toastr::error('IDs obsahovalo id, ktoré sa v databáze už nachádza!', 'IDs nepridané');
                    return redirect()->route('teams/index');
                }
        		$fllid = new IDs();
        		$fllid->fll_id = $i;
        		$fllid->save();
        	}
        }else{
            if (IDs::where('fll_id', '=', $ids)->exists()) {
                \Toastr::error('IDs obsahovalo id, ktoré sa v databáze už nachádza!', 'IDs nepridané');
                return redirect()->route('teams/index');
            }
        	$fllid = new IDs();
	        $fllid->fll_id = $ids;
	        $fllid->save();
        }

        \Toastr::success('IDs boli úspešne pridané!', 'Úspešne pridané');
        return redirect()->route('teams/index');
    }
}
