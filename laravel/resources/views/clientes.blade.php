@extends('app')
@section('titulo')
@lang('Clientes')
@endsection
@section('css')
<link rel="stylesheet" href="css/fondo_elim.css">
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
        width: 100%;
        /* transition:height 1s ease,width 1s ease; */
        overflow: scroll;
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
        30% { height: 50vh;width: 20vh; }
        68% { width: 20vh; height: 50vh;}
        100% { width: 100%; height: 50vh;}
}
    
</style>
<style>

    /* form{
        display:inline;
    }
    a{
        text-decoration:none;
        color:black;
    }
    a:hover{
        color:black;
    }
    #btn_filter{
        border: 1px solid #ccc;
        border-radius:5px;
    }
    label{
        color:whitesmoke;
    }
    .datos_columnas{
        color:whitesmoke;
    }
    .tabla{
        height:400px;
        overflow:scroll;
        overflow-x: hidden;
        overflow-x: hidden;
    }
    ::-webkit-scrollbar {
  width: 4px;
}
::-webkit-scrollbar-track {
  background: #f1f1f1;
}
::-webkit-scrollbar-thumb {
  background: #888;
}
    .row{
        --bs-gutter-x: 0rem;
    }
    .container-fluid{

        width: 100%;
    padding-right: 0;
    padding-left: 0;
    margin-right: auto;
    margin-left: auto;
}
.centrado{
    display:flex;
    justify-content:center;
    margin: 10px 0px;
}
.formulario{
    padding: 5px 15px;
    border-radius:6px;
    border-style: none;
    border:1px solid #999;
    width:80%;
}
.formulario_btn{
    padding: 5px 15px;
    border-radius:6px;
    border-style: none;
    background-color: #98ff8f;
    width:70%;

}
.redondeo{
    border-radius:8px;
}
.datos_columnas{
    margin-bottom:0px;
}
.tarjetas{
    background-color:#dbdbdb;
}
.buscar{
    width:100%;
}
#filtro{
    width:100%;
    margin-left:5%;
    height:100%;
}
.minmax{
    width:100%;
}
.btn_filtro{
    width:85%;
    margin: 0px 15px;
    height:35px;
    border-style: none;
    border-radius: 6px;
    background-color:#ffdc8a;
}
.cebra{
        background-color:rgba(132,134,255,1);
        border-bottom:1px solid #777;
    }  
    .cebra:nth-of-type(odd){
        background-color:rgba(255,119,0,1);
        color: black;
        border-bottom:1px solid #777;
    }
.celdas{
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
    color:white;
}
.acciones{
    height:10px;
    line-height:0px;
    padding:10px 3%;
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
}
    
   
</style>
<!-- <div class="row justify-content-center">
    <div class="col-4 bg-danger">
        <form action="">
            <div class="row">
                <div class="col-12">
                    <input type="text">
                </div>
                <div class="col-12">
                    <input type="text">
                </div>
                <div class="col-12">
                    <input type="text">
                </div>
            </div>
        </form>
    </div>
</div> -->

<div class="row justify-content-center mt-4">
    <div class="col-10">
        <div class="row">
            <div class="col-1 cabeceras">
                ID
            </div>
            <div class="col-2 cabeceras">
                NOMBRE
            </div>
            <div class="col-3 cabeceras">
                EMAIL
            </div>
            <div class="col-3 cabeceras">
                FECHA_CREACION
            </div>
            <div class="col-3 cabeceras">
                ACCIONES
            </div>
        </div>
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-10">
        
@foreach($insert as $ins)
    <div class="row cebra">
            <div class="col-1 celdas">
            <p>{{$ins->id}}</p>
            </div>
            <div class="col-2 celdas">
              <p>{{$ins->name}}</p>
            </div>
            <div class="col-3 celdas">
             <p>{{$ins->email}}</p>
            </div>
            <div class="col-3 celdas">
             <p>{{$ins->created_at}}</p>
            </div>
            <div class="col-3 celdas">
                <form action="{{route('cliente-destroy',['id'=>$ins->id])}}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="id" value="{{$ins->id}}">
                    <button  class="btn btn-danger elim_btn" id='elim'>Eliminar</button>
                </form>
                <button class="btn btn-warning vmas">VER MAS</button>
            </div>
            <div class="col-12">
            <div id="despl" class="desplegar holaa bg-danger">
                <div class="row">
                <div class="col-2 mx-3">
                            <h3>Id_user:</h5>
                        </div>
                        <div class="col-3">
                            <h3>Estado:</h5>
                        </div>
                        <div class="col-3">
                            <h3>Total:</h5>
                        </div>
                        <div class="col-3">
                            <h3>Fecha:</h5>
                        </div>
                    @foreach( $ins->contenido as $pedidos)
                        <div class="col-2 mx-3">
                            <h5>{{$pedidos->id_user}}</h5>
                        </div>
                        <div class="col-3">
                            <h5>{{$pedidos->estado}}</h5>
                        </div>
                        <div class="col-3">
                            <h5>{{$pedidos->total}}</h5>
                        </div>
                        <div class="col-3">
                            <h5>{{$pedidos->created_at}}</h5>
                        </div>
                        

                    @endforeach
                </div>
            </div>
            </div>
            </div>
@endforeach
       
    </div>
</div>
@endauth


<script src="{{ asset('js/elim.js') }}"></script>
@endsection
