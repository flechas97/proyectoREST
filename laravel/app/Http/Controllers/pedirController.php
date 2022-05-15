<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productos;
use Illuminate\Support\Facades\DB;

class pedirController extends Controller
{
    public function index(){
        $productos = DB::select(DB::raw('select * from productos where borrado = 0'));
        // dd($productos);
        return $productos;
    }
    public function mandar(Request $request ){
        // $usuario = DB::select(DB::raw('select * from users where id = '.session()->get('id_user')));
        $datos = [];
        foreach ($request->request as $key => $value) {
            array_push($datos,$value);
        }
        DB::insert('insert into pedidos (id_user, estado,total, created_at) values (?, ?, ?, ?)', array(session()->get('id_user'), 0,$request->total,date('Y/m/d')));
        $pedido = DB::select(DB::raw('SELECT MAX(id) AS id FROM pedidos'));
        for ($i=2; $i < count($datos) ; $i++) { 
            $producto = DB::select(DB::raw('SELECT * FROM productos where nombre="'.$datos[$i].'"'));
            DB::insert('insert into detalles_pedidos (id_pedido, id_producto,cantidad, created_at) values (?, ?, ?, ?)',array($pedido[0]->id, $producto[0]->id,$datos[$i+1],date('Y/m/d')));
            $i++;
        }
       return view('pedircompletado');
    }
    public function imagen(Request $request){
        $data = DB::select(DB::raw('select imagen from productos where id="'.$request->id.'"'));
        //dd($data[0]->imagen);
        header("Content-type: image/jpg"); 
        echo $data[0]->imagen; 

    }

    public function mispedidos(){
        $productos_pedir = $this->index();

        $data = DB::select(DB::raw('select * from pedidos where id_user="'.session()->get('id_user').'"'));
        $total_detalles = [];
        $productos = DB::table('productos')->where('borrado','0')->get();
        for ($i=0; $i <count($data) ; $i++) { 
            $detalles = DB::table('detalles_pedidos')->where('id_pedido',$data[$i]->id)->get();
            array_push($total_detalles,$detalles);
        }
        return view('cliente',['datos'=>$data,'detalles'=>$total_detalles,'productos'=>$productos,'productos_pedir'=>$productos_pedir]);
    }
    public function añadir_sugerencia(Request $request){
        // dd($request);
         DB::insert('insert into sugerencias (id_user, asunto, descripcion, created_at) values (?, ?, ?, ?)',array(session()->get('id_user'), $request->asunto,$request->contenido,date('Y/m/d')));
        return redirect()->route('client');
    }
    //
}
