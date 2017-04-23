<?php
namespace App\Http\Controllers;

class InvoicesController extends Controller
{
    public function getInvoicesOverlook()
    {
        return view('invoices/invoiceOverlook');
    }

}