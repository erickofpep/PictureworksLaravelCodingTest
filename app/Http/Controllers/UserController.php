<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userview()
    {
        // dd('User view ?');
        return view('user_card');
    }
}
