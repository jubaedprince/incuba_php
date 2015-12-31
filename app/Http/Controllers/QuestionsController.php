<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Question;
use Request;
use Carbon\Carbon;
use Auth;

class QuestionsController extends Controller
{
    public function index()
    {

        $questions = Question::latest()->get();

        return view('questions.index', compact('questions'));
    }

    public function show($id)
    {
        $question = Question::findOrFail($id);
        return view('questions.show', compact('question'));
    }

    public function create()
    {
        return view('questions.create');
    }

    public function store()
    {
        $input = Request::all();
        $article = Question::create($input);
        $article->user_id = Auth::user()->id;
        $article->save();
        return redirect('questions');
    }
}
