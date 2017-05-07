<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aditional;

class AditionalsController extends Controller
{
    public function patchKitsLeft(Request $request)
    {
        $ad = Aditional::all()->first();
        $cnt = $ad->count;

        \Eloquent::unguard();

		$ad->update([
            'count' => $request['count'] + $cnt
        ]);

        \Toastr::success('Počet stavebníc bol úspešne navýšený!', 'Úspešne navýšené');
        return redirect()->back();
    }
}
