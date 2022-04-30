<form action="{{route('imprimir')}}" method="post">
    @csrf
    <input type="text" name="nombre" id="">
    <input type="submit" value="enviar">
</form>