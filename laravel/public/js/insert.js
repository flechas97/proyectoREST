
var filtro = document.getElementById("filtro");

var buscar = document.getElementById("buscar");

var min = document.getElementById("min");

var max = document.getElementById("max");

filtro.addEventListener("change",()=>{
    console.log(filtro.value)
    switch(filtro.value){
        case "name":
            min.disabled = true;
            max.disabled = true;
        break;
        case "precio":
            min.disabled = false;
            max.disabled = false;
        break;
        case "stock":
            min.disabled = false;
            max.disabled = false;
        break;
    }
})