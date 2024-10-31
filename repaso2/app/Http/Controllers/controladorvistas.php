<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\validadorlibro;
use App\Portadas;


class controladorvistas extends Controller
{
    public function principal(){
        return view('principal');
    }
    public function registro(){
        return view('registro');
    }

    public function registrarlibro(validadorlibro $peticionvalidada){

        $libro= $peticionvalidada->input('txtTitulo');

        session()->flash('exito','se registro el libro '.$libro);
        return to_route('rutaregistro');

    }
}




        