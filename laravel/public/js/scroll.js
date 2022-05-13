var header = document.getElementsByTagName("header");
var scrollmargin = document.getElementById("scrollmargin");
var panelanimar = document.getElementById("panelanimar");
var sinanimar = document.getElementById("sinanimar");
var btnanimado = document.getElementById("btnanimado");
var agrandar = document.getElementById("agrandar");
var textonavbtn = document.getElementsByClassName("textonavbtn");
// sinanimar.style.width = screen.width+"px";
// panelanimar.style.width = "0px";
window.onscroll = function() {
    //  console.log("Vertical: " + window.scrollY);
    // console.log("Horizontal: " + window.scrollX);
    
    // if(parseInt(panelanimar.style.width) < 100){
    //   panelanimar.style.width = parseInt(window.scrollY/6)+"%";
    // }else if(parseInt(panelanimar.style.width) > 100){
    //   panelanimar.style.width = "100%";
    // }
    // else if (window.scrollY/6 < 100) {
    //   panelanimar.style.width = parseInt(window.scrollY/6)+"%";
    // }
    // if(parseInt(window.scrollY/4)-100 < 75){
    //   btnanimado.style.right = ""+parseInt(window.scrollY/4)-107+"%";
    // } else if(parseInt(btnanimado.style.right) > 67){
    //   btnanimado.style.right = "67%";
    // }
    // if(window.scrollY > 600){
    //   btnanimado.classList.add("animacion")
    // }

  //   agrandar.style.width = "100%";
  //   agrandar.style.height = "85%";
  //   // console.log(agrandar.style.height)
  //   if(parseInt(window.scrollY/11) < 85){
  //     agrandar.style.height = parseInt(window.scrollY/11)+"%";
  //   }
  
  // if(window.scrollY > 50 ){
  //   //console.log("ha scroleado")
  //   header[0].classList.add("scrollheader");
  //    scrollmargin.classList.add("scrollmargin");

  //   for (let i = 0; i < textonavbtn.length; i++) {
  //     textonavbtn[i].style.color = "black";
  //   }
  // }else{
  //   header[0].classList.remove("scrollheader");
  //   scrollmargin.classList.remove("scrollmargin");
  //   for (let i = 0; i < textonavbtn.length; i++) {
  //     textonavbtn[i].style.color = "white";
      
  //   }
  // }

  };


  ScrollReveal({ reset: true }).reveal('.tarjetas', { delay: 300 });
  ScrollReveal({ reset: true }).reveal('.secion', { delay: 300 });
var zindex = 0;
  var pedidos_despl = document.getElementById('pedidosdespl')
  var mis_pedidos  = document.getElementById('mis_pedidos')
  pedidos_despl.style.transform = 'translateX(-99.9%)'
  mis_pedidos.addEventListener('click',()=>{
    if(pedidos_despl.style.transform == 'translateX(-99.9%)'){
      pedidos_despl.style.transform = 'translateX(0%)'
      pedidos_despl.style.zIndex = zindex
      mis_pedidos.style.zIndex = zindex
      zindex++
    }else{
      pedidos_despl.style.transform = 'translateX(-99.9%)'
    }
    
  })
  var inicio_sesion = document.getElementById('inicio_sesion')
  var btn_inicio_sesion  = document.getElementById('btn_inicio_sesion')
  var pedidos = document.getElementById('pedidos')
  var abrir_pedidos  = document.getElementById('abrir_pedidos')
  pedidos.style.transform = 'translateY(-99.9%)'
  abrir_pedidos.addEventListener('click',()=>{
    if(pedidos.style.transform == 'translateY(-99.9%)'){
      pedidos.style.transform = 'translateY(0%)'
      pedidos.style.zIndex = zindex
      abrir_pedidos.style.zIndex = zindex
      zindex++
    }else{
      pedidos.style.transform = 'translateY(-99.9%)'
    }
    
  })

  inicio_sesion.style.transform = 'translateY(-99.9%)'
  btn_inicio_sesion.addEventListener('click',()=>{
    if(inicio_sesion.style.transform == 'translateY(-99.9%)'){
      inicio_sesion.style.transform = 'translateY(0%)'
      inicio_sesion.style.zIndex = zindex
      btn_inicio_sesion.style.zIndex = zindex
      abrir_pedidos.style.display = "none"
      zindex++
    }else{
      inicio_sesion.style.transform = 'translateY(-99.9%)'
      abrir_pedidos.style.display = "block"
    }
  })
  var btn_sugerencias = document.getElementById('btn_sugerencias');
  var sugerencias = document.getElementById('sugerencias');
  sugerencias.style.transform = 'translateX(99%)'
  btn_sugerencias.addEventListener('click',()=>{
    if(sugerencias.style.transform == 'translateX(99%)'){
      sugerencias.style.transform = 'translateX(0%)'
      // sugerencias.style.zIndex = zindex
      zindex++
    }else{
      sugerencias.style.transform = 'translateX(99%)'
    }
  })

  var pedidos_despl = document.getElementById('pedidosdespl')
  var mis_pedidosres  = document.getElementById('mis_pedidosres')
  var menu_responsive = document.getElementById('menu_responsive')
  pedidos_despl.style.transform = 'translateX(-99.9%)'
  mis_pedidosres.addEventListener('click',()=>{
    console.log(pedidos_despl.style.transform)
    if(pedidos_despl.style.transform == 'translateX(-99.9%)'){
      pedidos_despl.style.transform = 'translateX(0%)'
      menu_responsive.style.display = 'none'
    }else{
      pedidos_despl.style.transform = 'translateX(-99.9%)'
    }
  })

  var btn_sugerenciasres = document.getElementById('btn_sugerenciasres');
  var sugerencias = document.getElementById('sugerencias');
  sugerencias.style.transform = 'translateX(99%)'
  btn_sugerenciasres.addEventListener('click',()=>{
    if(sugerencias.style.transform == 'translateX(99%)'){
      sugerencias.style.transform = 'translateX(0%)'
      menu_responsive.style.display = 'none'
    }else{
      sugerencias.style.transform = 'translateX(99%)'
    }
  })

  var despcesta = document.getElementById('despcesta')
  var btn_despcesta  = document.getElementById('ver_cesta')
  despcesta.style.transform = 'translateX(80.9%)';
  btn_despcesta.addEventListener('click',()=>{
    if(despcesta.style.transform == 'translateX(80.9%)'){
      despcesta.style.transform = 'translateX(0%)';
      despcesta.style.zIndex = zindex
      zindex++
      sessionStorage.setItem('cesta',1);
      console.log("cesta")
    }else{
      despcesta.style.transform = 'translateX(80.9%)';
      sessionStorage.setItem('cesta',0);
    }
  })
  if(sessionStorage.getItem('cesta') == 1){
    despcesta.style.transform = 'translateX(0%)';
    pedidos.style.transform = 'translateY(0%)';
  }else{
    despcesta.style.transform = 'translateX(80.9%)';
    pedidos.style.transform = 'translateY(-99.9%)';
  }