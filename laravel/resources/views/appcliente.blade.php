<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/cliente.css">
    @yield('css')
    <title>Document</title>
</head>
<body>
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
                    <a href=""> <button class="btn_mav"><div class="btn_mav_animacion"><p class="textobtnanimado">Enlace</p> </div> <p class="textonavbtn">Enlace</p>  </button></a>
                    </div>
                    <div class="col-2 enlaces">
                    <a href=""> <button class="btn_mav"><div class="btn_mav_animacion"><p class="textobtnanimado">Mis Pedidos</p> </div> <p class="textonavbtn">Mis Pedidos</p>  </button></a>
                    </div>
                    <div class="col-2 enlaces">
                    <a href=""> <button class="btn_mav"><div class="btn_mav_animacion"><p class="textobtnanimado">Enlace</p> </div> <p class="textonavbtn">Enlace</p>  </button></a>
                    </div>
                    <div class="col-2 enlaces">
                    <a href=""> <button class="btn_mav"><div class="btn_mav_animacion"><p class="textobtnanimado">Enlace</p> </div> <p class="textonavbtn">Enlace</p>  </button></a>
                    </div>
            </div>
        </div>
            <div class="col-5 col-lg-5">
                <div class="row justify-content-end">

                    <div class="col-6">
                    @if(session()->get('user'))
                    <form action="{{route('registrar-out')}}" method="post">
                                @csrf
                    <button id="iniciarses" class="btn_mav"><div class="btn_mav_animacion btn_mav_animacion_acciones"><p class="textobtnanimado">Cerrar sesion</p> </div> <p class="textonavbtn textonavbtnacciones">Bienvenido: {{session()->get('user')}}</p></button>
                    </form>
                    @else
                    <button id="iniciarses" class="btn_mav"><div class="btn_mav_animacion btn_mav_animacion_acciones"><p class="textobtnanimado">Iniciar</p> </div> <p class="textonavbtn textonavbtnacciones">Iniciar sesion</p>  </button>
                    @endif
                    </div>
                    @if(session()->get('user'))
                    <div class="col-6">
                    <a href="{{route('empezar_pedido')}}"> <button class="btn_mav"><div class="btn_mav_animacion btn_mav_animacion_acciones"><p class="textobtnanimado">Pedir</p> </div> <p class="textonavbtn textonavbtnacciones">Hacer pedido</p>  </button></a>
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
                        <a href="" class=""><h5>Enlace</h5></a>
                    </div>
                    <div class="col-12 text-center enlaces_responsive">
                        <a href="" class=""><h5>Enlace</h5></a>
                    </div>
                    <div class="col-12 text-center enlaces_responsive">
                        <a href="" class=""><h5>Enlace</h5></a>
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
            <div class="col-2">
                <div class="row">
                    <div class="col-12">
                        Sobre Restaurante
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
            <div class="col-2">
                Nuestros productos y servicios
            </div>
            <div class="col-2">
                Equipo de soporte
            </div>
            <div class="col-2">
                Redes
            </div>
        </div>
    </footer>

    
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="js/scroll.js"></script>
    <script src="js/menuresponsivecliente.js"></script>

 
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>