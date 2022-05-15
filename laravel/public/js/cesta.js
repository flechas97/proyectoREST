var addcesta = document.getElementsByClassName("addcesta");
var addproducto = document.getElementsByClassName("producto");
var borrarlocal = document.getElementById("borrarlocal");
var lista = document.getElementById("lista");
var imagen = document.getElementsByClassName("imagenproducto");
var añadido = document.getElementsByClassName('añadido')
// borrarlocal.addEventListener("click",()=>{
//     localStorage.clear()
// })
for (let i = 0; i < addcesta.length; i++) {
    if(localStorage.getItem(addcesta[i].parentNode.parentNode.childNodes[3].childNodes[1].textContent)){
        addcesta[i].disabled = true
        añadido[i].style.display = "block"
    }
    var div_principal = addcesta[i].parentNode.parentNode.parentNode;
    div_principal.addEventListener("mouseenter",()=>{
        imagen[i].style.transform = 'scale(1.1,1.1) translateY(-5.0%)';
        // imagen[i].style.transform = '';
    })
    div_principal.addEventListener("mouseleave",()=>{
        imagen[i].style.transform = 'scale(1.0,1.0)';
    })
    addcesta[i].style.display = "none";
    addproducto[i].addEventListener("click",()=>{
        añadido[i].style.display = "block"
        console.log(addcesta[i].parentNode.parentNode.childNodes[3].childNodes[1].textContent)
        var producto = addcesta[i].parentNode.parentNode.childNodes[3].childNodes[1].textContent;
        var precio = addcesta[i].parentNode.parentNode.childNodes[5].childNodes[1].textContent;
        var guardarlocal= [];
        if(!localStorage.getItem(producto)){
            localStorage.setItem(producto,0)
        
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
        p.textContent = cosas[0]+" : "+cosas[1];
        li.appendChild(p);
        var numero_cantidad= document.createElement("p");
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
        botonrestar.setAttribute('class','restarbtn')
        // botonrestar.textContent = "Restar";
        botonrestar.addEventListener("click",(e)=>{
            e.preventDefault();
            if(cantidad >1){
            cantidad--
            console.log(cantidad)
            guardarlocal[2] = cantidad
            localStorage.setItem(producto, JSON.stringify(guardarlocal));
            numero_cantidad.textContent = cantidad; 
            enviarcantidad.value = cantidad;
            p.textContent = cosas[0]+" : "+cosas[1];
            calculartotal();
            }
        })
        var botonsumar= document.createElement("button");
        botonsumar.setAttribute('class','sumarbtn')
        // botonsumar.textContent = "Sumar";
        botonsumar.addEventListener("click",(e)=>{
            e.preventDefault();
            cantidad++
            console.log(cantidad)
            guardarlocal[2] = cantidad
            localStorage.setItem(producto, JSON.stringify(guardarlocal));
            numero_cantidad.textContent = cantidad; 
            enviarcantidad.value = cantidad;
            p.textContent = cosas[0]+" : "+cosas[1];
            calculartotal();
            
        })
        var botoneliminar= document.createElement("button");
        // botoneliminar.textContent = "Eliminar";
        botoneliminar.setAttribute('class','eliminarbtn')

        botoneliminar.addEventListener("click",(e)=>{
            e.preventDefault();
            localStorage.removeItem(producto);
            li.remove();
            ver_cesta.innerHTML = "<div class='cestita'></div>"+ localStorage.length;
            location.reload();
        });
        
        numero_cantidad.setAttribute("class","numero_cantidad")
        numero_cantidad.textContent = cantidad; 
        li.appendChild(enviarproducto);
        li.appendChild(enviarcantidad);
        li.appendChild(botonrestar)
        li.appendChild(numero_cantidad);
        li.appendChild(botonsumar);
        li.appendChild(botoneliminar);
        lista.appendChild(li);


        ver_cesta.innerHTML = "<div class='cestita'></div>"+ localStorage.length;
 
        addcesta[i].disabled = true
        calculartotal();
    }else{
        console.log("ya se ha añadido")
    }
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
        " : "+JSON.parse(localStorage.getItem(localStorage.key(i)))[1];
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
        // botonrestar.textContent = "Restar";
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
        // botoneliminar.textContent = "Eliminar";
        var botonsumar= document.createElement("button");
        botonsumar.setAttribute("class","sumarbtn")
        // botonsumar.textContent = "Sumar";
        var numero_cantidad= document.createElement("p");
        numero_cantidad.setAttribute("class","numero_cantidad")

        numero_cantidad.textContent = JSON.parse(localStorage.getItem(localStorage.key(i)))[2]; 

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
        li.appendChild(numero_cantidad)
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
                    var numero_cantidad = botones[i].parentNode.childNodes[4]
                    console.log(botones[i].parentNode.childNodes)
                    botones[i].parentNode.childNodes[0].value= botones[i].parentNode.id;
                    botones[i].parentNode.childNodes[4].value= cantidad;
                    p.textContent = botones[i].parentNode.id+" : "+JSON.parse(localStorage.getItem(botones[i].parentNode.id))[1];
                    numero_cantidad.textContent = JSON.parse(localStorage.getItem(localStorage.key(i)))[2]; 
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
        ver_cesta.innerHTML = "<div class='cestita'></div>"+ localStorage.length;
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
        sumarbotones[i].parentNode.childNodes[4].value= cantidad;
        p.textContent = sumarbotones[i].parentNode.id+" : "+JSON.parse(localStorage.getItem(sumarbotones[i].parentNode.id))[1];
        var numero_cantidad = botones[i].parentNode.childNodes[4]
        numero_cantidad.textContent = JSON.parse(localStorage.getItem(localStorage.key(i)))[2]; 
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
ver_cesta.innerHTML = "<div class='cestita'></div>"+ localStorage.length;
var cesta = document.getElementById('cesta');
var productos = document.getElementsByClassName("productos")
// cesta.style.display = "none"
ver_cesta.addEventListener("click",(e)=>{
    
    if (cesta.style.display == "none") {
        cesta.style.display = "block";
        // sessionStorage.setItem("cesta",1)
        // productos[0].style.marginRight = "200px"
    }else{
        // cesta.style.display = "none"
        // sessionStorage.setItem("cesta",0)
        // productos[0].style.marginRight = "0px"
    }
    
})
// if(sessionStorage.getItem("cesta")==1){
//     cesta.style.display = "block";
//     productos[0].style.marginRight = "200px"
// }else{
//     cesta.style.display = "none"
//     productos[0].style.marginRight = "0px"
// }
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

var enviar_cesta = document.getElementsByClassName('enviar_cesta') 
enviar_cesta[0].addEventListener("click",()=>{
    localStorage.clear()
})



// $('.producto').mouseenter(function(){
//     $('.imagenproducto').css({
//       "transform": "scale(1.2,1.2)"
//     });
//   });
//   $('.producto').mouseleave(function(){
//     $('.imagenproducto').css({
//       "transform": "scale(1.0,1.0)"
//     });
//   });
function carga() {
    if(sessionStorage.getItem('cesta')!=1){
        $(".loader").fadeOut("slow")
}else{
    $(".loader").fadeOut(0)
}
    // console.log("asd")
}
carga();
// $(window).load(function() {
//     if(sessionStorage.getItem('cesta')!=1){
//         setTimeout( carga, 2000)
//     }else{
//         carga();
//     }
    
// });