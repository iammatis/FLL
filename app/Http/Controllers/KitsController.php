<?php
namespace App\Http\Controllers;

use App\Kit;
use App\KitsLeft;
use Illuminate\Http\Request;

class KitsController extends Controller
{
    public function index()
    {
        return view('admin.kits.index');
    }

    public function patch(Request $request, Kit $kit)
    {

        $this->validate($request, [
            'sent' => 'required',
            'package' => 'required'
        ]);

		\Eloquent::unguard();

		$sent = $request['sent'] ? \DateTime::createFromFormat('d/m/Y', $request['sent'])->format('Y-m-d') : null;

		$kit->update([
		    'sent' => $sent,
            'package_id' => $request['package']
		]);

        $kitsLeft = KitsLeft::find(1);
        $cnt = $kitsLeft->count;
        $kitsLeft->count = $cnt - 1;
        $kitsLeft->save();

        \Toastr::success('Informácie o stavebnici boli úspešne zmenené!', 'Úspešne zmenené');
		return redirect()->back();

    }
    
}