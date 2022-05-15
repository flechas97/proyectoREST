<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app_aside.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet"href="js/chartist-js/dist/chartist.min.css">
    @yield('css')
    
    <title>Administracion Restaurante</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('css/favicon.ico') }}">
</head>
<body>

    <div class="container-fluid">
    <div class="row ">
        <button class="desplegar_menu" id="desplegar_boton"><i class="bi bi-list"></i></button>
            <div class="col-lg-2 col-md-3 col-sm-4 col-4 oscuro respond" id="desplegable">
                <aside class="aside">
                    <div class="menu">
                        
                        <div class="titulo">
                            <p class="title_aside">@lang('Administraciòn')</p>
                        </div>
                        @auth
                        <div class="articulo articulo_menu">
                            <a href="{{route('client')}}"><button class='enlace enlace_menu'>@lang('Zona Cliente')</button></a>
                        </div>
                        @if (@Auth::user()->hasRole('dios'))
                        
                        <div class="articulo articulo_menu">
                            <a href="{{route('welcome')}}"><button class='enlace enlace_menu'>@lang('Panel de control')</button></a>
                        </div>
                        
                        <div class="articulo articulo_menu">
                            <a href="{{route('clientes-show')}}"><button class='enlace enlace_menu'>@lang('Clientes')</button></a>
                        </div>
                        <div class="articulo articulo_menu gestion">
                            <button class='enlace enlace_menu'>@lang('Gestion') <i class="bi bi-caret-right-fill icono_desplegable"></i></button>
                            <div class="gestion_desplegable">
                                <div class="articulo">
                                    <a href="{{route('insert-show')}}"><button class='enlace'>@lang('Pedidos')</button></a>
                                </div>
                                <div class="articulo">
                                    <a href="{{route('almacen-show')}}"><button class='enlace'>@lang('Existencias almacen')</button></a>
                                </div>
                                <div class="articulo">
                                    <a href="{{route('sugerencias')}}"><button class='enlace'>@lang('Sugerencias')</button></a>
                                </div>
                            </div>
                        </div>
                        @endif
                        <div class="articulo articulo_menu">
                        <!-- <form action="welcome" method="post"> -->
                    <!-- <a href="" class="text-light">cerrar</a> -->
                    
                    <!-- <button>Cerrar</button> -->
                <!-- </form> -->
                            <form action="welcome" method="post">
                                @csrf
                            <a href=""><button class='enlace enlace_menu cerrar'>@lang('Cerrar sesion')</button></a>
                            </form>
                        </div>
                        @endauth
                        @guest
                        <div class="articulo">
                                    <a href="hola"><button class='enlace'>@lang('Iniciar sesion')</button></a>
                                </div>

                        @endguest
                        <div class="articulo footer_aside">
                            <p class="footer_aside_text "><a href="" class="enlaces_footer">@lang('Manual de uso').</a></p>
                            <p class="footer_aside_text"><a href="" class="enlaces_footer">@lang('Preguntas frecuentes').</a></p>
                            <p class="footer_aside_text"> <a href="" class="enlaces_footer"> @lang('Contacto').</a></p>
                        </div>
                    </div>
                </aside>
            </div>
            <div class="col-lg-10 col-md-9 col-sm-12 col-12 fondo_principal">
            <div class="header">
                <h1 class="panel_control">
                    @yield('titulo')
                    <img src="{{ asset('css/logo.jpg') }}" alt="" class="logo">
                </h1>
                
            </div> 
            
            @yield('content')
         


        </div>
    </div>


 
</div>
</div>

<a href="{{route('idioma',['locale' => 'es'])}}" class="idiomas"><div class="españa"></div></a>
<a href="{{route('idioma',['locale' => 'en'])}}" class="idiomas"><div class="ingles"></div></a>
<!-- <h1>No estas logeado</h1> -->


<!-- JavaScript Bundle with Popper -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="{{ asset('js/desplegar_menu.js') }}"></script>
@yield('script')

</body>
</html>