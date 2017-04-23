<?php
namespace App\Http\Controllers;

class KitsController extends Controller
{
    public function getKitsOverlook()
    {
        return view('kits/kitsOverlook');
    }

    public function getKitsSendKit()
    {
        return view('kits/kitsSendKit');
    }

}