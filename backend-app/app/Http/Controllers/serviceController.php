<?php

namespace App\Http\Controllers;
use App\Models\service;
use Illuminate\Http\Request;

class serviceController extends Controller
{
    public function index()
    {
        return service::select('id','NomS','Prix','isSelected')->get();
    }


    public function store(Request $request)
    {
        
        // $request->validate([
            
        //     'NomS'=>'required',
        //     'Prix' => 'required',
        //     'isSelected' => 'required'
           
        // ]); 

        foreach ($request->post() as $value) {
            service::create($value);
        }
        return response()->json([
            'message'=>'Votre demande a été créée avec succès'
        ]);
    }


    public function show(service $service)
    {
        return response()->json([
            'service' => $service
        ]);
    }



}
