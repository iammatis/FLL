<?php
namespace App\Http\Controllers;

use App\News;

class WebController extends Controller
{
    public function index()
    {

    	$recent = News::orderBy('created_at', 'desc')->first();
    	$first = News::orderBy('created_at', 'desc')->skip(1)->take(3)->get();
    	$second = News::orderBy('created_at', 'desc')->skip(4)->take(3)->get();

        return view('web.index', compact('recent', 'first', 'second'));
    }

}