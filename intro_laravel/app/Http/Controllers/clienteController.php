<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Http\Requests\validadorClientes;

class clienteController extends Controller

{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $consultarClientes = DB ::table('clientes')->get();
        return view('clientes',compact('consultarClientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formulario');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(validadorClientes $request)
    {
        DB::table('clientes')->insert([
            "nombre"=>$request->input('txtnombre'),
            "apellido"=>$request->input('txtapellido'),
            "correo"=>$request->input('txtcorreo'),
            "telefono"=>$request->input('txttelefono'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now(),
        ]);

        $usuario = $request->input('txtnombre');

    session()->flash('exito','se guardo el usuario '.$usuario);
    return to_route('rutaform');
    }

    
    
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'txtnombre' => 'required|min:3|max:255',
            'txtapellido' => 'required|min:3|max:255',
            'txtcorreo' => 'required|email:rfc,dns' ,
            'txttelefono' => 'required|numeric'
        ]);

        DB::table('clientes')->where('id',$id)->update([
            'nombre'=>$request->input('nombre'),
            'apellido'=>$request->input('apellido'),
            'correo'=>$request->input('correo'),
            'telefono'=>$request->input('telefono'),
            'updated_at'=>now(),
        ]);
        return redirect()->route('rutaclientes')->whith('exito','se actualizo con exito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       DB:: table('clientes')->where('id',$id)->delete();
       session()->flash('exito','se eliminio el cliente');
        return redirect()->route('rutaclientes');


        
    }
}
