<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Article;
use App\Comment;
use Request;
use Carbon\Carbon;
use Auth;

class ArticlesCommentsController extends Controller
{

    public function __construct()
    {

    }


    public function store($articleId)
    {
        $comment = Request::user()->comments()->create([
            'body' => Request::input('body'),
        ]);

        $article = Article::find($articleId);

        $article->comments()->save($comment);

        return redirect()->back();
    }
}
