<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS only -->
    @yield('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/cliente.css">
    <title>Document</title>
</head>
<body data-parallax="scroll" data-image-src="{{URL::asset('css/fondoparallax.jpg')}}">
   
<header class="row justify-content-center">
        <div class="col-7 col-lg-7">
            <div class="row">
                <div class="col-3">
                    <a href="cliente"><h2 id="logo">LOGO</h2></a>
                </div>
                <div class="col-2 col-lg-1 desplegarmenu">
                    <button id="btn_menu"><i class="bi bi-list"></i></button>
                </div>
                    <div class="col-2 enlaces">
                        <a href=""> <button class="btn_mav">Inicio</button></a>                    </div>
                    <div class="col-2 enlaces">
                    <!-- <a href="{{route('mispedidos')}}">  -->
                        @if(session()->get('user'))
                        {{-- <button class="btn_mav" id="mis_pedidos">Mis Pedidos</button> --}}
                        @endif
                    <!-- </a> -->
                    </div>
                    <div class="col-2 enlaces">
                        <a href=""> <button class="btn_mav">Enlace</button></a>                    </div>
                    <div class="col-2 enlaces">
                     <!-- <button class="btn_mav" id="btn_sugerencias">Sugerencias</button> -->
                    </div>
            </div>
        </div>
            <div class="col-5 col-lg-5">
                <div class="row justify-content-end">

                    <div class="col-6">
                    @if(session()->get('user'))
                    <form action="{{route('registrar-out')}}" method="post">
                                @csrf
                   <button id="iniciarses" class="btn_mav">Cerrar sesion</button>
                   <p class="usuario">Usuario: {{session()->get('user')}}</p>
                    </form>
                    @else
                   <button id="iniciarses" class="btn_mav">Iniciar sesion</button>
                    @endif
                    </div>
                    @if(session()->get('user'))
                    <div class="col-6">
                    <a href="{{route('empezar_pedido')}}"><button class="btn_mav importante">Hacer pedido</button></a>
                    </div>
                    @endif
                </div>
            </div>
            <div class="menuresponsive" id="menu_responsive">
                <div class="row">
                    <div class="col-12 text-center enlaces_responsive">
                        <a href="" class=""><h5>Enlace</h5></a>
                    </div>
                    <div class="col-12 text-center enlaces_responsive">
                    <button class="btn_mav" id="mis_pedidosres">Mis Pedidos</button>
                    </div>
                    <div class="col-12 text-center enlaces_responsive">
                        <a href="" class=""><h5>Enlace</h5></a>
                    </div>
                    <div class="col-12 text-center enlaces_responsive">
                    <button class="btn_mav" id="btn_sugerenciasres">Sugerencias</button>
                    </div>
                </div>
            </div>
    </header>
    @if ($message = Session::get('error'))
    <div class="row justify-content-center">
        <div class="col-3">
                    <div class="alert alert-danger  alert-block w-100 text-center">   
                            <strong>{{ $message }}</strong>
                    </div>
        </div>
    </div>          
    @endif
    @if ($errors->any())
    <div class="row justify-content-center">
        <div class="col-3">
    <div class="alert alert-danger alert-block w-100 text-center">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    </div>
    </div>    
@endif

@yield('content')
<footer>
    <div class="row justify-content-center">
        <div class="col-lg-2 col-sm-12 my-4">
            <div class="row">
                <div class="col-12">
                    <h4>AYUDA</h4>
                </div>
                <div class="col-12">
                    Preguntas frecuentes
                </div>
                <div class="col-12">
                    Sobre Nuestras hubicaciones
                </div>
                <div class="col-12">
                    Sobre Nuestra historia
                </div>
            </div>
            
        </div>
        <div class="col-lg-2 col-sm-12 my-4">
            <div class="row">
                <div class="col-12">
                    <h4>EMPRESA</h4>
                </div>
                <div class="col-12">
                    Sobre Nosotros
                </div>
                <div class="col-12">
                    Sobre Nuestras hubicaciones
                </div>
                <div class="col-12">
                    Sobre Nuestra historia
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-12 my-4">
            <div class="row">
                <div class="col-12 my-1">
                        <h4>Nuestra APP</h4>
                        <div class="redes">
                            <img src="{{URL::asset('css/apple.png')}}" alt="" width="180px">
                            <img src="{{URL::asset('css/android.png')}}" alt="" width="180px">
                        </div>
                </div>

                <div class="col-12 my-1">
                        <h5>Metodos de pago</h5>
                        <img src="{{URL::asset('css/1.svg')}}" alt="" class="pago">
                        <img src="{{URL::asset('css/2.svg')}}" alt="" class="pago">
                        <img src="{{URL::asset('css/3.svg')}}" alt="" class="pago">
                        <img src="{{URL::asset('css/4.svg')}}" alt="" class="pago">
                        <img src="{{URL::asset('css/5.svg')}}" alt="" class="pago">
                        <img src="{{URL::asset('css/6.svg')}}" alt="" class="pago">
                        <img src="{{URL::asset('css/7.svg')}}" alt="" class="pago">
                        <img src="{{URL::asset('css/8.svg')}}" alt="" class="pago">
                        <img src="{{URL::asset('css/9.svg')}}" alt="" class="pago">
                        <img src="{{URL::asset('css/10.svg')}}" alt="" class="pago">
                </div>

                <div class="col-12 my-1">
                    <h5>Nuestras redes</h5>
                    <div class="redes">
                        <i class="bi bi-twitter icoredes"></i>
                        <i class="bi bi-twitter icoredes"></i>
                        <i class="bi bi-twitter icoredes"></i>
                        <i class="bi bi-twitter icoredes"></i>
                        <i class="bi bi-twitter icoredes"></i>
                        <i class="bi bi-twitter icoredes"></i>
                        <i class="bi bi-twitter icoredes"></i>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </footer>
    {{-- <div class="loader"></div> --}}
    
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="js/scroll.js"></script>
    <script src="js/menuresponsivecliente.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
    <script src="js/parallax.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="parallax2/parallax.js"></script>
<script src="js/cesta.js"></script>
<script src="js/menu.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>