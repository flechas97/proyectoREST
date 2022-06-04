@extends('app')
@section('titulo')
@lang('Panel de control')/@lang('Pedidos')/@lang('Editor')
@endsection
@section('content')
@auth

<style>
    .tabla{
        height: 300px;
        width: 50%;
        /**Poner fondo a la tabla */
    }
    .centrado{
        display:flex;
        justify-content:center;
    }
    .izquierda{
        display:flex;
        justify-content:end;
    }
    .textos{
        border-style:none;
        height: 35px;
        width: 100%;
        border-radius:8px;
    }
</style>
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
{{-- <div class="row justify-content-center mt-4">
    <div class="col-12 tabla">
        <form action="{{route('change',[$insert->id])}}" method="post">
            @csrf

            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="row">
                        <div class="col-4">
                        <label for="">ID_USUARIO</label>
                        </div>
                        <div class="col-7">
                            <input class="textos" name="id_user" type="text" value="{{$insert->id_user}}" placeholder="ID_USER">
                        </div>
                        <div class="col-2">
                        <label for="">TOTAL</label>
                        </div>
                        <div class="col-10">
                        <input class="textos" name="total" type="number" value="{{$insert->total}}" step="0.01" placeholder="TOTAL" disabled>
                        </div>
                        <div class="col-2">
                        <label for="">ESTADO</label>
                        </div>
                        <div class="col-10">
                            <select name="estado" id="">
                                <option value="0">Pendiente</option>
                                <option value="1">Completado</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <input type="submit" value="enviar">
                        </div>
                    </div>
                    
                    
                </div>
            </div>





                <!-- <label for="">: </label> -->
                
                <!-- <label for="">Precio: </label> -->
                

               
                <!-- <label for="">Stock: </label> -->
                <!-- <input name="created_at" type="datetime-local" value="{{$insert->created_at}}" placeholder="FECHA"> -->
              
               
        </form>
        <p class="text-light">Ultima actualizacion: {{$insert->updated_at}}</p>
    </div>
</div> --}}


<div class="container">


    <div class="row contenedor justify-content-center mt-4">
        <div class="col-4 tarjetas redondeo ">
            <form action="{{route('change',['id'=>$insert->id])}}" method="post">
                @csrf
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2 class="text-center">Editar Datos de Pedido</h2>
                    </div>
                    <div class="col-12 centrar my-2">
                        {{-- <input type="text" name="id" class="formulario" placeholder = "Nombre"  value="{{$insert->id}}" disabled> --}}
                        <input class="textos" name="id_user" class="formulario" type="text" value="{{$insert->id_user}}" placeholder="ID_USER">
                        {{-- <input type="hidden" name="id" value="{{$insert->id}}"> --}}
                    </div>
                    <div class="col-12 centrar my-2">
                        {{-- <input name="nombre" type="text" class="formulario" placeholder = "Nombre" value="{{$insert->nombre}}"required> --}}
                        <input class="textos" name="total" type="number" class="formulario" value="{{$insert->total}}" step="0.01" placeholder="TOTAL" disabled>
                    </div>
                    <div class="col-12 centrar my-2">
                        {{-- <input type="number" step="0.02" name="precio" class="formulario" placeholder = "Precio" value="{{$insert->precio}}" required> --}}
                        <select name="estado" id="">
                            <option value="0">Pendiente</option>
                            <option value="1">Completado</option>
                        </select>
                    </div>
                    {{-- <div class="col-12 centrar my-2">
                        <input type="number" name="stock" class="formulario" placeholder = "Stock" value="{{$insert->stock}}" required>
                    </div> --}}
                    {{-- <div class="col-12 centrar my-2">
                        <select name="plato">
                            <option value="1">Primero</option>
                            <option value="2">Segundo</option>
                            <option value="3">Postre</option>
                            <option value="4">Bebida</option>
                        </select>                
                    </div> --}}
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