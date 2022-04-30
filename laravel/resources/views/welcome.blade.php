@extends('app')
<!-- Titulo del header -->
@section('titulo')

@lang('Panel de control')
@endsection

@section('content')
<style>
    .cajaswelcome{
        display:flex;
        flex-wrap:wrap;
        justify-content:space-around;
        margin-top:30px;
        
    }
    .tarjetawelcome{
        width:300px;
        height: 200px;
        border-radius:8px;
        padding:8px;
        box-shadow: 0px 0px 10px 2px rgba(0, 0, 0, 0.53);
        overflow:hidden;
    }
    .tarjetagrandewelcome{
        width:93%;
        height:260px;
        background-color:rgba(219, 216, 216, 1);
        margin-top:30px;
        border-radius:8px;
        overflow:hidden;
        box-shadow: 0px 0px 10px 2px rgba(0, 0, 0, 0.53);
    }
    .amarillo{
        background-color:#ffbb3d;
        border:5px solid #ffde82;
    }
    .azul{
        background-color:#3db5ff;
        border:5px solid #9ed7ff;
    }
    .rojo{
        background-color:#ff3d3d;
        border:5px solid #ff9e9e;
    }
    .dashpedidos{
        text-align:center;
        background-color:#ffde82;
        width: 300px;
        height:50px;
        position:relative;
        left:-12px;
        
    }
    .dashclientes{
        text-align:center;
        background-color:#9ed7ff;
        width: 300px;
        height:50px;
        position:relative;
        top:72px;
        left:-12px;
        
    }
    .dashganancia{
        text-align:center;
        background-color:#ff9e9e;
        width: 300px;
        height:50px;
        position:relative;
        left:-12px;
        overflow:hidden;
        
    }
    .contenidotabla{
        margin:5px;
        background-color:rgba(219, 216, 216, 1);
        width:99%;
        height:205px;
    }
    .ultpedidosdash{
        text-align:center;
        background-color:rgba(219, 216, 216, 1);
        width: 100%;
        height:50px;
        position:relative;
        top:0px;
        left:0px;
    }
    
    .cebra{
        background-color:rgba(132,134,255,0.5);
        border-bottom:1px solid #777;
        font-weight:bold;
    }  
    .cebra:nth-of-type(odd){
        background-color:rgba(255,119,0,0.5);
        color: black;
        border-bottom:1px solid #777;
    }
    .encabezadosdash{
        background-color:rgba(233, 233, 233, 1);
        margin: 0px 0px;
        font-weight:bold;
    }

</style>
@auth

<div class="cajaswelcome">
    <div class="tarjetawelcome amarillo">
        <h5>@lang('Pedidos Pendientes')..</h5>
        <p>Nº Pedidos {{$pendientes}}</p>
        <h5>@lang('Pedidos Completados').</h5>
        <p>Nº Pedidos {{$completados}}</p>
        <h3 class="dashpedidos">@lang('Pedidos')</h3>
    </div>
    <div class="tarjetawelcome azul">
        <h5>@lang('Clientes Totales').</h5>
        <p>Nº Clientes {{$numeroclientes}}</p>
               <h3 class="dashclientes">@lang('Clientes')</h3>
    </div>
    <div class="tarjetawelcome rojo">
        <h5>@lang('Ganancias Totales Mensual').</h5>
        <p>Nº Total {{$gananciasmes}}</p>
        <h5>@lang('Ganancias Hoy').</h5>
        <p>Nº Total {{$gananciashoy}}</p>
               <h3 class="dashganancia">@lang('Ganancias')</h3>
    </div>
    <div class="tarjetagrandewelcome">
        <div class="contenidotabla">
            <div class="row justify-content-center encabezadosdash">
                <div class="col-1 ms-3 mt-2 p-1 ">
                    Id
                </div>
                <div class="col-3 p-1 mt-2 ">
                    Id_user
                </div>
                <div class="col-3 p-1 mt-2 ">
                    Total
                </div>
                <div class="col-4 p-1 mt-2 ">
                    Fecha
                </div>
            </div>
            @foreach($ultimospedidos as $ultpedido)
            <div class="row justify-content-center cebra">
                <div class="col-1 ms-3 p-1 celdasdash">
                    {{$ultpedido->id}}
                </div>
                <div class="col-3 p-1 celdasdash">
                {{$ultpedido->id_user}}
                </div>
                <div class="col-3 p-1 celdasdash">
                {{$ultpedido->total}}
                </div>
                <div class="col-4 p-1 celdasdash">
                {{$ultpedido->created_at}}
                </div>
            </div>
            @endforeach
        </div>
        <h3 class= "ultpedidosdash">@lang('ULTIMOS PEDIDOS')</h3>
    </div>
</div>
@endauth

@endsection

@section('script')
@endsection