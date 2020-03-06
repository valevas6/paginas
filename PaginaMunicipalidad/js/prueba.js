    // Funcion de cambiar el color del nav al hacer scroll hacia abajo
    /*  $(document).ready(function() {
        $(window).scroll(function(){
          if (screen.width > 768) {
            console.log('entró pc');
            if ($(this).scrollTop() > 20) {
              $('nav').addClass('fondo');
              
            } else {
              $('nav').removeClass('fondo');
            }
          }
          else{
            console.log("entró Responsive");
            if ($(this).scrollTop() > 20) {
              $('nav').addClass('fondo');
            } 
            else {
              $('nav').removeClass('fondo');
            }
          }
        });
      });*/

    function quitarIMG() {
        document.getElementById("img").classList.remove('letras');
        document.getElementById("img").classList.remove('letrasCambio');
    }

    function efectobluir() {
        document.getElementById("contenido-pagina").classList.toggle('efectoBluir');
    }

    $('.carouselExampleIndicators').carousel({
        interval: 300000000000000000000
    })