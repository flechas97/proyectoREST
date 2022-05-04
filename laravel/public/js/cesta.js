var addcesta = document.getElementsByClassName("addcesta");
var borrarlocal = document.getElementById("borrarlocal");
var lista = document.getElementById("lista");

borrarlocal.addEventListener("click",()=>{
    localStorage.clear()
})
for (let i = 0; i < addcesta.length; i++) {
    if(localStorage.getItem(addcesta[i].parentNode.parentNode.childNodes[1].childNodes[1].textContent)){
        addcesta[i].disabled = true
    }
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
        // console.log(JSON.parse(localStorage.getItem(producto)));
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
        var botonrestar= document.createElement("button");
        botonrestar.textContent = "Restar";
        botonrestar.addEventListener("click",(e)=>{
            e.preventDefault();
            if(cantidad >1){
            cantidad--
            console.log(cantidad)
            guardarlocal[2] = cantidad
            localStorage.setItem(producto, JSON.stringify(guardarlocal));
            enviarcantidad.value = cantidad;
            p.textContent = cosas[0]+" : "+cosas[1]+" : "+cantidad;
            calculartotal();
            }
        })
        var botonsumar= document.createElement("button");
        botonsumar.textContent = "Sumar";
        botonsumar.addEventListener("click",(e)=>{
            e.preventDefault();
            cantidad++
            console.log(cantidad)
            guardarlocal[2] = cantidad
            localStorage.setItem(producto, JSON.stringify(guardarlocal));
            enviarcantidad.value = cantidad;
            p.textContent = cosas[0]+" : "+cosas[1]+" : "+cantidad;
            calculartotal();
            
        })
        var botoneliminar= document.createElement("button");
        botoneliminar.textContent = "Eliminar";
        botoneliminar.addEventListener("click",(e)=>{
            e.preventDefault();
            localStorage.removeItem(producto);
            li.remove();
            ver_cesta.innerHTML = "<i class='bi bi-bag'></i><br>"+ localStorage.length;
            location.reload();
        });
        li.appendChild(enviarproducto);
        li.appendChild(enviarcantidad);
        li.appendChild(botonrestar);
        li.appendChild(botonsumar);
        li.appendChild(botoneliminar);
        lista.appendChild(li);


        ver_cesta.innerHTML = "<i class='bi bi-bag'></i><br>"+ localStorage.length;
 
        addcesta[i].disabled = true
        calculartotal();
    }) 
}

for (let i = 0; i < localStorage.length; i++) {
    var guardarlocal= [JSON.parse(localStorage.getItem(localStorage.key(i)))[0],JSON.parse(localStorage.getItem(localStorage.key(i)))[1],JSON.parse(localStorage.getItem(localStorage.key(i)))[2]];
    // guardarlocal.push(producto,precio,cantidad);
    var cantidad = JSON.parse(localStorage.getItem(localStorage.key(i)))[2];
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
        var botonrestar= document.createElement("button");
        botonrestar.textContent = "Restar";
        botonrestar.setAttribute("class","restarbtn")
        // botonrestar.addEventListener("click",(e)=>{
        //     e.preventDefault();
        //     if(cantidad >1){
        //         //var cantidad = JSON.parse(localStorage.getItem(botonrestar.id))[2];
        //         cantidad--
        //         console.log(botonrestar.id)
        //         guardarlocal[2] = cantidad
        //         localStorage.setItem(botonrestar.id, JSON.stringify(guardarlocal));
        //         enviarcantidad.value = cantidad;
        //         p.textContent = botonrestar.id+" : "+JSON.parse(localStorage.getItem(botonrestar.id))[1]+" : "+cantidad;
        //     }
        // })
        var botoneliminar= document.createElement("button");
        botoneliminar.setAttribute("class","eliminarbtn")
        botoneliminar.textContent = "Eliminar";
        var botonsumar= document.createElement("button");
        botonsumar.setAttribute("class","sumarbtn")
        botonsumar.textContent = "Sumar";
        // botoneliminar.addEventListener("click",(e)=>{
        //     e.preventDefault();
        //     localStorage.removeItem(JSON.parse(localStorage.getItem(localStorage.key(i)))[0]);
        //     li.remove();
        //     ver_cesta.innerHTML = "<i class='bi bi-bag'></i><br>"+ localStorage.length;
        // })
        li.appendChild(enviarproducto);
        li.appendChild(enviarcantidad);
        li.appendChild(p);
        li.appendChild(botonrestar)
        li.appendChild(botonsumar)
        li.appendChild(botoneliminar)
        lista.appendChild(li); 
        
}
var botones = document.getElementsByClassName("restarbtn")
for (let i = 0; i < localStorage.length; i++) {
    
    botones[i].addEventListener("click",(e)=>{
        e.preventDefault()
        var cantidad = JSON.parse(localStorage.getItem(botones[i].parentNode.id))[2];
        console.log(cantidad)
                    if(cantidad >1){
                    cantidad--
                    var guardarlocal = [JSON.parse(localStorage.getItem(botones[i].parentNode.id))[0],JSON.parse(localStorage.getItem(botones[i].parentNode.id))[1],cantidad]
                    localStorage.setItem(botones[i].parentNode.id, JSON.stringify(guardarlocal));
                    //enviarcantidad.value = cantidad;
                    var p = botones[i].parentNode.childNodes[2]
                    console.log(botones[i].parentNode.childNodes)
                    botones[i].parentNode.childNodes[0].value= botones[i].parentNode.id;
                    botones[i].parentNode.childNodes[1].value= cantidad;
                    p.textContent = botones[i].parentNode.id+" : "+JSON.parse(localStorage.getItem(botones[i].parentNode.id))[1]+" : "+cantidad;
                    calculartotal()
            }
    })
}

