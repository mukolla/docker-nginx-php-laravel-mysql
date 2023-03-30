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
        if (true) {
            $a = 1;
        }

        $b = null;
        if (true) {
            $b = 1;
        }

        $c = false;
        if (! $c) {
            $c = 1;
        }

        $d = false;
        if (! $d) {
            $d = 1;
        }

        $e = false;
        if (! $e) {
            $e = 1;
        }

        $g = false;
        if (! $g) {
            $g = 1;
        }

        return view('user.profile', [
            'user' => User::findOrFail($id),
        ]);
    }
}
