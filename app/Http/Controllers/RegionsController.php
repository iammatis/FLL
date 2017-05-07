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

		foreach ($regions as $region) // Zvaliduje už existujúce regióny
		{
			$this->validate($request, [
	            'region'.$region->id => 'required'
        	]);
		}

		foreach ($regions as $region) { // Uloží všetky zmeny na už existujúcih regiónoch
			$region->name = $request['region'.$region->id];
			$region->active = $request['check'.$region->id] ? 1 : 0;
			$region->save();
		}

		if($request['newRegion'])
		{
			$reg = new Region();
			$reg->name = $request['newRegion'];
			$reg->active = $request['newCheck'] ? 1 : 0;
			$reg->save();
			\Toastr::success('Región bol úspešne pridaný!', 'Úspešne pridanie regiónu');
		}elseif ($request['newCheck'] && !$request['newRegion']) {
			\Toastr::error('Chýbajúci názov regiónu!', 'Chyba v novom regióne');
		}

		\Toastr::success('Regióny boli úspešne zmenené!', 'Úspešne zmenenie regiónov');
		return redirect()->back();

	}

	public function delete(Region $region)
	{
		$region->delete();

		\Toastr::success('Región bol úspešne zmazaný!', 'Úspešne zmazanie regiónu');
        return redirect()->back();
	}

}
