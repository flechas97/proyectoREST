var btn_menu = document.getElementById("btn_menu")
var menu_responsive = document.getElementById("menu_responsive")
var carrousel = document.getElementsByClassName("carrousel");
menu_responsive.style.display = "none"
btn_menu.addEventListener("click",(e)=>{
    if(menu_responsive.style.display == "none"){
        menu_responsive.style.display = "block";
        // carrousel[0].style.display = "none"
    }else{
        menu_responsive.style.display = "none";
        // carrousel[0].style.display = "block"
    }
    
})

var iniciarses = document.getElementById("iniciarses");
var fondosesion = document.getElementById("fondosesion");
iniciarses.addEventListener("click",(e)=>{
    fondosesion.style.display = "block"
})

var salirbtn = document.getElementById("salirbtn");

    salirbtn.addEventListener("click",()=>{
        fondosesion.style.display = "none"
    })



var inicio = document.getElementById("inicio");
var btnregistro = document.getElementById("btnregistro");
btnregistro.addEventListener("click",()=>{
    inicio.style.display = "none"
    registro.style.display = "inline"
})
registro.style.display = "none"
var btninicio = document.getElementById("btninicio");
btninicio.addEventListener("click",()=>{
    registro.style.display = "none"
    inicio.style.display = "inline"
})