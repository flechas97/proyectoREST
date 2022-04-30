<?php header("Content-type: image/jpg"); ?>

@extends('appcliente')
@section('css')
<link rel="stylesheet" href="css/pedir.css">
@endsection
@section('content')

<div class="productos">
    @foreach($productos as $producto)
        <div class="producto">
            <div class="row">
                <div class="col-12">
                    <h3>{{$producto->nombre}}</h3>
                </div>
                <div class="col-12">
                    <h3>{{$producto->precio}}€</h3>
                </div>
                <div class="col-12">
                    <img src="{{route('imagen',['id'=>$producto->id])}}" width= "120px" alt="">
                </div>
                <div class="col-12">
                    <button class="addcesta">Añadir a la cesta</button>
                </div>
            </div>
            
        </div>
    @endforeach
</div>
<form action="{{route('mandar_pedido')}}" method="post">
    @csrf
    <ul id="lista">
        <li>Lista de la cesta</li>
    </ul>
    <input type="submit" value="enviar">
</form>
<button id="borrarlocal">Borrar local</button>
<script src="js/cesta.js"></script>
@endsection 
