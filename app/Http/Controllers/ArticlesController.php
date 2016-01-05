<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Article;
use Request;
use Carbon\Carbon;
use Auth;
use App\Category;

class ArticlesController extends Controller
{
    public function index()
    {
        if (Request::has('filterBycategory_id')){
            $articles = Article::where('category_id', Request::input('filterBycategory_id'))->get();
        }else{
            $articles = Article::latest()->get();
        }
        return view('articles.index', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.show', compact('article'));
    }

    public function create()
    {
        $categories = Category::lists('name', 'id')->sort();
        return view('articles.create', compact('categories'));
    }

    public function store()
    {
        $input = Request::all();
        $article = Article::create($input);
        $article->user_id = Auth::user()->id;
        $article->save();
        return redirect('articles');
    }

    public function delete($id)
    {
        $article = Article::find($id);
        $article->delete();
        return redirect('articles');
    }
}
