@extends('app')
@section('titulo')
@lang('Gestion')/@lang('Existencias almacen')
@endsection
@section('content')
@auth
<style>
    /* .cebra{
        background-color:rgba(132,134,255,1);
        border-bottom:1px solid #777;
    }  
    .cebra:nth-of-type(odd){
        background-color:rgba(255,119,0,1);
        color: black;
        border-bottom:1px solid #777;
    }
.contenedor{
    width: 100%;
}
form{
        display:inline;
    }
    .celdas{
    background-color:rgba(255, 255, 255, 0.33); */
    /* border-radius:8px; */
    /* margin:0.1%; */
    /* border:1px solid rgba(0, 0, 0, 0.2);
    padding:5px;
    font-size:16px;
    font-weight:bold; */
}
/* .tabla{
        height:400px;
        overflow:scroll; */
        /* border:1px solid white;
        border-radius:8px; */
        /* overflow-x: hidden;
        overflow-x: hidden;
    }
    .centrado{
    display:flex;
    justify-content:center; */
    /* margin: 10px 0px; */
}
/* .cabeceras{
    background-color:rgba(255, 255, 255, 0.33); */
    /* border-radius:8px; */
    /* margin:0.1%; */
    /* border:1px solid black;
    padding:5px;
    font-size:15px;
    font-weight:bold;
    color:white;
}
.acciones{
    height:10px;
    line-height:0px;
    padding:10px 3%;
}
.centrar{
    display:flex;
    justify-content:center;
}
.bi-pencil-fill{
    position: relative;
    top:-8px;
}
.tarjetas{
    background: rgb(255,119,0);
background: linear-gradient(0deg, rgba(255,119,0,1) 0%, rgba(132,134,255,1) 100%);
    border:5px solid #ffc897;
    overflow:hidden;
}
.titulotarjetas{
   background-color:#ffc897;
   position: relative;
   padding:10px 0px;
   top:10px;
   text-align:center;
   color:black;
   font-size:24px;
} */
</style>
<div class="container">


<div class="row contenedor justify-content-center mt-4">
    <div class="col-12 col-lg-4 tarjetas redondeo ">
        <form action="{{route('almacen-save')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row justify-content-center">
                
                <div class="col-12 centrar my-2">
                    <input type="text" name="nombre" class="formulario" placeholder = "Nombre" required>
                </div>
                <div class="col-12 centrar my-2">
                    <input name="precio" type="number" step="0.01" class="formulario" placeholder = "Precio" required>
                </div>
                <div class="col-12 centrar my-2">
                    <input type="text" name="cantidad" class="formulario" placeholder = "Cantidad" required>
                </div>
                <div class="col-12 centrar my-2">
                    <h5>Imagen</h5>
                    <input type="file" name="image" class="formulario" placeholder = "Cantidad" required>
                </div>
                <div class="col-12 centrar my-2">
                    <input type="submit"class = "formulario_btn w-25" value="Guardar">
                </div>
            </div>
        </form>
        <div class="col-12">
                    <h2 class="text-center titulotarjetas">Nuevo Producto</h2>
                </div>
    </div>
</div>

</div>

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
    <div class="col-11">
    <div class="row centrado">
    <div class="col-1 cabeceras">
        <label for="">ID</label>
    </div>
    <div class="col-2 cabeceras">
        <label for="">NOMBRE</label>
    </div>
    <div class="col-2 cabeceras">
        <label for="">@lang('PRECIO')</label>
    </div>
    <div class="col-1 cabeceras">
        <label for="">@lang('CANTIDAD')</label>
    </div>
    <div class="col-6 cabeceras">
        <label for="">@lang('Acciones')</label>
    </div>

</div>
<div class="tabla">
        @if(count($insert)>0)
        @foreach($insert as $ins)
        <div class="row centrado cebra">
            <div class="col-1 celdas ps-3">
                <p class="datos_columnas">{{$ins->id}}</p>
            </div>
            <div class="col-2 celdas">
            <p class="datos_columnas">{{$ins->nombre}} </p>
            </div>
            <div class="col-2 celdas">
            <p class="datos_columnas">{{$ins->precio}} € </p>
            </div>
            <div class="col-1 celdas">
            <p class="datos_columnas">{{$ins->stock}}</p>
            </div>
            <div class="col-6 celdas">
            <!-- <p class="datos_columnas">{{$ins->created_at}}</p> -->
                @if (@Auth::user()->hasRole('dios'))
                <form action="{{route('changeproducto-show',['id'=>$ins->id])}}" method="get">
                    @csrf
                    <button class="btn btn-success acciones"><i class="bi bi-pencil-fill"></i></button>
                </form>
                <form action="{{route('almacen-destroy',['id'=>$ins->id])}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger acciones">@lang('Eliminar')</button>
                </form>
                <form action="{{route('almacen-logic',['id'=>$ins->id])}}" method="post">
                    @csrf
                    <!-- <input type="text" name="prueba"> -->
                    @if ($ins->borrado == 0)
                        <button class="btn btn-warning acciones">@lang('Desactivado')</button>
                        <input type="hidden" name="valor" value="1">
                    @else
                        <button class="btn btn-warning acciones">@lang('Activado')</button>
                        <input type="hidden" name="valor" value="0">
                    @endif
                    
                </form>
                @endif
            </div>
        </div>
        @endforeach
</div>
@else
<h5>No hay resultados</h5>
@endif
    </div>


@endauth
@endsection