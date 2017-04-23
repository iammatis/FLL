<?php
namespace App\Http\Controllers;

class NewsController extends Controller
{
    public function getNewsOverlook()
    {
        return view('news/newsOverlook');
    }

    public function getNewsAddNews()
    {
        return view('news/newsAddNews');
    }

}