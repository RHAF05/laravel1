<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller
{
    public function contactenos(){
        $nombre = 'RHAF';
        $edad = 28;
        return view('contacto', compact('nombre','edad'));
    }
}
