<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Faker;
use Input;

abstract class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function upload($input_name = 'photo'){
        $image_file = Input::file($input_name);
//        dd(Input::file('photo'));
        if ($image_file)
        {
            $faker = str_random(28);

            $image = (\Image::make($image_file)->resize(null, 500, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->save('uploads/'.$faker . '-' . $image_file->getClientOriginalName()));

            return $image->dirname . '/' . $image->basename;

        }else{

            return null;
        }
    }
}
