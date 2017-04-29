<?php
namespace App\Http\Controllers;

class InvoicesController extends Controller
{
    public function index()
    {
        return view('invoices.index');
    }

}