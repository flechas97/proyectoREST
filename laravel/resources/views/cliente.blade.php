@extends('appcliente')
@section('css')
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
@endsection
@section('content')


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

    <div id="scrollmargin"></div>
    <div class="carrousel ">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  {{-- <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div> --}}
  <div class="carousel-inner">
    <div class="carousel-item active"data-bs-interval="100000">
        <div class="contenidovideoprin">
            <h1 class="textovideoprin">Los mejores en lo clasico</h1>
            <button class="botonvideo">Pedir</button>
        </div>
        <video src="{{URL::asset('css/video.mp4')}}" mz-autoplay-scroll="" playsinline="" autoplay="" loop="" mz-always-muted="" muted="" width="100%"></video>
       
    </div>
    {{-- <div class="carousel-item">
      <div class="azul"></div>
    </div>
    <div class="carousel-item">
      <div class="amarillo"></div>
    </div> --}}
  </div>
  {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button> --}}

<div class="textoanimado">
    <img src="{{URL::asset('css/textoanimado.png')}}" alt="" class="animar">
</div>

{{-- <div class="panelanimado" id="panelanimar">
    <div class="sinaminar" id= "sinanimar">
        <div id="agrandar">
            <h1 class="textobanner text-light">Ve la champions Con nosotros</h1>
            <!-- <h5 class="text-light textobanner"> Todos los partidos</h5> -->
        </div>
        <!-- <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, recusandae!</h1> -->
    </div>
    <img class= "flecha" src="css/flecha.png" alt="">
    <button class="btnanimado" id="btnanimado"><div class="fondobtn"></div> <p class="textobtn">Horarios</p></button>
</div> --}}
{{-- <div class="videobanner">
    <video src="{{URL::asset('css/video.mp4')}}" mz-autoplay-scroll="" playsinline="" autoplay="" loop="" mz-always-muted="" muted="" width="100%"></video>
    <div class="contenidovideo">
        <h1 class="textovideo">Premium</h1>
        <button class="botonvideo">Iniciar pedido</button>
    </div>
</div> --}}

<div id="scene">
  <div data-depth="0" class="fondo2"></div>
  <div data-depth="1.1"><img src="{{URL::asset('css/hamburguesa.jpg')}}" alt="" class="fondo"></div>
  <div data-depth="2.0" class="capa">My first Layer!</div>
