<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactoMailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;


class ContactoController extends Controller
{
    public function index()
    {
        return view('home.contacto');
    }

    public function store(Request $request)
    {
       
        $validatedData = Validator::make($request->all(),[
            "nombre-completo" => 'required',
            "email" => 'required',
            "contenido-email" => 'required'
        ]);
       
        
        
        if($validatedData->fails())
        {
            return response()->json(['status'=>'error','error'=>$validatedData->errors()->toArray()]);
        }else
        {
            $correo = new ContactoMailable($request->all());
            Mail::to($request->email)->send($correo);
            return response()->json(['status'=>'validated','msg'=>'Validated']);  
        } 
        
    }
}
