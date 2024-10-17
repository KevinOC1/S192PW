<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorTodo extends Controller
{
    public function home(){
        return view('inicio');
    }

    public function repaso(){
        return view('repaso1');
    }

    public function convertir(Request $request){
        
        $cantidad = $request->input('cantidad');
        $tipoConversion = $request->input('tipoConversion');
        $resultado = 0;

        switch ($tipoConversion) {
        case 'MBaGB':
            $resultado = $cantidad / 1000;
            break;
        case 'GBaMB':
            $resultado = $cantidad * 1000;
            break;
        case 'GBaTB':
            $resultado = $cantidad / 1000;
            break;
        case 'TBaGB':
            $resultado = $cantidad * 1000;
            break;
        }

        return "El resultado de la conversión $tipoConversion es: $resultado";
    }

}