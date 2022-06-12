@extends('appcliente')
@section('css')
    <link rel="stylesheet" href="css/pedir.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
@endsection
@section('content')
<div class="header_madera">
    <div class="logo"></div>
</div>
    @if ($message = Session::get('error'))
            <div class="alert alert-danger alert-block alert-dismissible text-center alertita">   
                <strong>{{ $message }}</strong>
               <a href=""><button>cerrar</button></a>
            </div>
    @endif
    {{-- @if ($errors->any())
    <div class="row  alertita">
        <div class="col-3">
            <div class="alert alert-danger alert-block w-100 text-center ">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>    
    @endif --}}

    {{-- <div id="scrollmargin"></div> --}}
    <div class="carrousel ">

  {{-- <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div> --}}
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="100000">
        <div class="contenidovideoprin">
            <h1 class="textovideoprin">No dejes para mañana lo que puedas hacer <b>HOY</b></h1>
            <button class="botonvideo">Pedir</button>
        </div>
        <video src="{{URL::asset('css/video3.mp4')}}" mz-autoplay-scroll="" playsinline="" autoplay="" loop="" mz-always-muted="" muted="" width="100%"></video>
    </div>
    {{-- <div class="carousel-item">
      <div class="azul"></div>
    </div>
    <div class="carousel-item">
      <div class="amarillo"></div>
    </div> --}}

</div>
</div>
  {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button> --}}

  <!-- Texto animado -->
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
<!-- Banner parallax -->
{{-- <div id="scene">
  <div data-depth="0" class="fondo2"></div>
  <div data-depth="1.1"><img src="{{URL::asset('css/hamburguesa.jpg')}}" alt="" class="fondo"></div>
  <div data-depth="2.0" class="capa">My first Layer!</div>
</div> --}}
<!-- <div class="parallax-window" data-parallax="scroll" data-image-src="{{URL::asset('css/hamburguesa.jpg')}}"></div> -->

<!-- Seccion de tarjetas -->
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
                <div class="contenidoregalo">
                    <h1 class="titulotarjetaregalo">Tarjeta regalo</h1>
                    <p class="textotarjetaregalo">Presenta una tarjeta regalo a tu familia o amigos!</p>
                    <button class="botontarjetaregalo">Comprar tarjeta regalo</button>
                </div>
            </div>
        </div>
    </section>

    <section class="secion" data-parallax="scroll" data-image-src="{{URL::asset('css/fondoparallax.jpg')}}">
        <div class="row justify-content-center rowsecion">
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
                            <h2 class= "mt-3">Registro de sesiona</h2>
                        </div>
                        <div class="col-12 text-center">
                            <input type="text" name="name" class="formulariossesion" placeholder="Usuario...*">
                        </div>
                        <div class="col-12 text-center">
                            <input type="text" name="email" class="formulariossesion" placeholder="Email...*">
                        </div>
                        <div class="col-12 text-center">
                            <input type="text" name="password" class="formulariossesion" placeholder="Contraseña...*">
                        </div>
                        <div class="col-12 text-center">
                            <input type="text" name="password_confirmation" class="formulariossesion" placeholder="Confirmar Contraseña...*">
                        </div>
                        <div class="col-12 text-center">
                            <input type="text" name="telefono" class="formulariossesion" placeholder="Telefono...*">
                        </div>
                        <div class="col-12 text-center">
                            <input type="text" name="direccion" class="formulariossesion" placeholder="Direccion...*">
                        </div>
                        <div class="col-12 text-center">
                            <input type="text" name="codigo_postal" class="formulariossesion" placeholder="Codigo postal...*">
                        </div>
                        {{-- Numero de telefono
                            direccion
                            codigo postal --}}
                        <div class="col-12 text-center">
                            <input type="submit" value="Iniciar" class="submitformulariosesion">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>





    <!-- Ventanas de los laterales -->


    <!-- Subventana MIS PEDIDOS -->
    <div id="pedidos"><button id="volver_pedidos"></button>
        @if(session()->get('user'))
        <h1 class="titulo_pedidos">Completa Tu Pedido</h1>
        @else
        <h1 class="titulo_pedidos">Menu</h1>
        @endif
        
    <div id="pedidosdespl">
        @if(!session()->get('user'))
    <button class="abrir_pedidos" id="mis_pedidos" style="display: none;"></button>
    @else
    <button class="abrir_pedidos" id="mis_pedidos"></button>
    @endif
    <div class="cajapedidos">

        <h1 class="titulopedidos">Pedidos de {{session()->get('user')}}</h1>
   
    @foreach ($datos as $pedido)
    <i class="bi bi-heart-arrow"></i><h5 class="subtitulopedido"><b>Fecha:</b> {{$pedido->created_at}} <b>Total:</b> {{$pedido->total}}€</h5>
    <hr>
    <div class="detalle_pedido">
        @foreach ($detalles as $detalle)
            @foreach ($detalle as $detallitos)
                @if ($detallitos->id_pedido == $pedido->id)
                <div class="contenido_pedido">
                    @foreach ($productos as $producto)
                        @if ($producto->id == $detallitos->id_producto)
                            <p><b>Producto</b>  {{$producto->nombre}}</p>
                            <p><b>Precio:</b> {{$detallitos->cantidad * $producto->precio}}€</p>
                        
                        @endif
                    @endforeach
                    <p><b>Cantidad :</b> {{$detallitos->cantidad}}</p> 
                    </div>
                    {{-- <p><b>id detallle : {{$detallitos->id}}</b></p>  --}}
                @endif
            @endforeach
        @endforeach
    </div>
    @endforeach
