<?php

namespace App\Http\Controllers;

use App\Models\registerr;
use Illuminate\Http\Request;

class RegisterrController extends Controller
{
    public function index()
    {
        return registerr::select('id','username','Email','password')->get();
    }


    public function store(Request $request)
    {
        $request->validate([
            
            'username'=>'required',
            'Email' => 'required',
            'password' => 'required'
           
        ]); 

        registerr::create($request->post());
        return response()->json([
            'message'=>'your account is created successfully'
        ]);
    }


    public function show(registerr $registerr)
    {
        return response()->json([
            'registerr' => $registerr
        ]);
    }


}
