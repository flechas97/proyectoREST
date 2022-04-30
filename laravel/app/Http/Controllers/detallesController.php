<?php

namespace App\Http\Controllers;
use App\Models\detalles;
use App\Models\detalles_pedido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class detallesController extends Controller
{
    //
    public function index(Request $request){
        $insert = DB::table('detalles_pedidos')
                ->where('id_pedido', $request->id)
                ->get();
                for ($i=0; $i < count($insert) ; $i++) { 
                        
                    $data = DB::select(DB::raw('select distinct productos.nombre 
                FROM detalles_pedidos 
                INNER JOIN productos ON detalles_pedidos.id_producto = productos.id
                WHERE productos.id = '.$insert[$i]->id_producto.''));
                //dd($insert[$i]->id_producto);
                $insert[$i]->id_producto = $data[0]->nombre;
                
                }
                //dd($insert[0]->id_producto);
                $productos = DB::select(DB::raw('select * from productos where borrado = 0'));
        //dd($productos);
       return view('insert_detalles',['data'=>$insert, 'id'=>$request->id, 'productos'=>$productos]);
    }
    public function ajax(Request $request){
        $insert = detalles_pedido::all()->sortByDesc("id");
        $hola = base64_decode($request);
        return $hola;
    }

    public function guardar(Request $request){
        //dd($request);
        $insert = new detalles_pedido();
        $insert -> id_pedido = $request->id;
        $insert -> id_producto = $request->id_producto;
        $insert -> cantidad = $request->cantidad;
        $insert->save();

        $data = DB::select(DB::raw('UPDATE pedidos SET total = (SELECT * FROM (SELECT sum(detalles_pedidos.cantidad*productos.precio) AS total FROM pedidos 
        INNER JOIN detalles_pedidos ON pedidos.id = detalles_pedidos.id_pedido 
        INNER JOIN productos ON detalles_pedidos.id_producto = productos.id  WHERE detalles_pedidos.id_pedido = '.$request->id.')as t)
        WHERE pedidos.id = '.$request->id.''));
        
        $insert = DB::table('detalles_pedidos')
                ->where('id', $request->id)
                ->get();
                
        return redirect()->route('insert_detalles_show',['data'=>$insert,'id'=>$request->id]);
    }
    public function eliminar(Request $request){
        $insert = detalles_pedido::find($request->id_delete);
       //dd($request);
        $insert->delete();
        $data = DB::select(DB::raw('UPDATE pedidos SET total = (SELECT * FROM (SELECT sum(detalles_pedidos.cantidad*productos.precio) AS total FROM pedidos 
        INNER JOIN detalles_pedidos ON pedidos.id = detalles_pedidos.id_pedido 
        INNER JOIN productos ON detalles_pedidos.id_producto = productos.id  WHERE detalles_pedidos.id_pedido = '.$request->id.')as t)
        WHERE pedidos.id = '.$request->id.''));
        //dd($request);
        return redirect()->route('insert_detalles_show',['id'=>$request->id]);
    }
}
