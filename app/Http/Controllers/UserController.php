<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function show(string $id): View
    {
        $a = null;
        if(true){
            $a = 1;
        }

        $b = null;
        if( true ){
            $b=1;
        }

        return view('user.profile', [
            'user' => User::findOrFail($id)
        ]);
    }
}
