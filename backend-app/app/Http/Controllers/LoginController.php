<?php

namespace App\Http\Controllers;

use App\Models\login;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return login::select('id', 'password','Email')->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            
            'email'=>'required',
            'password' => 'required'
           
        ]); 

       login::create($request->post());
        return response()->json([
            'message'=>'you are logging in successfully'
        ]);
    }
        public function show(login $login)
    {
        return response()->json([
            'login' => $login
        ]);
}

}
