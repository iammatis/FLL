<?php
namespace App\Http\Controllers;

use App\Kit;
use Illuminate\Http\Request;

class KitsController extends Controller
{
    public function index()
    {
        return view('admin.kits.index');
    }

    public function patch(Request $request, Kit $kit)
    {

		\Eloquent::unguard();

		$sent = $request['sent'] ? \DateTime::createFromFormat('d/m/Y', $request['sent'])->format('Y-m-d') : null;

		$kit->update([
		    'sent' => $sent
		]);

		return redirect()->back();

    }

}