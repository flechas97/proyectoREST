var boton_elim = document.getElementsByClassName('elim_btn');
var body = document.body

for (let i = 0; i < boton_elim.length; i++) {
    //console.log(boton_elim[i].parentNode.action)
   
    boton_elim[i].addEventListener('click',(e)=>{
        e.preventDefault();
        var fondo = document.createElement('div');
        fondo.setAttribute('id','fondo_elim');

        var ventana = document.createElement('div');
        ventana.setAttribute('id','elim_ventana');
        var mensaje = document.createElement('h4');
        mensaje.textContent = '¿Estas seguro de eliminar?';

        var form = document.createElement('form');
        form.setAttribute('action',boton_elim[i].parentNode.action);
        form.setAttribute('method','post');
        form.setAttribute('class','elim_form');

        var boton_si = document.createElement('button');
        boton_si.setAttribute('class','btn btn-success btnsi');
        boton_si.textContent = 'Si';
        var boton_no = document.createElement('button');
        boton_no.setAttribute('class','btn btn-danger btnno');
        boton_no.textContent = 'No';
        boton_no.addEventListener('click',(e)=>{
            e.preventDefault();
            //location.reload();
            fondo.remove();
        })
        var token = document.createElement('input')
        token.setAttribute('type','hidden')
        token.setAttribute('name','_token')
        token.setAttribute('value','g4Y9Leizo4LofCnO0rgDg6pamB3LUzuOkOSmtzPY')
        //<input type="hidden" name="_token" value="g4Y9Leizo4LofCnO0rgDg6pamB3LUzuOkOSmtzPY">
        ventana.appendChild(mensaje);
        form.appendChild(token);    
        form.appendChild(boton_si);
        form.appendChild(boton_no);
        ventana.appendChild(form);
       fondo.appendChild(ventana);
       body.appendChild(fondo);
    })  
    
}

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

