<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConocimientosController extends Controller
{
    public function index()
    {
        return view('home.conocimientos');
    }
}
