var addcesta = document.getElementsByClassName("addcesta");
var borrarlocal = document.getElementById("borrarlocal");
var lista = document.getElementById("lista");
borrarlocal.addEventListener("click",()=>{
    localStorage.clear()
})
for (let i = 0; i < addcesta.length; i++) {
    addcesta[i].addEventListener("click",()=>{
        var producto = addcesta[i].parentNode.parentNode.childNodes[1].childNodes[1].textContent;
        var precio = addcesta[i].parentNode.parentNode.childNodes[3].childNodes[1].textContent;
        var guardarlocal= [];
        if(!localStorage.getItem(producto)){
            localStorage.setItem(producto,0)
        }
        cantidad=parseInt(JSON.parse(localStorage.getItem(producto))[2]);
        cantidad++;
        if(!cantidad){
            guardarlocal.push(producto,precio,1);
            cantidad = 1;
        }else{
            guardarlocal.push(producto,precio,cantidad);
        }
        
        var lianterior = document.getElementById(producto)
        var producto_anterior = document.getElementById(producto)
        var cantidad_anterior = document.getElementById(producto+cantidad)
        if(lianterior){
            lianterior.remove();
        }
        
        
        localStorage.setItem(producto, JSON.stringify(guardarlocal));
        console.log(JSON.parse(localStorage.getItem(producto)));
        var cosas = JSON.parse(localStorage.getItem(producto));
        var li = document.createElement("li")
        var p = document.createElement("p")
        li.setAttribute("id",producto);
        p.textContent = cosas[0]+" : "+cosas[1]+" : "+cosas[2];
        li.appendChild(p);
        
        var enviarproducto = document.createElement("input");
        enviarproducto.setAttribute("type","hidden");
        enviarproducto.setAttribute("name",producto);
        enviarproducto.setAttribute("id",producto);
        enviarproducto.value = producto;
        var enviarcantidad = document.createElement("input");
        enviarcantidad.setAttribute("type","hidden");
        enviarcantidad.setAttribute("name",producto+"cantidad");
        enviarproducto.setAttribute("id",producto+"cantidad");
        enviarcantidad.value = cantidad;
        li.appendChild(enviarproducto);
        li.appendChild(enviarcantidad);
        lista.appendChild(li);
    }) 
}

for (let i = 0; i < localStorage.length; i++) {
    var li = document.createElement("li")
        var p = document.createElement("p")
        li.setAttribute("id",localStorage.key(i));
        p.textContent = localStorage.key(i)+
        " : "+JSON.parse(localStorage.getItem(localStorage.key(i)))[1]+
        " : "+JSON.parse(localStorage.getItem(localStorage.key(i)))[2];
        var enviarproducto = document.createElement("input");
        enviarproducto.setAttribute("type","hidden");
        enviarproducto.setAttribute("name",localStorage.key(i));
        enviarproducto.setAttribute("id",localStorage.key(i));
        enviarproducto.value = localStorage.key(i);
        var enviarcantidad = document.createElement("input");
        enviarcantidad.setAttribute("type","hidden");
        enviarcantidad.setAttribute("name",localStorage.key(i)+"cantidad");
        enviarproducto.setAttribute("id",localStorage.key(i)+"cantidad");
        enviarcantidad.value = JSON.parse(localStorage.getItem(localStorage.key(i)))[2];
        li.appendChild(enviarproducto);
        li.appendChild(enviarcantidad);
        li.appendChild(p);
        lista.appendChild(li); 
}