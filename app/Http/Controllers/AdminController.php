<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    //handle admin login request

    public function postAdmin(Request $request){
        $userData = [
            'email' => $request->get('email'),
            'password' => $request->get('password')
        ];

        $rules = [
            'email' => 'required|email|string',
            'password' => 'required|string',
        ];

        $validator = Validator::make($userData, $rules);
        if($validator->fails()){
            return Redirect::to('/cc-admin')
                ->withErrors($validator)
                ->withInputs($userData);
        } else {
            // Attempt to login
            if(Auth::attempt($userData)){
                return Redirect::to('/cc-dashboard');
            }
            return redirect()->back()->withErrors('Username / Password incorrect');
        }


    }
}
