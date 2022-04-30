<?php

namespace App\Http\Controllers;
use App\Models\productos;
use App\Models\detalles;
use App\Models\detalles_pedido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class productosController extends Controller
{
    //

    public function index(){
        $insert = productos::all();
        return view('almacen',['insert'=>$insert]);
    }

    public function eliminar(Request $request){
        $insert = detalles_pedido::find($request->id);
        $data = DB::select(DB::raw('SELECT * FROM detalles_pedidos WHERE id_producto = '.$request->id.''));
        if(count($data) <= 0){
            $insert = productos::find($request->id);
            $insert->delete();
            return redirect()->route('almacen-show')->with('success', 'Eliminado con exito');
        }
        return redirect()->route('almacen-show')->with('error', 'No puedes eliminarlo porque existen pedidos con este producto');
    }


    public function borrado_logico(Request $request){

        DB::table('productos')
        ->where('id', $request->id)
        ->update([
            'borrado'     => $request->valor
        ]);
        if($request->valor == 0){
            return redirect()->route('almacen-show')->with('success', 'Borrado logico Desactivado');
        }else{
            return redirect()->route('almacen-show')->with('success', 'Borrado logico Activado');
        }
        
    }

    public function guardar(Request $request){
        $insert = new productos();

        $insert -> nombre = $request->nombre;
        $insert -> precio = $request->precio;
        $insert -> stock = $request->cantidad;
        //$image = $_FILES['images']['tmp_name'];
        
        $imagen = file_get_contents($_FILES['image']['tmp_name']);
        //print_r($imagen);
        $insert -> imagen =  $imagen;

        $insert->save();
        return redirect()->route('almacen-show');
    }
    
    public function showchange(Request $request){
        
        $insert = productos::find($request->id);
        //dd($insert);
        return view('changeproducto',['insert'=>$insert]);
    }

    public function change(Request $request){
       
        date_default_timezone_set('Europe/Amsterdam'); 
            $DateAndTime = date('h:i:s'); 
        DB::table('productos')
        ->where('id', $request->id)
        ->update([
            'nombre'     => $request->nombre,
            'precio'   => $request->precio,
            'stock' => $request -> stock
        ]);
       return redirect()->route('almacen-show');
    }


}
