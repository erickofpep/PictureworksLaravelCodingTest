<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userview($id)
    {
        // $user_details = User::find($id);

        $user_details = User::find($id);

        if (!$user_details) {
            $resultArray = [
                'message' => 'User does not exist.',
            ];
            return \Illuminate\Support\Facades\Response::json(
                $resultArray,
                200
            );
        }

        return view('user_card', compact('user_details'));
    }

    public function appendformdata(Request $request)
    {
        $validate_post_form_data = $request->validate([
            'password' => 'required|min:3|max:8',
            'id' => 'required|integer',
            'comments' => 'required',
        ]);

        $appendcomment = new User();
        $appendcomment->comments->$request->comment;
        $appendcomment->save();
    }

    public function appendjsondata(Request $request)
    {
        $jsondata = $request->json()->all();

        $this->Validator::make(json_encode($request->$jsondata, true), [
            'password' => 'required|min:3|max:8',
            'id' => 'required|integer',
            'comments' => 'required',
        ]);

        $appendcomment = new User();
        $appendcomment->comments->$request->$jsondata->comments;
        $appendcomment->save();
    }
}
