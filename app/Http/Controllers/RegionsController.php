<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Region;

class RegionsController extends Controller
{
    
	public function index()
	{
		$regions = Region::all();
		$count = count($regions);
		$first = intdiv($count, 2) + 1;

		return view('admin.regions.index', compact('regions', 'count', 'first'));
	}

	public function patch(Request $request)
	{

		$regions = Region::all();
		$count = count($regions);

		for($i = 0; $i < $count; $i++) // Zvaliduje už existujúce regióny
		{
	        $this->validate($request, [
	            'region'.$i => 'required'
        	]);
		}

		$j = 0;
		foreach ($regions as $region) { // Uloží všetky zmeny na už existujúcih regiónoch
			$region->name = $request['region'.$j];
			$region->active = $request['check'.$j] ? 1 : 0;
			$region->save();
			$j++;
		}

		if($request['newRegion'])
		{
			$reg = new Region();
			$reg->name = $request['newRegion'];
			$reg->active = $request['newCheck'] ? 1 : 0;;
			$reg->save();
		}

		return redirect()->back();

	}

	public function delete(Region $region)
	{
		$region->delete();

		\Toastr::success('Región bol úspešne zmazaný!', 'Úspešne zmazané');
        return redirect()->back();
	}

}
