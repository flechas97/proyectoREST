<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productos;
use Illuminate\Support\Facades\DB;

class pedirController extends Controller
{
    public function index(){
        $productos = productos::all();
        //dd($productos);
        return view('pedir',['productos'=>$productos]);
    }
    public function mandar(Request $request ){

        dd($request);
    }
    public function imagen(Request $request){
        $data = DB::select(DB::raw('select imagen from productos where id="'.$request->id.'"'));
        //dd($data[0]->imagen);
        header("Content-type: image/jpg"); 
        echo $data[0]->imagen; 

    }
    //
}
