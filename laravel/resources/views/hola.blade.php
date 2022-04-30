@extends('app')

<link rel="stylesheet" href="css/inicio_admin.css">


@section('titulo')
@lang('Inicio de sesion')
@endsection

@section('content')
<!-- <header class="header">
    <div class="row justify-content-center p-0">
        <div class="col-7 logo"><img src="css/cuchara.png" alt="" class="logoimg"></div>
        <div class="col-6"><h1 class="text-light mt-4">Gestion de inventario</h1></div>
    </div>
</header> -->
<div class="container mt-5">
<div class="row justify-content-center">
    <div class="col-5 bg-dark redondeado caja">
        <div class="row">
            <div class="col-12 centrado">
                <i class="bi bi-person-circle text-light"></i>
            </div>
            <div class="col-12">
                <h1 class="text-light text-center">@lang('Inicio Administrador')</h1>
            </div>
        </div>
    <form action="{{route('hola-sing')}}" method="post">
        @csrf
        <div class="row">
            <div class="col-12 centrado">
                <div>
                <i class="bi bi-person icono"></i>
                    <input class="text_forms" type="text" name="email" id="" placeholder="Email..." >
                </div>
            </div>
            <div class="col-12 centrado">
                <div>
                <i class="bi bi-key icono"></i>
                <input class="text_forms" type="password" name="password" id="" placeholder="@lang('Contraseña')..." >
                </div>
            </div>
            <div class="col-12 centrado">
                <button class="btn_iniciar">@lang('Iniciar')</button>  
            </div>
            @if ($message = Session::get('error'))
            <div class="col-12 centrado">
                <div class="alert alert-danger  alert-block w-75">   
                        <strong>{{ $message }}</strong>
                    </div>
            </div>
                
            @endif
        </div>
    </form>
    </div>
</div>
</div>

@endsection





