<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller
{
    public function contactenos(){
        return view('contacto');
    }
}