</div>
<!-- <div class="parallax-window" data-parallax="scroll" data-image-src="{{URL::asset('css/hamburguesa.jpg')}}"></div> -->
    <div class="row contenedortarjetas" data-parallax="scroll" data-image-src="{{URL::asset('css/fondoparallax.jpg')}}">
        <div class="col-12 col-lg-7 order-1 tarjetas">
            <div class="tarjeta">
                <div class="imagentarjetas"></div>
                <h2 class="titulotarjeta">Los mejores platos</h2>
                <p class="textotarjeta">
                    Consigue los mejores precios! Solo con la App
                </p>
                <button class="btntarjeta">Pedir</button>
            </div>
        </div>
        <div class="col-12 col-lg-5 order-2 tarjetas">
             <div class="tarjeta">
             <div class="imagentarjetas2"></div>
             <h2 class="titulotarjeta">Los mejores platos</h2>
                <p class="textotarjeta">
                    Consigue los mejores precios! Solo con la App
                </p>
                <button class="btntarjeta">Pedir</button>
            </div>
        </div>

    </div>


    <section class="tarjetaregalo">
        <div class="row bannerregalo">
            <div class="col-lg-6 col-12 col-sm-12 ">
                <img src="{{URL::asset('css/blob.png')}}" alt="" class="blob">
            </div>
            <div class="col-lg-6 col-12 col-sm-12 text-center">
                    <h1 class="titulotarjetaregalo">Tarjeta regalo</h1>
                    <p class="textotarjetaregalo">Presenta una tarjeta regalo a tu familia o amigos!</p>
                    <button class="botontarjetaregalo">Comprar tarjeta regalo</button>
            </div>
        </div>
    </section>

    <section class="secion">
        <div class="row justify-content-center rowsecion mt-5">
            <div class="col-12 col-lg-4">
                <div class="tarjetassecion">
                    <div class="imagen">
                        imagen
                    </div>
                    <h5 class="titulotarjetas">Titulo</h5>
                    <p class="textotarjeta">Lorem ipsum dolor sit amet cotur, aicing elit.</p>
                    <a href=""><button class="enlacetarjeta">Enlace</button></a>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="tarjetassecion">
                    <div class="imagen">
                        imagen
                    </div>
                    <h5 class="titulotarjetas">Titulo</h5>
                    <p class="textotarjeta">Lorem ipsum dolor sit amet cotur, aicing elit.</p>
                    <a href=""><button class="enlacetarjeta">Enlace</button></a>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="tarjetassecion">
                    <div class="imagen">
                        imagen
                    </div>
                    <h5 class="titulotarjetas">Titulo</h5>
                    <p class="textotarjeta">Lorem ipsum dolor sit amet cotur, aicing elit.</p>
                    <a href=""><button class="enlacetarjeta">Enlace</button></a>
                </div>
            </div>
        </div>
    </section>

    <div id="fondosesion">
        <div class="row justify-content-center">
            <div class="col-4 tarjetalogin">
                <div class="row">
                    <div class="col-5">
                            <button class="controlsesion" id="btninicio"><p class="textocontrolsesion">Inicio</p> </button>
                    </div>
                    <div class="col-5">
                            <button class="controlsesion" id="btnregistro"><p class="textocontrolsesion">Registro</p> </button>
                    </div>
                    <div class="col-2">
                            <button class="controlsesion" id="salirbtn"><p class="textocontrolsesion">Salir</p> </button>
                    </div>
                </div>
                <div class="row" id="inicio">

                    <form action="{{route('logincliente')}}" method="post">
                            @csrf
                        <div class="col-12 text-center">
                            <h2 class= "mt-3">Inicio de sesion</h2>
                        </div>
                        <div class="col-12 text-center">
                            <input type="text" name="email" id="" class="formulariossesion" placeholder="Email...*">
                        </div>
                        <div class="col-12 text-center">
                            <input type="password" name="password" id="" class="formulariossesion" placeholder="Contraseña...*">
                        </div>
                        <div class="col-12 text-center">
                            <input type="submit" value="Iniciar" class="submitformulariosesion">
                        </div>
                    </form>
                </div>
                <div class="row" id="registro" style="display=none">
                    <form action="{{route('registrar-in')}}" method="post">
                        @csrf
                        <div class="col-12 text-center">
                            <h2 class= "mt-3">Registro de sesion</h2>
                        </div>
                        <div class="col-12 text-center">
                            <input type="text" name="name" id="" class="formulariossesion" placeholder="Usuario...*">
                        </div>
                        <div class="col-12 text-center">
                            <input type="text" name="email" id="" class="formulariossesion" placeholder="Email...*">
                        </div>
                        <div class="col-12 text-center">
                            <input type="text" name="password" id="" class="formulariossesion" placeholder="Contraseña...*">
                        </div>
                        <div class="col-12 text-center">
                            <input type="text" name="password_confirmation" id="" class="formulariossesion" placeholder="Confirmar Contraseña...*">
                        </div>
                        <div class="col-12 text-center">
                            <input type="submit" value="Iniciar" class="submitformulariosesion">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="pedidosdespl">
    <h1 class="titulopedidos">Pedidos de {{session()->get('user')}}</h1>
    
    @foreach ($datos as $pedido)
        <h1>Id: {{$pedido->id}}  total: {{$pedido->total}}€</h1>
        @foreach ($detalles as $detalle)
            @foreach ($detalle as $detallitos)
                @if ($detallitos->id_pedido == $pedido->id)
                    <p><b>id detallle : {{$detallitos->id}}</b></p> 
                    <p>Cantidad : {{$detallitos->cantidad}}</p> 
                    @foreach ($productos as $producto)
                        @if ($producto->id == $detallitos->id_producto)
                            <p>producto nombre {{$producto->nombre}}</p>
                            <p>Precio del detalle: {{$detallitos->cantidad * $producto->precio}}€</p>
                        @endif
                    @endforeach
                @endif
            @endforeach
        @endforeach
    @endforeach
    </div>

    <div id="sugerencias">

    </div>
    @endsection
    <!-- <script src="https://unpkg.com/scrollreveal"></script>
    <script src="js/scroll.js"></script>
    <script src="js/menuresponsivecliente.js"></script> -->

 
    <!-- JavaScript Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html> -->