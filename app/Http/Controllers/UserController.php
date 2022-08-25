<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userview($id)
    {
        // dd('User view ?');
        return view('user_card');
    }
}
