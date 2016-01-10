<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use App\Opportunity;
class PagesController extends Controller
{
    public function about(){

        $name = "Prince";
        $address = "dhaka";

        return view('pages.about', compact('name', 'address'));

    }

    public function contact(){

        return view('pages.contact');

    }

    public function home(){
        $articles = Article::latest()->get();
        $opportunities = Opportunity::all()->sort();
//        return view('articles.index', compact('articles'));
        return view('pages.home', compact('articles', 'opportunities'));

    }

}
