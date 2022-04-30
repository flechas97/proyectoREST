var desplegar = document.getElementById('desplegar_boton');
var menu_desplegar = document.getElementById('desplegable');

desplegar.addEventListener('click',(e)=>{
    console.log("asd");
    if(menu_desplegar.style.display == "none"){
        menu_desplegar.style.display = "block";
    }else{
        menu_desplegar.style.display = "none";
    }
    
})

var botonmas = document.getElementsByClassName('vmas');
var despl = document.getElementsByClassName('desplegar');

for (let x = 0; x < botonmas.length; x++) {
    //despl[x].style.display = 'none' 
    // despl[x].style.height = '0px'
    botonmas[x].addEventListener('click',()=>{
if (despl[x].style.height == '0px') {
    // despl[x].style.height = 'auto'
    despl[x].classList.toggle('holi')
}else{
    despl[x].classList.toggle('holi')
    // despl[x].style.height = '0px'
}
        
    
    })
}

