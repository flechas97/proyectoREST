<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class panelController extends Controller
{
    public function index(){
        $mes = date("m");
        $dia = date('d');
        $ultimospedidos = DB::select(DB::raw('SELECT id,id_user,total,created_at FROM pedidos WHERE estado=0 ORDER BY created_at DESC LIMIT 5'));
        $gananciashoy = DB::select(DB::raw('SELECT SUM(total) AS total FROM pedidos WHERE created_at BETWEEN "2022-'.$mes.'-'.$dia.'" AND "2022-'.$mes.'-'.($dia+1).'"'));
        $gananciasmes = DB::select(DB::raw('SELECT SUM(total) AS total FROM pedidos WHERE created_at BETWEEN "2022-'.$mes.'-01" AND "2022-'.$mes.'-31"'));
        $pendientes = DB::select(DB::raw('SELECT COUNT(estado) AS pendientes FROM pedidos WHERE estado = 0'));
        $completados = DB::select(DB::raw('SELECT COUNT(estado) AS completados FROM pedidos WHERE estado = 1'));
        $numeroclientes = DB::select(DB::raw('SELECT COUNT(name) AS clientes FROM users'));
//dd($gananciashoy);
        return view('welcome',
        [
            'pendientes'=>$pendientes[0]->pendientes,
            'completados'=>$completados[0]->completados,
            'numeroclientes'=> $numeroclientes[0]->clientes,
            'gananciasmes'=>$gananciasmes[0]->total,
            'gananciashoy'=>$gananciashoy[0]->total,
            'ultimospedidos'=> $ultimospedidos
        
        ]);
    }
}
