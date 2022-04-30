<style>
    *{
        margin:0px;
        padding:0px;
        font-family:sans-serif;
    }
header{
    width:100%;
    height:100px;
    background-color:red;
    /* position: fixed;
                top: 0cm;
                left: 0cm;
                right: 0cm;
                height: 3cm;
               margin-bottom:50px; */
}
footer{
    width:100%;
    height:100px;
    background-color:red;
    position:absolute;
    bottom:0;
    z-index: 0;
    /* position: fixed; 
                bottom: 0cm; 
                left: 0cm; 
                right: 0cm;
                height: 2cm; */
}
.infocliente{
    position:absolute;
    top:110px;
    left:100px;
}
.infoempresa{
    position:absolute;
    top:110px;
    left:230px;
}
.infopedido{
    position:absolute;
    top:110px;
    left:360px;
}
.infofecha{
    position:absolute;
    top:110px;
    left:70%; 
}
table{
    margin-top:150px;
    margin-left:90px;
    /* position:absolute;
    top:220px;
    left:100px; */
}
th{
    background-color:#ff8f8f;
    margin:3px;
    padding: 5px 35px;
}
td{
    background-color:#a4ff8f;
    margin:3px; 
    padding: 5px 35px;
    z-index: 100;
}

</style>
<body>
<header>
    <h1>FACTURA DEL PEDIDO</h1>
</header>

<main>
            <div class="datos">
    <div class="infocliente">
        <h3>Cliente:</h3>
        <p>Id: {{$user[0]->id}}</p>
        <p>Nombre: {{$user[0]->name}}</p>
        <p>Email: {{$user[0]->email}}</p>
        <p>Telefono: cliente</p>
    </div>
    <div class="infoempresa">
        <h3>Empresa:</h3>
        <p>id cliente}}</p>
        <p>nombre cliente}}</p>
        <p>email cliente}}</p>
        <p>telefono cliente}}</p>
    </div>
    <div class="infopedido">
        <h3>Pedido:</h3>
        <p>Id: {{$pedido[0]->id}}</p>
        <p>A nombre de: {{$user[0]->name}}</p>
        @if($pedido[0]->estado == 0)
        <p>Estado: Pendiente</p>
        @else
        <p>Estado: Completado</p>
        @endif
        <p>Total: {{$pedido[0]->total}}€</p>
    </div>
    <div class="infofecha">
        <h3>Fecha Actual:</h3>
        <p>Fecha: hoy</p>
        <p>Fecha: hoy</p>
        <p>Fecha: hoy</p>
    </div>
</div>


<table>
    <tr>
        <th>Nombre Producto</th>
        <th>Cantidad</th>
        <th>Precio Ud.</th>
        <th>Total</th>
    </tr>
    
    @foreach($detalles as $detalle)
    <tr>
        <td>{{$detalle->nombre}}</td>
        <td>{{$detalle->cantidad}}</td>
        <td>{{$detalle->precio}}</td>
        <td>{{$detalle->cantidad*$detalle->precio}}</td>
    </tr>
    @endforeach
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td>Total: {{$pedido[0]->total}}</td>
    </tr>
</table>
</main>





</body>

