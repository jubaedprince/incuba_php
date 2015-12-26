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
//    public function index($id)
//    {
//
//        $comments = Comment::where('article_id', $id)->get();
//        return $comments;
//        return view('articles.index', compact('articles'));
//    }

//    public function show($articleId, $commentId)
//    {
//
//        $comment = Comment::findOrFail($commentId);
//        return $comment;
//        return view('articles.show', compact('article'));
//    }

//    public function create()
//    {
//        return "write comment";
//        return view('articles.create');
//    }

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
