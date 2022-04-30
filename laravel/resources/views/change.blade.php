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
<div class="row justify-content-center mt-4">
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
</div>

@endauth
@endsection