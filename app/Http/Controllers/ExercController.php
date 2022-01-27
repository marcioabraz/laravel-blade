<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExercController extends Controller
{
    //
    public function photo(Request $request)

    {
        $request->photo->storeAs('public', 'file.jpg');
 
        return 'deu certo';

    }
}
