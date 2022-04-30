<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class authclienteController extends Controller
{
    public function logincliente(Request $request){
                  //$credentials = request()->only('email','password');
            //dd($credentials);
        if(Auth::attempt(["email"=>$request->email,"password"=>$request->password])){
            request()->session()->regenerate();
            $sql = 'SELECT * FROM users where email= "'.$request->email.'"';
            $products = DB::select($sql);
            //dd($products[0]->name);
            session(['user' => $products[0]->name]);
           
            return redirect('/cliente');
        }
        return  redirect('/cliente')->with(['error'=>'Usuario o Contraseña incorrectos']);
    }

}
