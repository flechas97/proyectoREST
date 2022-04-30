<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;



class imprimirController extends Controller
{
    public function imprimir(Request $request){
        $productos = [];
        $productos2 = [];
        $data = DB::table('pedidos')
        ->where('id', $request->id)->get();
        $data_detalles = DB::table('detalles_pedidos')
        ->where('id_pedido', $request->id)->get();
        $data_user = DB::table('users')
        ->where('id', $request->id_user)->get();
        //dd($data_user);
for ($i=0; $i <count($data_detalles) ; $i++) { 
        $data_productos = DB::table('productos')
        ->where('id',$data_detalles[$i]->id_producto)
        ->get();
        //dd($data_productos[0]->nombre);
        array_push($productos, $data_productos[0]->nombre);
        array_push($productos2, $data_productos[0]->precio);
}
        for ($x=0; $x <count($data_detalles) ; $x++) { 
            $data_detalles[$x]->nombre = $productos[$x];
            $data_detalles[$x]->precio = $productos2[$x];
        }
        //dd($data_detalles[0]);
        
        // $data[0]->pedido = $data[0];
        // $data[0]->detalles = $data_detalles;
        // $data[0]->user = $data_user;
        
        //$data = ["nombre"=>$request->nombre];
        $datos = ['pedido' => $data,'detalles' => $data_detalles,'user' =>$data_user,'productos'=>$productos];
        //   dd($datos[0][0]->id);
        //dd($datos[0][0]->id);
         //dd($datos);
        $pdf = PDF::loadView('imprimir', $datos);
        return $pdf->download('imprimir.pdf');
    }
}
