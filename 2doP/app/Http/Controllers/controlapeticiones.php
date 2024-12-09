<?php

namespace App\Http\Controllers;

use App\Http\Requests\validador;
use Illuminate\Http\Request;


class controlapeticiones extends Controller
{
    
    public function inicio(){
        return view('formUsuarios');
    }
    public function inicioC(validador $request){

        
        $usuario = $request->input('txtcorreo');

        session()->flash('exito','se guardo el usuario '.$usuario);
        return to_route('rutaform');

    }
}