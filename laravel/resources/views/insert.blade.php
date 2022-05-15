@extends('app')
@section('titulo')
@lang('Gestion')/@lang('Pedidos')
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('css/fondo_elim.css')}}">
@endsection
@section('content')
@if (@Auth::user()->hasRole('dios'))

<style>  

</style>
@if ($message = Session::get("success"))
<div class="row justify-content-center">
    <div class="col-6">
        <div class=" alert alert-success alert-block mt-4">
        <strong>{{ $message }}</strong>
        </div>
    </div>
</div>

@endif

@if ($message = Session::get("error"))
<div class="row justify-content-center">
    <div class="col-6">
        <div class="alert alert-danger alert-block mt-4">
            <strong>{{ $message }}</strong>
        </div>
    </div>
</div>
@endif
<div class="row justify-content-center mt-4">
    <div class="col-12 col-lg-5 col-sm-12">
 
        <form action="insert" method="post">
            @csrf
            <!-- <div class="row">
                <div class="col-12">

                </div>
                <div class="col-12">
                    
                </div>
            </div> -->
        <div class="row justify-content-center tarjetas redondeo">
        
            <!-- <div class="col-7 centrado">
                 <label for="">Nombre: </label> 
                <input class="formulario" name="name" type="text" value="" placeholder="id_pedido" required>
            </div> -->
            <div class="col-12 centrado">
               <!-- <label for="">Precio: </label> -->
               <input class="formulario mt-3" name="id_usuario" type="number" step="0.01" value="" placeholder="id_usuario" required>
            </div>
            <div class="col-12 centrado">
               <!-- <label for="">Precio: </label> -->
               <input class="formulario" name="fecha" type="date" step="0.01" value="" placeholder="fecha" required>
            </div>
            <div class="col-12 centrado">
               <!-- <label for="">Stock: </label> -->
               <input class="formulario" name="total" type="number" step="0.01" value="" placeholder="total" required disabled >
            </div>
            <div class="col-7 centrado corregirmargen">
                <input class="formulario_btn"  type="submit" value="@lang('Guardar')">
            </div>
                
        </form><br>

    <div class="col-12 titulotarjetas">
                 <!-- <label for="">Nombre: </label> -->
            <h5>@lang('Añadir pedido')</h5>            
        </div>
        </div>
        </div>
<div class="col-12 col-lg-5 col-sm-12 tarjetas redondeo mx-5">

<form action="insert" method="get">

        <div class="row p-4">
            <div class="col-8 ">
                <input class="formulario buscar" type="text" name="buscar" id="buscar" placeholder="Buscar id...">
            </div>
            <div class="col-4 ">
                <select name="filtro" id="filtro">
                    <option value="id">id</option>
                    <option value="id_user">id_user</option>
                </select>
            </div>
        </div>


        <div class="row p-4 ">
            <div class="col-6">
                <input class="formulario minmax" id= "min" name="min" type="number" step="0.01" value="" placeholder="rango minimo">
            </div>
            <div class="col-6">
                <input class="formulario minmax" id= "max" name="max" type="number" step="0.01" value="" placeholder="rango maximo">
            </div>
        </div>


        <div class="row p-2 ">
            <div class="col-6">
                <input class="btn_filtro" type="submit" value="@lang('Buscar')"> 
            </div>
            <div class="col-6">
                <button class="btn_filtro" id="btn_filter"><a href="insert"> @lang('Borrar filtro')</a></button>
            </div>
        </div>
            
</form>
      
<div class="col-12 titulotarjetas2">
                 <!-- <label for="">Nombre: </label> -->
            <h5>@lang('Buscar pedido')</h5>            
        </div>

</div>





    
    
</div>


<div class="row justify-content-center mt-4">
    <div class="col-11">
    <div class="row">
    <div class="col-1 col-lg-1 cabeceras">
        <label for="" class="h5">ID</label>
    </div>
    <div class="col-1 col-lg-2 cabeceras">
        <label for="" class="h5">ID_USUARIO</label>
    </div>
    <div class="col-2 col-lg-1 cabeceras">
        <label for="" class="h5">@lang('TOTAL')</label>
    </div>
    <div class="col-2 col-lg-2 cabeceras">
        <label for="" class="h5">@lang('ESTADO')</label>
    </div>
    <div class="col-2 col-lg-2 cabeceras">
        <label for="" class="h5">@lang('FECHA')</label>
    </div>
    <div class="col-4 col-lg-4 cabeceras">
        <label for="" class="h5">@lang('Acciones')</label>
    </div>
</div>
<div class="tabla">
        @if(count($insert)>0)
        @foreach($insert as $ins)
        @if($ins->estado == 'Completado')
        <div class="row cebra completado">
        @else
        <div class="row cebra">
        @endif
            <div class="col-1 col-lg-1 celdas">
                <p class="datos_columnas">{{$ins->id}}</p>
            </div>
            <div class="col-1 col-lg-2 celdas">
            <p class="datos_columnas">{{$ins->id_user}} </p>
            </div>
            <div class="col-2 col-lg-1 celdas">
            <p class="datos_columnas">{{$ins->total}} € </p>
            </div>
           
            <div class="col-2 col-lg-2 celdas">
            <p class="datos_columnas">{{$ins->estado}} </p>
            </div>
            
            <div class="col-2 col-lg-2 celdas">
            <p class="datos_columnas">{{$ins->created_at}} </p>
            </div>
            <div class="col-4 col-lg-4 celdas text-center">
            <!-- <p class="datos_columnas">{{$ins->created_at}}</p> -->
               
                <form action="{{route('change-show',[$ins->id])}}" method="get">
                    <button class="btn btn-success acciones"><i class="bi bi-pencil-fill"></i></button>
                </form>
                <form action="{{route('insert-destroy',[$ins->id])}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger acciones elim_btn"><i class="bi bi-x-square-fill"></i></button>
                </form>
                <form action="{{route('insert_detalles_show',[$ins->id])}}" method="get">
            <!-- <input type="text" name="prueba"> -->
                    <button class="btn btn-warning acciones"><i class="bi bi-box2-fill"></i></button>
                </form>
                <form action="{{route('imprimir')}}" method="post">
                @csrf
            <!-- <input type="text" name="prueba"> -->
                <input type="hidden" name="id" value = "{{$ins->id}}">
                <input type="hidden" name="id_user" value = "{{$ins->id_user}}">
                    <button class="btn btn-info acciones"><i class="bi bi-printer-fill"></i></button>
                </form>
              
            </div>
        </div>
        @endforeach
</div>
@else
<h5>No hay resultados</h5>
@endif
@else
<h1 class="text-light">No tienes permisos para estar aqui Vuelve a la zona cliente</h1>

@endif
    </div>
</div>

<script src="js/insert.js"></script>
<script src="js/elim.js"></script>

@endsection