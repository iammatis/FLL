<?php
namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function post(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'summer' => 'required'
        ]);

        $news = new News();
        $news->user_id = Auth::user()->id;
        $news->title = $request['title'];
        $news->text = $request['summer'];
        $news->save();

        return redirect()->action('NewsController@index');
    }

    public function edit(News $news)
    {
        return view('admin.news.edit', compact('news'));
    }

    public function patch(Request $request, News $news)
    {
        $this->validate($request, [
            'title' => 'required',
            'summer' => 'required'
        ]);

        $news->title = $request['title'];
        $news->text = $request['summer'];
        $news->save();

        return redirect()->action('NewsController@index');
    }

    public function delete(News $news)
    {
        $news->delete();

        \Toastr::success('Novinka bol úspešne zmazaná!', 'Úspešne zmazané');
        return redirect()->back();
    }

}