</div>
</div>
  <!-- END Subventana MIS PEDIDOS -->
        <button id="abrir_pedidos"></button>
        {{-- <button id="borrarlocal">Borrar local</button> --}}
        <!-- <button id="ver_cesta"></button> -->
        <div class="productos">
            <div class="row w-100">
                <div class="col-12 col-lg-3">
                    <h1 class="text-center menu_plato" id="btn_primeros">Primeros</h1>
                </div>
                <div class="col-12 col-lg-3">
                    <h1 class="text-center menu_plato" id="btn_segundos">Segundos</h1>
                </div>
                <div class="col-12 col-lg-3">
                    <h1 class="text-center menu_plato" id="btn_postres">Postres</h1>
                </div>
                <div class="col-12 col-lg-3">
                    <h1 class="text-center menu_plato" id="btn_bebidas">Bebidas</h1>
                </div>
            </div>
            
          
            
            
          <div id="primeros">
            @foreach($primeros as $primero)
            <div class="producto">
                <div class="añadido"></div>
                <div class="row">
                    <div class="col-12">
                        <img src="{{route('imagen',['id'=>$primero->id])}}" alt="" class="imagenproducto">
                    </div>
                    <div class="col-12">
                        <h3>{{$primero->nombre}}</h3>
                    </div>
                    <div class="col-12 d-none">
                        <h3>{{$primero->precio}}€</h3>
                    </div>
                    <div class="col-12">
                        <button class="addcesta">Añadir a la cesta</button>
                    </div>
                </div>
            </div>
            @endforeach
          </div>
          <div id="segundos">
            
            @foreach($segundos as $segundo)
            <div class="producto">
                <div class="añadido"></div>
                <div class="row">
                    <div class="col-12">
                        <img src="{{route('imagen',['id'=>$segundo->id])}}" alt="" class="imagenproducto">
                    </div>
                    <div class="col-12">
                        <h3>{{$segundo->nombre}}</h3>
                    </div>
                    <div class="col-12 d-none">
                        <h3>{{$segundo->precio}}€</h3>
                    </div>
                    <div class="col-12">
                        <button class="addcesta">Añadir a la cesta</button>
                    </div>
                </div>
            </div>
            @endforeach
          </div>
          <div id="postres">
            
            @foreach($postres as $postre)
            <div class="producto">
                <div class="añadido"></div>
                <div class="row">
                    <div class="col-12">
                        <img src="{{route('imagen',['id'=>$postre->id])}}" alt="" class="imagenproducto">
                    </div>
                    <div class="col-12">
                        <h3>{{$postre->nombre}}</h3>
                    </div>
                    <div class="col-12 d-none">
                        <h3>{{$postre->precio}}€</h3>
                    </div>
                    <div class="col-12">
                        <button class="addcesta">Añadir a la cesta</button>
                    </div>
                </div>
            </div>
            @endforeach
          </div>
          <div id="bebidas">
            
            @foreach($bebidas as $bebida)
            <div class="producto">
                <div class="añadido"></div>
                <div class="row">
                    <div class="col-12">
                        <img src="{{route('imagen',['id'=>$bebida->id])}}" alt="" class="imagenproducto">
                    </div>
                    <div class="col-12">
                        <h3>{{$bebida->nombre}}</h3>
                    </div>
                    <div class="col-12 d-none">
                        <h3>{{$bebida->precio}}€</h3>
                    </div>
                    <div class="col-12">
                        <button class="addcesta">Añadir a la cesta</button>
                    </div>
                </div>
            </div>
            @endforeach
          </div>
    {{-- @foreach($productos as $producto)
        <div class="producto">
            <div class="añadido"></div>
            <div class="row">
                <div class="col-12">
                    <img src="{{route('imagen',['id'=>$producto->id])}}" alt="" class="imagenproducto">
                </div>
                <div class="col-12">
                    <h3>{{$producto->nombre}}</h3>
                </div>
                <div class="col-12 d-none">
                    <h3>{{$producto->precio}}€</h3>
                </div>
                <div class="col-12">
                    <button class="addcesta">Añadir a la cesta</button>
                </div>
            </div>
        </div>
    @endforeach --}}
</div>
<div id="despcesta">
    @if(session()->get('user'))
