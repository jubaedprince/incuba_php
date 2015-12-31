<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Opportunity;
use Request;

class OpportunityController extends Controller
{

    public function index()
    {
        $opportunities = Opportunity::all()->sort();
        return view('opportunities.index', compact('opportunities'));
    }

    public function create()
    {
        return view('opportunities.create');
    }

    public function show($id)
    {
        $opportunity = Opportunity::findOrFail($id);

        return view('opportunities.show', compact('opportunity'));
    }

    public function store(Request $request)
    {
        $input = Request::all();
        Opportunity::create($input);
        return redirect('opportunity');
    }


    public function destroy($id)
    {
        $opportunity = Opportunity::findOrFail($id);
        $opportunity->delete();
        return redirect('opportunity');
    }
}
