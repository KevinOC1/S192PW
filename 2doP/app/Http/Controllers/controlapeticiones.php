<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\validador;

class controladorpeticiones extends Controller
{
    
    public function formUsuario(){
        return view('formUsuario');
    }
    public function inicioC(validador $peticionvalidada){

        
        $usuario= $peticionvalidada->input('txtcorreo');

        session()->flash('exito','se guardo el usuario '.$usuario);
        return to_route('rutaform');

    }
}