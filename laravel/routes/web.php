<?php
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\insertController;
use App\Http\Controllers\authController;
use App\Http\Controllers\detallesController;
use App\Http\Controllers\productosController;
use App\Http\Middleware\LocaleCookieMiddleware;
use App\Http\Controllers\clientesController;
use App\Http\Controllers\imprimirController;
use App\Http\Controllers\panelController;
use App\Http\Controllers\sugerenciasController;
use App\Http\Controllers\authclienteController;
use App\Http\Controllers\pedirController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('hola', function () {
//     $users = DB::select('select * from users');
//     //print_r($users[0]->user);
//     return view('hola',["name"=>$users[0]->user,"pass"=>$users[0]->pass]);
// });
Route::view("logeado","logeado")->middleware('auth');
Route::view('change','change')->middleware('auth')->name('change');



//Route::view("insert","insert")->name('insert')->middleware('auth');
//Route::view("insert","insert");
Route::post("insert",[insertController::class, 'store']);
//Route::get("insert",[insertController::class, 'buscar'])->name("insert-buscar");
Route::get("insert",[insertController::class, 'index'])->middleware('auth')->name("insert-show");
Route::post("insert/{id}",[insertController::class, 'destroy'])->name("insert-destroy");

Route::get("insert_detalles/{id}",[detallesController::class, 'index'])->middleware('auth')->name("insert_detalles_show");
Route::post("insert_detalles/{id}",[detallesController::class, 'guardar'])->name("insert_detalles_guardar");
Route::delete("insert_detalles/{id}",[detallesController::class, 'eliminar'])->name("detalle-destroy");
//Route::post("insert_detalles",[detallesController::class, 'index'])->name("insert_detalles-ver");

Route::get("change/{id}",[insertController::class, 'showchange'])->middleware('auth')->name('change-show');
Route::post("change/{id}",[insertController::class, 'change'])->name('change');

Route::view("/registrar","registrar")->name('registrarse');
Route::post("/registrar",[authController::class, 'signup'])->name('registrar-in');
//Route::put("registrar",[authController::class, 'registerClient'])->name('registrar-cli');


Route::view("/hola","hola")->name("log");

Route::post('hola',[authController::class, 'singin'])->name('hola-sing');
Route::redirect('/here', '/hola/pepe');


Route::redirect('/', 'welcome');
Route::view('welcome', 'welcome')->middleware('auth')->name('welcome');
Route::get('welcome', [panelController::class, 'index'])->middleware('auth')->name('welcome');
Route::post("welcome",[authController::class, 'logout'])->name('registrar-out');


Route::view('almacen', 'almacen')->middleware('auth')->name('almacen');
Route::get("almacen",[productosController::class, 'index'])->middleware('auth')->name("almacen-show");
Route::delete("almacen/{id}",[productosController::class, 'eliminar'])->name("almacen-destroy");
Route::post("almacen/{id}",[productosController::class, 'borrado_logico'])->name("almacen-logic");
Route::post("almacen_guardar",[productosController::class, 'guardar'])->name("almacen-save");

// Route::view('changeproducto', 'changeproducto')->middleware('auth')->name('almacen-change');
Route::view('changeproducto','changeproducto')->middleware('auth')->name('changeproducto');

Route::get("changeproducto/{id}",[productosController::class, 'showchange'])->middleware('auth')->name('changeproducto-show');
Route::post("changeproducto/{id}",[productosController::class, 'change'])->name('changeproducto-change');


Route::get('/locale/{locale}', function($locale){
        return redirect()->back()->withCookie('locale',$locale);
})->name('idioma');
Route::middleware(LocaleCookieMiddleware::class)->group(function(){
    return view('welcome');
});

Route::view("clientes","clientes");
Route::get("clientes",[clientesController::class, 'index'])->name("clientes-show");
Route::post("clientes/{id}",[clientesController::class, 'eliminar'])->name("cliente-destroy");


Route::get('/ajax', [detallesController::class, 'ajax'])->name('ajax');

Route::view('/formimprimir', "/formimprimir");
Route::post('/imprimir', [imprimirController::class, 'imprimir'])->name('imprimir');

Route::get('/sugerencias', [sugerenciasController::class, 'index'])->name('sugerencias');

Route::view('/cliente', "/cliente");
Route::post('/cliente/login', [authclienteController::class, 'logincliente'])->name('logincliente');

Route::view('/pedir', "/pedir");
Route::get('/pedir', [pedirController::class, 'index'])->name('empezar_pedido');
Route::post('/pedir', [pedirController::class, 'mandar'])->name('mandar_pedido');

Route::get('/imagenes/{id}', [pedirController::class, 'imagen'])->name('imagen');
