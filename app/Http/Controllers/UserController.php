<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userview($id)
    {
        $user = User::find($id);
        return view('user_card', compact('user'));
    }
}
