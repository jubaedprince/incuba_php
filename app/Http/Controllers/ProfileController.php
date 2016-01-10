<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class ProfileController extends Controller
{

    public function show()
    {
        return view('profile.show');
    }


    public function edit()
    {
        return view('profile.edit');
    }


    public function update(Request $request)
    {
        $user = Auth::user();
        $user->name = $request->name;
        $user->about = $request->about;
        $user->photo = $this->upload();
        $user->save();
        return view('profile.show');
    }


}
