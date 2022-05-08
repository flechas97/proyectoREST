@extends('appcliente')
@section('css')
<link rel="stylesheet" href="css/pedir.css">
@endsection
@section('content')
    <h1>Pedidos de {{session()->get('user')}}</h1>
    
    @foreach ($datos as $pedido)
        <h1>Id: {{$pedido->id}}  total: {{$pedido->total}}€</h1>
        @foreach ($detalles as $detalle)
            @foreach ($detalle as $detallitos)
                @if ($detallitos->id_pedido == $pedido->id)
                    <p><b>id detallle : {{$detallitos->id}}</b></p> 
                    <p>Cantidad : {{$detallitos->cantidad}}</p> 
                    @foreach ($productos as $producto)
                        @if ($producto->id == $detallitos->id_producto)
                            <p>producto nombre {{$producto->nombre}}</p>
                            <p>Precio del detalle: {{$detallitos->cantidad * $producto->precio}}€</p>
                        @endif
                    @endforeach
                @endif
            @endforeach
        @endforeach
    @endforeach
@endsection 
