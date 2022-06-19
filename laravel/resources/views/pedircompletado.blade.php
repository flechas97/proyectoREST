<?php header("Content-type: image/jpg"); ?>

@extends('appcliente')
@section('css')
<link rel="stylesheet" href="css/pedir.css">
@endsection
@section('content')

<h1>Pedido Completado</h1>
<a href="{{route('client')}}"><button>Continuar</button></a>
@endsection 
