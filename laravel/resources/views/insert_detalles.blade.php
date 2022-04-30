@extends('app')

@section('titulo')
@lang('Panel de control')/@lang('Pedidos')/@lang('Detalles')
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('css/fondo_elim.css')}}">
@endsection
@section('content')
@auth
<style>
    /* p{
        display:block;
    } */
    form{
        display:block;
    }
    .chuleta{
        width:200px;
        height: 200px;
        background-color:red;
    }
    /* h4{
        text-align:center;
    } */

    @media (max-width: 600px) {
    label{
        font-size:8px !important;
    }
    .datos_columnas{
    margin-bottom:0px;
    font-size:8px !important;
}
 .acciones{
    height:10px;
    line-height:0px;
    padding:8px 3%;
    font-size:5px;
}

h1{
    font-size:10px !important;
}
}
/* .tarjetas{
    background: rgb(255,119,0);
background: linear-gradient(0deg, rgba(255,119,0,1) 0%, rgba(132,134,255,1) 100%);
    border:5px solid #ffc897;
    overflow:hidden;
    color:white;
    font-weight:bold;
} */
/* .titulotarjetas{
   background-color:#ffc897;
   position: relative;
   padding:10px 0px;
   top:10px;
   text-align:center;
   color:black;
}  */
/* .celdas{
    background-color:rgba(255, 255, 255, 0.33);
    border:1px solid rgba(0, 0, 0, 0.2);
    padding:5px;
    font-size:16px;
    font-weight:bold;
}
.cabeceras{
    background-color:rgba(255, 255, 255, 0.33);
    border:1px solid black;
    padding:5px;
    font-size:16px;
    font-weight:bold;
}
.cebra{
        background-color:rgba(132,134,255,1);
        border-bottom:1px solid #777;
    }  
    .cebra:nth-of-type(odd){
        background-color:rgba(255,119,0,1);
        color: black;
        border-bottom:1px solid #777;
    } */
    .btn_volver{
        border-style:none;
        background-color:rgba(255,119,0,0);
        color:white;
        font-size:40px;
        margin-left:50px;
        position: relative;
        top:20px;
    }
</style>
<a href="{{route('insert-show')}}"><button class="btn_volver"><i class="bi bi-arrow-left-square-fill"></i></button></a>
        <div class="row justify-content-center">
            <div class="col-6 mt-5">
                <div class="row">
                    <div class="col-12">
                        <h4 class="tarjetas">Id de los productos</h4>
                    </div>
                    @foreach ($productos as $producto)
                        <div class="col-3 tarjetas">
                            {{$producto -> id}}  =   {{$producto -> nombre}}
                        </div>
                    @endforeach


                    
                </div>
            </div>
        </div>
<div class="row justify-content-center ">
    <div class="col-12 col-lg-7">

    <form class="mb-4 tarjetas redondeo" action="{{route('insert_detalles_guardar',['id'=>$id])}}" method="post">
    @csrf
        <input type="hidden" name="id" value="{{$id}}">
        <div class="row justify-content-center">
            <div class="col-8">
                <input type="text" class="form-control mt-4" name="id_pedido" placeholder="{{$id}}" disabled>
            </div>
            <div class="col-8">
                <select name="id_producto" id="" class="form-control mt-4">
                    @foreach ($productos as $producto)
                        <option value="{{$producto -> id}}">{{$producto -> nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-8">
                <input type="text"class="form-control mt-4" name="cantidad" placeholder="Cantidad">
            </div>
            <div class="col-8">
                <button class="btn btn-success mt-4">Guardar</button>
            </div>
        </div>
      
        
        
       
        <h4 class="titulotarjetas">Añadir Producto</h4>
    </form>

    <div class="row">
            <div class="col-1 text-dark  cabeceras">
               <b>Id</b> 
            </div>
            <div class="col-3 text-dark  cabeceras">
               <b>Id_pedido</b> 
            </div>
            <div class="col-4 text-dark  cabeceras">
               <b>Nombre_producto</b> 
            </div>
            <div class="col-4 text-dark  cabeceras">
               <b>Cantidad</b> 
            </div>
        </div>
        @if(count($data) > 0)
    @foreach($data as $detalle)
        <div class="row cebra">
            <div class="col-1 text-dark celdas">
                 <p>{{$detalle->id}}</p>
            </div>
            <div class="col-3 text-dark celdas">
            <p>{{$detalle->id_pedido}} </p>
            </div>
            <div class="col-4 text-dark celdas">
            <p>{{$detalle->id_producto}} </p>
            </div>
            
            <div class="col-4 text-dark celdas">
                <div class="row">
                    <div class="col datos_columnas">
                        <p class="mx-3">{{$detalle->cantidad}}</p>
                    </div>
                    <div class="col">
                    <form action="{{route('detalle-destroy',['id'=>$detalle->id])}}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="id_delete" value="{{$detalle->id}}">
                    <input type="hidden" name="id" value="{{$detalle->id_pedido}}">
                    <button class="btn btn-danger acciones elim_btn">Eliminar</button>
                    </form>
                    </div>
                </div>
            </div>
            
            
            
        </div>
    @endforeach
    @else
    <h1>No hay detalles</h1>
    @endif
    </div>



</div>

@endauth
@endsection
@section('script')
<script src="{{asset('js/elimdetalle.js')}}"></script>
@endsection