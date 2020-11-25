<?php

namespace App\Http\Controllers\inventario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class productos extends Controller
{
    //
    public function comida(){
        $comida = [
        
            'ALIMENTO PARA PERROS',
            '111',
            '68.000'
        ];
        $juguete = [
        
            'JUGUETE PARA PERRO KONG',
            '222',
            '41.900'
        ];
        $comedor = [
        
            'COMEDOR ANTIDESLIZANTE',
            '333',
            '38.900'
        ];
        $juguetep = [
        
            'JUGUETE PARA PERRO DE PALO',
            '444',
            '36.900'
        ];
        $tapete = [
        
            'TAPETE DE ENTRENAMIENTO',
            '555',
            '125.900'
        ];
        $galleta = [
        
            'GALLETAS PARA PERROS',
            '666',
            '30.700'
        ];
        return view('productos.perros', 
        [
            'comida1' => $comida,
            'juguete' => $juguete,
            'plato' => $comedor,
            'palo' => $juguetep,
            'alfombra' => $tapete,
            'galle' => $galleta
            
        ]);

    }
}
