<?php

namespace App\Http\Controllers\inventario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class productoscat extends Controller
{
    //
    public function comidac(){
        $comidacat = [
        
            'ALIMENTO PARA GATOS',
            '110',
            '3.900'
        ];
        $collar = [
        
            'COLLAR PARA GATOS',
            '220',
            '25.900'
        ];
        $arena = [
        
            'ARENA PARA GATOS',
            '330',
            '79.900'
        ];
        $jugetecat = [
        
            'JUGUETE PARA GATOS',
            '440',
            '43.900'
        ];
        $desodorante = [
        
            'DESODORANTE PARA ARENA',
            '550',
            '12.900'
        ];
        $nova = [
        
            'NOVABRONCOL PARA GATOS',
            '660',
            '15.900'
        ];

        return view('productos.gatos', 
        [
            'comidacat' => $comidacat,
            'collarcat' => $collar,
            'arenacat' => $arena,
            'jueguetecats' => $jugetecat,
            'desodorantecat' => $desodorante,
            'medicinacat' => $nova
            
        ]);
    }
}
