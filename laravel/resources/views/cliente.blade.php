@extends('appcliente')
@section('css')
<link rel="stylesheet" href="css/cliente.css">
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
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="verde"></div>
    </div>
    <div class="carousel-item">
      <div class="azul"></div>
    </div>
    <div class="carousel-item">
      <div class="amarillo"></div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </div>

<div class="panelanimado" id="panelanimar">
    <div class="sinaminar" id= "sinanimar">
        <div id="agrandar">
            <h1 class="textobanner text-light">Ve la champions Con nosotros</h1>
            <!-- <h5 class="text-light textobanner"> Todos los partidos</h5> -->
        </div>
        <!-- <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, recusandae!</h1> -->
    </div>
    <img class= "flecha" src="css/flecha.png" alt="">
    <button class="btnanimado" id="btnanimado"><div class="fondobtn"></div> <p class="textobtn">Horarios</p></button>
</div>

    <div class="row contenedortarjetas">
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
                a
            </div>
        </div>
        <div class="col-12 col-lg-5 order-4 order-lg-3 tarjetas">
             <div class="tarjeta">
               a
            </div>
        </div>
        <div class="col-12 col-lg-7 order-3 order-lg-4 tarjetas">
            <div class="tarjeta">
                imagen
            </div>
        </div>
    </div>


    <section class="secion">
        <div class="row justify-content-center rowsecion">
            <div class="col-10 col-lg-4">
                <div class="tarjetassecion">
                    <div class="imagen">
                        imagen
                    </div>
                    <h5 class="titulotarjetas">Titulo</h5>
                    <p class="textotarjeta">Lorem ipsum dolor sit amet cotur, aicing elit.</p>
                    <a href=""><button class="enlacetarjeta">Enlace</button></a>
                </div>
            </div>
            <div class="col-10 col-lg-4">
                <div class="tarjetassecion">
                    <div class="imagen">
                        imagen
                    </div>
                    <h5 class="titulotarjetas">Titulo</h5>
                    <p class="textotarjeta">Lorem ipsum dolor sit amet cotur, aicing elit.</p>
                    <a href=""><button class="enlacetarjeta">Enlace</button></a>
                </div>
            </div>
            <div class="col-10 col-lg-4">
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
                            <input type="text" name="password" id="" class="formulariossesion" placeholder="Contraseña...*">
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
    @endsection




    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="js/scroll.js"></script>
    <script src="js/menuresponsivecliente.js"></script>

 
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>