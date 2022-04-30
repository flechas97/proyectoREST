@extends('app')
@section('titulo')
@lang('Gestion')/@lang('Sugerencias')
@endsection
@section('content')
@auth

<style>
    .elim_btn{
        display:inline;
        float:right;
    }
    .vmas{
        display:inline;
        float:right;
    }
    .desplegar{  
        height: 50vh;
        width: 100vh;
        /* transition:height 1s ease,width 1s ease; */
        overflow: scroll;
        overflow-x: hidden;
        word-wrap: break-word;
        /* animation-duration: 3s;
        animation-name: desplegar;
        animation-fill-mode: forwards; */
    }
    .holaa{
        height: 0px;
        width: 0px;
      
        /* transition: height 1s ease,width 1s ease; */
        
    }
    .holi{
        animation-duration: 2s;
        animation-name: desplegar;
        animation-fill-mode: forwards;
    }
    @keyframes desplegar {
        0% { height: 0px; width: 0px; }
        30% { height: 50vh;width: 0vh; }
        68% { width: 0vh; height: 50vh;}
        75% { width: 0vh; height: 50vh;}
        100% { width: 100%; height: 50vh; padding:15px;}
}
    .tamaño{
        padding:0px 15px;
    }
    .amarillo{
        background-color:rgba(152,154,255,1);
        padding:5px 15px;
    }
    .contenedorsugerencias{
        background-color:rgba(255,119,50,1);
        width: 85%;
        margin-top:25px;
        padding:20px;
        border-radius: 8px;
        height: 500px;
        overflow: scroll;
        overflow-x: hidden;
    }
 
</style>
<div class="contenedorsugerencias ms-5">
    <div class="row tamaño ">
        <div class="col-12">
            <div class="row">
                <div class="col-3 col-lg-1 col-sm-3">
                    <span class="fw-bold ms-3">Nombre</span>
                </div>
                <div class="col-4 col-lg-4 col-sm-4">
                    <span class="fw-bold ms-3">Asunto</span>
                </div>
                <div class="col-5 col-lg-7 col-sm-5"><p class= "fw-bold">Acciones</p></div>
            </div>
        </div>
    </div>
    @foreach($sugerencias as $sugerencia)
    <div class="row tamaño">
        <div class="col-12">
            <div class="row amarillo border border-dark ">
                <div class="col-3 col-lg-1 col-sm-3 ">
                    <span class="fw-bold">{{$sugerencia->name}}</span>
                </div>
                <div class=" col-lg-4 col-sm-4 col-4">
                    <span class="fw-bold">{{$sugerencia->asunto}}</span>
                </div>
                <div class=" col-lg-7 col-sm-5 col-4"><button class="btn btn-success vmas">Ver</button></div>
                <div id="despl" class="desplegar holaa"> 
                    <h3>Descripcion:</h3>
                    <hr>
                    <p>{{$sugerencia->descripcion}}</p>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- <h1 class="text-light">{{$sugerencia->id}}</h1>
    <h1 class="text-light">{{$sugerencia->descripcion}}</h1> -->
    @endforeach
</div>
@endauth
@endsection




