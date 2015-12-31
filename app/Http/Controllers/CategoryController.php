<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
use Request;
use App\Article;
class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all()->sort();
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $input = Request::all();
        $category = Category::create($input);
        return redirect('category');
    }


    public function destroy($id)
    {
        $articles = Article::where('category_id', $id)->get();
        if ($articles){
            foreach($articles as $article){
                $article->delete();
            }
        }
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect('category');
    }
}
