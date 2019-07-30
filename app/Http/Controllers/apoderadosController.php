<?php

namespace RegistroAsistencia\Http\Controllers;
use RegistroAsistencia\Models\apoderado;

use Illuminate\Http\Request;

class apoderadosController extends Controller
{
    public function show(){
        return view('vistas.registrarApoderado');
    }
    public function store(Request $request){
        
        /*
        //registrar apoderados
        $apoderado=new apoderado;
        $apoderado->nombres=$request->input('nombres');
        $apoderado->apellidos=$request->input('apellidos');
        $apoderado->direccion=$request->input('direccion');
        $apoderado->celular=$request->input('celular');
        $apoderado->email=$request->input('email');
        $apoderado->password=$request->input('password');
        $apoderado->save();
        return 'completado';*/

        //validar datos
        request()->validate([
            'nombres' => ['required', 'string', 'max:255'],
            'apellidos' => ['required', 'string', 'max:255'],
            'direccion' => ['required', 'string', 'max:255'],
            'celular' => ['required', 'string', 'min:9'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:apoderados'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        //insertar datos validados
        apoderado::create($request->all());
        //redireccionar
        return redirect('/home');
    }
}