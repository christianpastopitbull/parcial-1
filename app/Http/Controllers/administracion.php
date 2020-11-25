<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class administracion extends Controller
{
    //
    public function tienda(){
        return view('historia.tienda');
    }

    public function contacto(){
        return view('historia.contactos');
    }
}