var elimbotones = document.getElementsByClassName("eliminarbtn")
for (let i = 0; i < localStorage.length; i++) {
    
    elimbotones[i].addEventListener("click",(e)=>{
        e.preventDefault();
        localStorage.removeItem(JSON.parse(localStorage.getItem(botones[i].parentNode.id))[0]);
        console.log(  botones[i].parentNode)
        //botones[i].parentNode.remove();
        ver_cesta.innerHTML = "<i class='bi bi-bag'></i><br>"+ localStorage.length;
        location.reload();
    })
}

var sumarbotones = document.getElementsByClassName("sumarbtn")
for (let i = 0; i < localStorage.length; i++) {
    
    sumarbotones[i].addEventListener("click",(e)=>{
        e.preventDefault()
        var cantidad = JSON.parse(localStorage.getItem(sumarbotones[i].parentNode.id))[2];
        cantidad++
        var guardarlocal = [JSON.parse(localStorage.getItem(sumarbotones[i].parentNode.id))[0],JSON.parse(localStorage.getItem(sumarbotones[i].parentNode.id))[1],cantidad]
        localStorage.setItem(sumarbotones[i].parentNode.id, JSON.stringify(guardarlocal));
        var p = sumarbotones[i].parentNode.childNodes[2]
        sumarbotones[i].parentNode.childNodes[0].value= sumarbotones[i].parentNode.id;
        sumarbotones[i].parentNode.childNodes[1].value= cantidad;
        p.textContent = sumarbotones[i].parentNode.id+" : "+JSON.parse(localStorage.getItem(sumarbotones[i].parentNode.id))[1]+" : "+cantidad;
        calculartotal()
    })
}


// var eventosrestar = document.getElementsByClassName('botonrestar')
// for (let i = 0; i < eventosrestar.length; i++) {
//     eventosrestar[i].addEventListener("click",(e)=>{
//             e.preventDefault();
//             var cantidad = JSON.parse(localStorage.getItem(eventosrestar[i].parentNode.id))[2];
//             var precio = JSON.parse(localStorage.getItem(eventosrestar[i].parentNode.id))[1];
//             var p = eventosrestar[i].parentNode.childNodes[2]
//             var guardarlocal = [eventosrestar[i].parentNode.id,precio,cantidad]
//             if(cantidad >1){
//                 cantidad--
//                 console.log(cantidad)
//                 guardarlocal[2] = cantidad
//                 localStorage.setItem(eventosrestar[i].parentNode.id, JSON.stringify(guardarlocal));
//                 enviarcantidad.value = cantidad;
//                 p.textContent = eventosrestar[i].parentNode.id+" : "+JSON.parse(localStorage.getItem(eventosrestar[i].parentNode.id))[1]+" : "+cantidad;
//                 // calculartotal();
//                 console.log(p.textContent)
//             }
//     })
// }

var ver_cesta = document.getElementById('ver_cesta');
ver_cesta.innerHTML = "<i class='bi bi-bag'></i><br>"+ localStorage.length;
var cesta = document.getElementById('cesta');
var productos = document.getElementsByClassName("productos")
cesta.style.display = "none"
ver_cesta.addEventListener("click",(e)=>{
    
    if (cesta.style.display == "none") {
        cesta.style.display = "block";
        sessionStorage.setItem("cesta",1)
        productos[0].style.marginRight = "200px"
    }else{
        cesta.style.display = "none"
        sessionStorage.setItem("cesta",0)
        productos[0].style.marginRight = "0px"
    }
    
})
if(sessionStorage.getItem("cesta")==1){
    cesta.style.display = "block";
    productos[0].style.marginRight = "200px"
}else{
    cesta.style.display = "none"
    productos[0].style.marginRight = "0px"
}
calculartotal()
function calculartotal() {
    var total = 0;
    var totalcesta = document.getElementById('totalcesta')
    var totaltotal = document.getElementById('total')
    for (let i = 0; i < localStorage.length; i++) {
        var productototal = JSON.parse(localStorage.getItem(localStorage.key(i)));
        total += parseFloat(productototal[1])*parseFloat(productototal[2]);
        console.log(total)
    }
    totalcesta.innerHTML = total+"€";
    totaltotal.value = total;

}

