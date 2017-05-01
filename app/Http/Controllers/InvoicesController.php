<?php
namespace App\Http\Controllers;

use App\Invoice;
use Illuminate\Http\Request;

class InvoicesController extends Controller
{
    public function index()
    {
        return view('admin.invoices.index');
    }

    public function patch(Request $request, Invoice $invoice)
    {
    	\Eloquent::unguard();

    	$registration = \DateTime::createFromFormat('d/m/Y', $request['registration'])->format('Y-m-d');

		$sent = $request['sent'] ? \DateTime::createFromFormat('d/m/Y', $request['sent'])->format('Y-m-d') : null;

		$paid = $request['paid'] ? \DateTime::createFromFormat('d/m/Y', $request['paid'])->format('Y-m-d') : null;

		$invoice->update([
		    'registration' => $registration,
		    'sent' => $sent,
		    'paid' => $paid
		]);

		return redirect()->back();
    }

}