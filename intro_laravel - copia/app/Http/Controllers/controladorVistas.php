<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\validadorClientes;

class controladorVistas extends Controller
{
    public function home(){
        return view('inicio');
    }
    public function formulario(){
        return view('formulario');
    }
    public function consulta(){
        return view('clientes');
    }
    public function procesarCliente(validadorClientes $peticionvalidada){

        

        $usuario= $peticionvalidada->input('txtnombre');

        session()->flash('exito','se guardo el usuario '.$usuario);
        return to_route('rutaform');

        

    }
}