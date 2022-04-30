<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class sugerenciasController extends Controller
{
    public function index(){
        $data = DB::select(DB::raw('SELECT sugerencias.id,users.name, sugerencias.asunto,sugerencias.descripcion FROM sugerencias INNER JOIN users ON sugerencias.id_user = users.id;'));
        //dd($data);
        return view('sugerencias',['sugerencias'=>$data]);
    }
}