<button id="ver_cesta">ver cesta</button>
@else
<button id="ver_cesta" style="display: none;">ver cesta</button>
@endif
    <form action="{{route('mandar_pedido')}}" method="post" id="cesta">
        @csrf
        <!-- <input type="hidden" name="id_user" value="{{session()->get('id_user')}}">
        <input type="hidden" name="nombre" value="{{session()->get('user')}}"> -->
        <input id="total" type="hidden" name="total" value = "0">
        <ul id="lista">
            <h3 class="titulo_cesta">Lista de la cesta</h3>
        </ul>
        <h5 id= "totalcesta">TOTAL: </h5>
        <input type="submit" value="" class="enviar_cesta">
      
    </form>
</div>
    </div>
    <div id="inicio_sesion">
        @if(!session()->get('user'))
        <button id="btn_inicio_sesion"></button>
        @else
        <button id="btn_inicio_sesion"></button>
        @endif

        <div id="sugerencias">
            @if(session()->get('user'))
            <button class="abrir_sugerencias" id="btn_sugerencias"></button>
            @else
            <button class="abrir_sugerencias" id="btn_sugerencias" style="display:none;"></button>
            @endif
                    <div class="formulario_sugerencias">
                        <h2>Formulario Sugerencias</h2>
                        <form action="{{route('añadir_sugerencia')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <input type="text" name="asunto" id="asunto_form" placeholder="Asunto">
                                </div>
                                <div class="col-12">
                                    <textarea name="contenido" id="texto_form" cols="30" rows="10" placeholder="Contenido sugerencia..."></textarea>
                                </div>
                                <div class="col-12">
                                    <input type="submit" value="enviar" id="boton_form">
                                </div>
                            </div>
                        </form>
                    </div>
        </div>

        @if(!session()->get('user'))
        <div class="row ventanalogin">
            
            <div class="col-lg-6 col-12 tarjetalogin">
                <button id="volver_sesion"></button>
                    <form action="{{route('logincliente')}}" method="post">
                            @csrf
                        <div class="col-12 text-center">
                            <h2 class= "mt-lg-3 mt-0">Inicio de sesion</h2>
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
            <div class=" col-lg-6 col-12 tarjetalogin">
                        
                    <form action="{{route('registrar-in')}}" method="post">
                        @csrf
                        <div class="col-12 text-center">
                            <h2 class= "mt-lg-3 mt-0">Registro de sesion</h2>
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
                            <input type="text" name="telefono" class="formulariossesion" placeholder="Telefono...*">
                        </div>
                        <div class="col-12 text-center">
                            <input type="text" name="direccion" class="formulariossesion" placeholder="Direccion...*">
                        </div>
                        <div class="col-12 text-center">
                            <input type="text" name="codigo_postal" class="formulariossesion" placeholder="Codigo postal...*">
                        </div>
                        <div class="col-12 text-center">
                            <input type="submit" value="Iniciar" class="submitformulariosesion">
                        </div>
                    </form>
            </div>
        </div>
        @else
        <button id="volver_sesion">Volver</button>
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="row">
                    <div class="col-12 header_perfil p-2">
                        <h1 class="pt-2 titulo_perfil">Datos del perfil</h1>
                    </div>
                    <div class="col-6 align-items-center border border-dark contenido_perfil">
                        <h2>Nombre:</h2>
                    </div>
                    <div class="col-6  align-items-center border border-dark contenido_perfil">
                        <h5>{{$usuario[0]->name}}</h5>
                    </div>
                    {{-- separador --}}
                    <div class="col-6 align-items-center border border-dark contenido_perfil">
                        <h2>Correo:</h2>
                    </div>
                    <div class="col-6  align-items-center border border-dark contenido_perfil">
                        <h5>{{$usuario[0]->email}}</h5>
                    </div>
                     {{-- separador --}}
                     <div class="col-6 align-items-center border border-dark contenido_perfil">
                        <h2>Telefono:</h2>
                    </div>
                    <div class="col-6  align-items-center border border-dark contenido_perfil">
                        <h5>{{$usuario[0]->telefono}}</h5>
                    </div>
                     {{-- separador --}}
                     <div class="col-6 align-items-center border border-dark contenido_perfil">
                        <h2>Direccion:</h2>
                    </div>
                    <div class="col-6 align-items-center border border-dark contenido_perfil">
                        <h5>{{$usuario[0]->direccion}}</h5>
                    </div>
                     {{-- separador --}}
                     <div class="col-6 align-items-center border border-dark contenido_perfil">
                        <h2>Codigo postal:</h2>
                    </div>
                    <div class="col-6 align-items-center border border-dark contenido_perfil">
                        <h5>{{$usuario[0]->codigo_postal}}</h5>
                    </div>
                     {{-- separador --}}
                     <div class="col-1">
                        <form action="{{route('registrar-out')}}" method="post">
                            @csrf
                            <button id="iniciarses" class="btn_mav">Cerrar sesion</button>
                        </form>
                     </div>
                </div>
            </div>
        </div>
       
        {{-- <p class="usuario">Usuario: {{session()->get('user')}}</p>
        {{$usuario[0]->telefono}} --}}
        @endif
    </div>

    @endsection
    <!-- <script src="https://unpkg.com/scrollreveal"></script>
    <script src="js/scroll.js"></script>
    <script src="js/menuresponsivecliente.js"></script> -->

 
    <!-- JavaScript Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html> -->