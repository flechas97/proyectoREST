<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\insert;
use App\Models\pedidos;
use App\Models\detalles_pedido;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\CursorPaginator;

class insertController extends Controller
{

    public function index(){
        $insert = pedidos::all()->sortByDesc("id");
        $insert = $this->filtrar($insert);


        for ($i=0; $i < count($insert) ; $i++) { 
            $data = DB::select(DB::raw('SELECT sum(detalles_pedidos.cantidad*productos.precio) AS total FROM pedidos 
        INNER JOIN detalles_pedidos ON pedidos.id = detalles_pedidos.id_pedido 
        INNER JOIN productos ON detalles_pedidos.id_producto = productos.id  WHERE detalles_pedidos.id_pedido = '.$insert[$i]->id.' '));
        
        //dd($data[0]->total);
            $insert[$i]->total = $data[0]->total;
        }
        for ($i=0; $i < count( $insert ); $i++) { 
            if($insert[$i]->estado == 1){
                $insert[$i]->estado = "Completado";
            }else{
                $insert[$i]->estado = "Pendiente";
            }
        }
      
        //print_r($insert);
            //dd($insert);
        
        //dd($insert[0]->total);
        return view('insert',['insert'=>$insert]);
    }

    public function filtrar($datos){
        if(isset($_REQUEST["buscar"]) && isset($_REQUEST["min"]) && isset($_REQUEST["max"])&& $_REQUEST["buscar"] != "" && $_REQUEST["min"] != "" && $_REQUEST["max"] != ""){
            $datos = DB::table('pedidos')
            ->where($_REQUEST["filtro"], '=', $_REQUEST["buscar"])
            ->where('total', '>', $_REQUEST["min"])
            ->where('total', '<', $_REQUEST["max"])
            ->get();
        }else if(isset($_REQUEST["min"]) && isset($_REQUEST["max"]) && $_REQUEST["min"] != "" && $_REQUEST["max"] != ""){
            $datos = DB::table('pedidos')
            ->where('total', '>', $_REQUEST["min"])
            ->where('total', '<', $_REQUEST["max"])
            ->get();
        }else if(isset($_REQUEST["buscar"])){
            $datos = DB::table('pedidos')->where($_REQUEST["filtro"], $_REQUEST["buscar"])->get();
            //dd($insert);
        }
       
        return $datos;
    }
    public function store(Request $request){
            $insert = new pedidos();
            date_default_timezone_set('Europe/Amsterdam'); 
            $DateAndTime = date('h:i:s'); 
            $datos = DB::table('users')
            ->where('id', $request->id_usuario)
            ->get();
           
            if(count($datos) == 1){
            //$fecha = $request->fecha.$DateAndTime;
            $insert -> id_user = $request->id_usuario;
            //$insert -> total = $request->total;
            $insert -> created_at = $request->fecha;
            
            $insert->save();
                return redirect()->route('insert-show')->with('success', 'Pedido añadido');
            }else{
                return redirect()->route('insert-show')->with(['error'=>'ID Usuario no existente']);  
            }

    }

    public function destroy(Request $request){
        //dd($request);
        $insert = pedidos::find($request->id);
        $insert->delete();
        return redirect()->route('insert-show');
    }

    public function showchange(Request $request){
        $insert = pedidos::find($request->id);
        //dd($insert);
        return view('change',['insert'=>$insert]);
    }

    public function change(Request $request){
        date_default_timezone_set('Europe/Amsterdam'); 
            $DateAndTime = date('h:i:s'); 
        DB::table('pedidos')
        ->where('id', $request->id)
        ->update([
            'id_user'     => $request->id_user,
            'total'   => $request->total,
            'estado' => $request -> estado
        ]);
        //dd($request);
        //$insert = insert::find($request->id);

        return redirect()->route('insert-show');;
    }
    public function buscar(Request $request){
        dd($request);
    }
}
