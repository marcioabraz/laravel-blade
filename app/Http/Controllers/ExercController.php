<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExercController extends Controller
{
    //
    public function photo(Request $request)

    {
        $path = $request->photo->storeAs('public', 'public/file.jpg');
 
        return $path;

    }
}
