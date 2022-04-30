<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class authController extends Controller
{
    //

    public function signup(Request $request)
    {
        // validación de los datos del formulario
        $this->validate($request, [
            'name'                  => 'required|string|min:3|max:15',
            'email'                 => 'required|email|unique:users',
            'password'              => 'required|min:4|max:60',
            'password_confirmation' => 'required|same:password',
        ], $messages = []);
 
        try
        {
            $user = new User($request->all());
            //dd($request->all());
            $user->name= $request->name;
            $user->email= $request->email;
            $user->password= bcrypt($request->password);
            $user->remember_token = Str::random(10);
            //$user->registration_token = str_random(60);
            $user->save();
            $user->assignRole('cliente');
        } catch (Exception $e) {
          
        }
        // Encolamos el email de activación de la cuenta
        //$this->dispatch(new \App\Jobs\SendAccountActivationEmail($user));
 
        return redirect()->route('login');
    }

    public function logout(){
        Auth::logout();
        session()->flush();
        return redirect()->back();
    }

    public function singin(Request $request){
    //$credentials = request()->only('email','password');
        //dd($credentials);
    if(Auth::attempt(["email"=>$request->email,"password"=>$request->password])){
        request()->session()->regenerate();
        $sql = 'SELECT * FROM users where email= "'.$request->email.'"';
        $products = DB::select($sql);
        //dd($products[0]->name);
        session(['user' => $products[0]->name]);
        return redirect('/welcome');
    }
    return  redirect('/hola')->with(['error'=>'Usuario o Contraseña incorrectos']);
    }
    public function registerClient(Request $request){
        // Se crea el usuario con los datos del registro
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        // Le asignamos el rol de Cliente
        $user->assignRole('cliente');
    }
}
