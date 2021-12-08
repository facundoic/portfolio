<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactoMailable;

class ContactoController extends Controller
{
    public function index()
    {
        return view('home.contacto');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        return $data;
        
    }
}
