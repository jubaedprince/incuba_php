<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Question;
use Request;
use Carbon\Carbon;
use Auth;

class QuestionsAnswersController extends Controller
{

    public function __construct()
    {

    }


    public function store($questionId)
    {
        $answer = Request::user()->answers()->create([
            'answer' => Request::input('answer'),
        ]);

        $question = Question::find($questionId);

        $question->answers()->save($answer);

        return redirect()->back();
    }
}
