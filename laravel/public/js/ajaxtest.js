
var boton = document.getElementById("ajax")
var texto = document.getElementById("ajaxtest");

boton.addEventListener("click",(e)=>{
    e.preventDefault();
    $.ajax({
        headers: {
            'CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url : "ajax",
        data:{ id: btoa(texto.value)},
        type : 'get',
        success : function(result){

            console.log(result);

        }
    });
})