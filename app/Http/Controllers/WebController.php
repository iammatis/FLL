<?php
namespace App\Http\Controllers;

use App\News;

class WebController extends Controller
{
    public function index()
    {

    	$recent = News::all()->first();
    	$first = News::skip(1)->take(3)->get();
    	$second = News::skip(4)->take(3)->get();

        return view('web.index', compact('recent', 'first', 'second'));
    }

}