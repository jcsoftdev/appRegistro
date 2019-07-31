<?php

namespace RegistroAsistencia\Http\Controllers;

use Illuminate\Http\Request;
use RegistroAsistencia\Models\Curso;

class CursoController extends Controller
{
    public function index(){

        return Curso::all();
        // $cursos = Curso::orderBy('id', 'desc')->paginate(3);
        
        // return [
        //     'pagination' => [
        //         'total'        => $cursos->total(),
        //         'current_page' => $cursos->currentPage(),
        //         'per_page'     => $cursos->perPage(),
        //         'last_page'    => $cursos->lastPage(),
        //         'from'         => $cursos->firstItem(),
        //         'to'           => $cursos->lastItem(),
        //     ],
        //     'cursos' => $cursos
        // ];


    }
    
}
