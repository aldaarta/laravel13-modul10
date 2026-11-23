<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __invoke()
    {
        $pageTitle = 'My Profile';

        return view('profile', compact('pageTitle'));
    }
}
