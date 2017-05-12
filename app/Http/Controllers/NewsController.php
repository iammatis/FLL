<?php
namespace App\Http\Controllers;

use App\News;

class NewsController extends Controller
{
    public function index()
    {
    	$news = News::all();

        return view('admin.news.index', compact('news'));
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function show(News $news)
    {
    	return view('web.news.show', compact('news'));
    }

}