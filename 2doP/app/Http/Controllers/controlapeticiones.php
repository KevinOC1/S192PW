<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\validador;

class controladorVistas extends Controller
{
    
    public function inicioC(validador $peticionvalidada){

        

        $usuario= $peticionvalidada->input('txtnombre');

        session()->flash('exito','se guardo el usuario '.$usuario);
        return to_route('formUsuarios');

        

    }
}