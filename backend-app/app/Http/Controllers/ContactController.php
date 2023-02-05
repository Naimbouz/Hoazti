<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
       return Contact::select('id', 'Name','Email','phone','Message')->get();
       
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone' => 'required',
            'message' => 'required'
        ]); 
       

        Contact::create($request->post());
        return response()->json([
            'message'=>'contact added successfully'
        ]);
    }

    public function show(Contact $contact)
    {
        return response()->json([
            'contact' => $contact
        ]);
    }

 

  
  
    
}
