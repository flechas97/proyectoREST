<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class clientesController extends Controller
{
    //

    public function index(){

        $insert = User::all();
        //$insert = $this->filtrar($insert);
        for ($i=0; $i <count($insert) ; $i++) { 
            $insert2 = DB::table('pedidos')
                ->where('id_user', $insert[$i]->id)
                ->get();
                $insert[$i]->contenido = $insert2;
        }
        
        for ($i=0; $i < count( $insert ); $i++) { 
            for ($p=0; $p <count($insert[$i]->contenido) ; $p++) { 
                if($insert[$i]->contenido[$p]->estado == 1){
                    $insert[$i]->contenido[$p]->estado = "Completado";
                }else{
                    $insert[$i]->contenido[$p]->estado = "Pendiente";
                }
            }
        }
            //dd($insert);
        return view('clientes',['insert'=>$insert]);
    }
    public function eliminar(Request $request){
        $insert = User::find($request->id);
        $insert->delete();
        return redirect()->route('clientes-show');
    }
}
