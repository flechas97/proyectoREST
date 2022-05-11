@extends('appcliente')
@section('css')
<link rel="stylesheet" href="css/pedir.css">
@endsection
@section('content')

<div class="productos">
    @foreach($productos_pedir as $producto)
        <div class="producto">
            <div class="row">
                <div class="col-12">
                    <h3>{{$producto->nombre}}</h3>
                </div>
                <div class="col-12">
                    <h3>{{$producto->precio}}€</h3>
                </div>
                <div class="col-12">
                    <img src="{{route('imagen',['id'=>$producto->id])}}" alt="">
                </div>
                <div class="col-12">
                    <button class="addcesta">Añadir a la cesta</button>
                </div>
            </div>
            
        </div>
    @endforeach
</div>

<form action="{{route('mandar_pedido')}}" method="post" id="cesta">
    @csrf
    <!-- <input type="hidden" name="id_user" value="{{session()->get('id_user')}}">
    <input type="hidden" name="nombre" value="{{session()->get('user')}}"> -->
    <input id="total" type="hidden" name="total" value = "0">
    <ul id="lista">
        <li>Lista de la cesta</li>
    </ul>
    
    <h5 id= "totalcesta">TOTAL: </h5>
    <input type="submit" value="enviar">
    
</form>
<button id="borrarlocal">Borrar local</button>
<button id="ver_cesta"></button>

<div id="fondosesion">
        <div class="row justify-content-center">
            <div class="col-4 tarjetalogin">
                <div class="row">
                    <div class="col-5">
                            <button class="controlsesion" id="btninicio"><p class="textocontrolsesion">Inicio</p> </button>
                    </div>
                    <div class="col-5">
                            <button class="controlsesion" id="btnregistro"><p class="textocontrolsesion">Registro</p> </button>
                    </div>
                    <div class="col-2">
                            <button class="controlsesion" id="salirbtn"><p class="textocontrolsesion">Salir</p> </button>
                    </div>
                </div>
                <div class="row" id="inicio">

                    <form action="{{route('logincliente')}}" method="post">
                            @csrf
                        <div class="col-12 text-center">
                            <h2 class= "mt-3">Inicio de sesion</h2>
                        </div>
                        <div class="col-12 text-center">
                            <input type="text" name="email" id="" class="formulariossesion" placeholder="Email...*">
                        </div>
                        <div class="col-12 text-center">
                            <input type="text" name="password" id="" class="formulariossesion" placeholder="Contraseña...*">
                        </div>
                        <div class="col-12 text-center">
                            <input type="submit" value="Iniciar" class="submitformulariosesion">
                        </div>
                    </form>
                </div>
                <div class="row" id="registro" style="display=none">
                    <form action="{{route('registrar-in')}}" method="post">
                        @csrf
                        <div class="col-12 text-center">
                            <h2 class= "mt-3">Registro de sesion</h2>
                        </div>
                        <div class="col-12 text-center">
                            <input type="text" name="name" id="" class="formulariossesion" placeholder="Usuario...*">
                        </div>
                        <div class="col-12 text-center">
                            <input type="text" name="email" id="" class="formulariossesion" placeholder="Email...*">
                        </div>
                        <div class="col-12 text-center">
                            <input type="text" name="password" id="" class="formulariossesion" placeholder="Contraseña...*">
                        </div>
                        <div class="col-12 text-center">
                            <input type="text" name="password_confirmation" id="" class="formulariossesion" placeholder="Confirmar Contraseña...*">
                        </div>
                        <div class="col-12 text-center">
                            <input type="submit" value="Iniciar" class="submitformulariosesion">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<script src="js/cesta.js"></script>
@endsection 
