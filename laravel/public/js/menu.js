class menu_platos {
    constructor(primero,segundo,postre,bebida) {
        this.plato_seleccionado = 1
        
        this.primero = document.getElementById('btn_primeros');
        this.segundo = document.getElementById('btn_segundos');
        this.postre = document.getElementById('btn_postres');
        this.bebida = document.getElementById('btn_bebidas');

        this.section_primeros = document.getElementById('primeros')
        this.section_segundos = document.getElementById('segundos')
        this.section_postres = document.getElementById('postres')
        this.section_bebidas = document.getElementById('bebidas')


        this.primero.addEventListener("click",()=>{
            // console.log(menu.getprimero())
            this.plato_seleccionado = 1
            this.seleccionarplato()
        })
     
        this.segundo.addEventListener("click",()=>{
            // console.log(menu.getprimero())
            this.plato_seleccionado = 2
            this.seleccionarplato()
           
        })

          this.postre.addEventListener("click",()=>{
            // console.log(menu.getprimero())
            this.plato_seleccionado = 3
            this.seleccionarplato()
        })

          this.bebida.addEventListener("click",()=>{
            // console.log(menu.getprimero())
            this.plato_seleccionado = 4
            this.seleccionarplato()
        })


      

        this.seleccionarplato()
      }

      getprimero(){
          return this.primero;
      }
      setvisible(item){
        item.style.display = "flex"
      }
      setinvisible(item){
        item.style.display = "none"
      }
      setseleccionado(btn){
        btn.classList.add("menu_plato_seleccionado")
      }
      removeseleccionado(btn){
        btn.classList.remove("menu_plato_seleccionado")
      }
      seleccionarplato(){
        switch (this.plato_seleccionado) {
            case 1:
                this.setvisible(this.section_primeros);
                this.setinvisible( this.section_segundos)
                this.setinvisible(this.section_postres)
                this.setinvisible( this.section_bebidas)

                this.setseleccionado(this.primero)
                this.removeseleccionado(this.segundo);
                this.removeseleccionado(this.postre);
                this.removeseleccionado(this.bebida);
            break;
            case 2:
               this.setinvisible(this.section_primeros);
                this.setvisible( this.section_segundos)
                this.setinvisible(this.section_postres)
                this.setinvisible( this.section_bebidas)

                this.removeseleccionado(this.primero)
                this.setseleccionado(this.segundo);
                this.removeseleccionado(this.postre);
                this.removeseleccionado(this.bebida);
            break;
            case 3:
               this.setinvisible(this.section_primeros);
                this.setinvisible( this.section_segundos)
                this.setvisible(this.section_postres)
                this.setinvisible( this.section_bebidas)

                this.removeseleccionado(this.primero)
                this.removeseleccionado(this.segundo);
                this.setseleccionado(this.postre);
                this.removeseleccionado(this.bebida);
            break;
            case 4:
               this.setinvisible(this.section_primeros);
                this.setinvisible( this.section_segundos)
                this.setinvisible(this.section_postres)
                this.setvisible( this.section_bebidas)

                this.removeseleccionado(this.primero)
                this.removeseleccionado(this.segundo);
                this.removeseleccionado(this.postre);
                this.setseleccionado(this.bebida);
            break;
        
            default:
                break;
        }
      }

}

let menu = new menu_platos();





