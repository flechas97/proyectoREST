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
        var dupNode = boton_elim[i].parentNode.cloneNode(true);
        var boton_eliminar = dupNode.getElementsByClassName('elim_btn');
        dupNode[3].remove();
        console.log(dupNode[2]);
        var boton_si = document.createElement('button');
        boton_si.setAttribute('class','btn btn-success btnsi');
        boton_si.textContent = 'Si';
        var boton_no = document.createElement('button');
        boton_no.setAttribute('class','btn btn-danger btnno');
        boton_no.textContent = 'No';
        boton_no.addEventListener('click',(e)=>{
            e.preventDefault();
            location.reload();
        })
        var token = document.createElement('input')
        token.setAttribute('type','hidden')
        token.setAttribute('name','_token')
        token.setAttribute('value','g4Y9Leizo4LofCnO0rgDg6pamB3LUzuOkOSmtzPY')
        var id = document.createElement('input')
        token.setAttribute('type','hidden')
        token.setAttribute('name','id')
        token.setAttribute('value','g4Y9Leizo4LofCnO0rgDg6pamB3LUzuOkOSmtzPY')
        //<input type="hidden" name="_token" value="g4Y9Leizo4LofCnO0rgDg6pamB3LUzuOkOSmtzPY">
        ventana.appendChild(mensaje);
        form.appendChild(token);    
        dupNode.appendChild(boton_si);
        dupNode.appendChild(boton_no);
        ventana.appendChild(dupNode);
       fondo.appendChild(ventana);
       body.appendChild(fondo);
    })  
    
}
