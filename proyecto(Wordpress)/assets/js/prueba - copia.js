    // Funcion de cambiar el color del nav al hacer scroll hacia abajo
    $(document).ready(function() {
      $(window).scroll(function(){
        if (screen.width > 768) {
          console.log('entró pc');
          if ($(this).scrollTop() > 20) {
            this.blanco();
            
          } else {
            this.negro();
          }
        }
        else{
          console.log("entró Responsive");
          if ($(this).scrollTop() > 20) {
            this.blanco();
          } 
          else {
            this.negro();
          }
        }
      });
    });

function quitarIMG()
{
	document.getElementById("img").classList.remove('letras');
    document.getElementById("img").classList.remove('letrasCambio');
}
function blanco(){
	$('nav').addClass('fondo');
    //$('a').addClass('letrasCambio');
    //$('a').removeClass('letras');
    //this.quitarIMG();
    //document.getElementById("page").classList.add('pageCambio');
    //document.getElementById("page").classList.remove('page');
    //$("#myImage").attr("src","includes/img/logo.png");
    //$('button').addClass('navbar-toggler-cambio');
    //$('span').addClass('navbar-toggler-icons');
    
}

function negro(){
	$('nav').removeClass('fondo');
    //$('a').removeClass('letrasCambio');
    //$('a').addClass('letras');
    //this.quitarIMG();
    //document.getElementById("page").classList.remove('pageCambio');
    //document.getElementById("page").classList.add('page');
    //$("#myImage").attr("src","includes/img/logo-itm2.png");

    //$('button').removeClass('navbar-toggler-cambio');
    //$('span').removeClass('navbar-toggler-icons');
}

$('.carouselExampleIndicators').carousel({
  interval: 300000000000000000000
})

