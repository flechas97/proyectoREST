@extends('app')
@section('titulo')
@lang('Panel de control')/@lang('Existencias almacen')
@endsection
@section('content')
@auth
<style>
.contenedor{
    width: 100%;
}
form{
        display:inline;
    }
.celdas{
    background-color:rgba(255, 255, 255, 0.33);
    border-radius:8px;
    margin:0.5%;
    padding:5px;
    font-size:16px;
    font-weight:bold;
    color:whitesmoke;
}
.tabla{
        height:400px;
        overflow:scroll;
        /* border:1px solid white;
        border-radius:8px; */
        overflow-x: hidden;
        overflow-x: hidden;
    }
    .centrado{
    display:flex;
    justify-content:center;
    /* margin: 10px 0px; */
}
    .cabeceras{
    background-color:rgba(255, 255, 255, 0.33);
    border-radius:8px;
    margin:0.5%;
    padding:5px;
    font-size:16px;
    font-weight:bold;
    color:whitesmoke;
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
</style>
<div class="container">


<div class="row contenedor justify-content-center mt-4">
    <div class="col-4 tarjetas redondeo ">
        <form action="{{route('changeproducto-change',['id'=>$insert->id])}}" method="post">
            @csrf
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="text-center">Editar Producto</h2>
                </div>
                <div class="col-12 centrar my-2">
                    <input type="text" name="id" class="formulario" placeholder = "Nombre"  value="{{$insert->id}}" disabled>
                    <input type="hidden" name="id" value="{{$insert->id}}">
                </div>
                <div class="col-12 centrar my-2">
                    <input name="nombre" type="text" class="formulario" placeholder = "Nombre" value="{{$insert->nombre}}"required>
                </div>
                <div class="col-12 centrar my-2">
                    <input type="number" step="0.02" name="precio" class="formulario" placeholder = "Precio" value="{{$insert->precio}}" required>
                </div>
                <div class="col-12 centrar my-2">
                    <input type="number" name="stock" class="formulario" placeholder = "Stock" value="{{$insert->stock}}" required>
                </div>
                <div class="col-12 centrar my-2">
                    <select name="plato">
                        <option value="1">Primero</option>
                        <option value="2">Segundo</option>
                        <option value="3">Postre</option>
                        <option value="4">Bebida</option>
                    </select>                
                </div>
                {{-- <div class="col-12 centrar my-2">
                    <h5>Imagen</h5>
                    <input type="file" name="image" class="formulario" placeholder = "Cantidad">
                </div> --}}
                <div class="col-12 centrar my-2">
                    <input type="submit"class = "formulario_btn w-25" value="Guardar">
                </div>
            </div>
        </form>
    </div>
</div>

</div>



@endauth
@endsection