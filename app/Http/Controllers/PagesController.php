<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

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
//        auth()->loginUsingId(1);
        return view('pages.home');

    }

    public function profile(){

        return view('pages.profile');

    }
}
