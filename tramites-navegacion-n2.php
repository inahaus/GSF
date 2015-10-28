
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="shortcut icon" href="../../assets/ico/favicon.ico"> -->

    <title>Tramites - Navegacion por temas</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/flat-ui.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link href='http://fonts.googleapis.com/css?family=Asap:400,700' rel='stylesheet' type='text/css'>
    
    <!-- Custom styles for this template -->
    <link href="css/santafe.css" rel="stylesheet">
    <link href="css/media.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <link rel="stylesheet" type="text/css" href="css/ie8.css" />
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body role="document" class="tramites-n2 tramites-busqueda">

  <!--  Header -->
 <?php
 include 'header.php';

 ?>
 <div class="box-6 ui-bg-9">
    <div class="container">
      <h2 class="ui-h2-3"><a href="#">Tr&aacute;mites</a></h2>
    </div>
 </div>
 <div class="container" role="main">
 <!-- Hot Links   -->
 
 <div class="box-0 cta-headers internal-cta">
   <div class="row">
     <div class="pull-right santafe-avanza">
       <a href="#"><img src="imgs/santafe-avanza.png" alt="Santa Fe Avanza"></a>
     </div>
   
    </div>
 </div>

  
 <!-- News Grid  -->
 <div class="contents">

   <div class="main-2">
   
    <div class="box-1 ui-bg-1">
      <h3 class="ui-h2-1">Navegaci&oacute;n de tr&aacute;mites por temas</h3>
      <p>Seleccione un subtema dentro de <strong>Cultura</strong></p>
    </div>

      <div class="ui-bg-2">
        <ul class="ui-list-1">
          <li><a href="#">Educaci&oacute;n art&iacute;stica</a></li>
          <li><a href="#">Elencos estables</a></li>
          <li><a href="#">Eventos, ferias y festivales</a></li>
          <li><a href="#">Espacios culturales</a></li>
          <li><a href="#">Industrias culturales</a></li>
        
          <li><a href="#">Museos</a></li>
          <li><a href="#">Pol&iacute;ticas culturales</a></li>
          <li><a href="#">Programas y ciclos culturales</a></li>
        </ul>
      </div>

      <div class="box-7">
        <ul class="ui-list-4">
          <li><a href="#"><i class="icon-tramites"></i>Patente Única sobre Vehículos: Pago Total Anual </a></li>
          <li><a href="#"><i class="icon-tramites"></i>Embarcaciones-Municipios y Comunas: Altas, modificaciones y bajas en el Registro Provincial</a></li>
          <li><a href="#"><i class="icon-tramites"></i>Impuestos-Pagos: Adhesión al Débito Directo en Cuenta Bancaria a través de CBU</a></li>
          <li><a href="#"><i class="icon-tramites"></i>Municipios y Comunas: Consulta de convenios de pagos por deudas de Patente Única</a></li>
          <li><a href="#"><i class="icon-tramites"></i>Municipios y Comunas-Patente Única sobre Vehículos: Informe de Deuda</a></li>
          <li><a href="#"><i class="icon-tramites"></i>Municipios y Comunas-Patente Única sobre Vehículos: Prescripción de Deuda</a></li>
        </ul>   
      </div> 
   </div>

  <div class="sidebar-2">
                  
    <div class="contact-form nav-tramites">
      <h4>B&uacute;squeda de Tr&aacute;mites</h4>
      <div class="ui-bg-11">
        <form action="#">
          <input class="input-text input-text-medium" name="buscar-tramite" type="text" placeholder="Palabra clave del tr&aacute;mite" style>
          <button class="ir-busqueda pull-right">
            <i class="icon-lupa"></i>
          </button>
        </form>
        <a href="#" class="avanzada">Realizar b&uacute;squeda avanzada</a>
      </div>
    </div>

    <div class="contact-form nav-tramites">
      <h4>Navegaci&oacute;n de tr&aacute;mites</h4>
      <div class="ui-bg-11">
        <a href="#">Por temas</a>
        <a href="#">Por organismos</a>
      </div>
    </div>

    <div class="row footer-ctas">
      <div class="col-md-4 touch-hidden">
        <a href="#"><img class="flex-img" src="imgs/santafe-responde.png" alt="Santa Fe Responde"></a>
      </div>
      <div class="col-md-4">
        <a href="#"><img class="flex-img" src="imgs/agenda.gif" alt=""></a>
      </div>
      <div class="col-md-4">
        <a href="#"><img class="flex-img" src="imgs/img-1.jpg" alt=""></a>
      </div>
    </div>

  </div> 

 </div>
 

 </div>
  <?php
  include 'footer_n2.php';
  ?>
  


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>
        if (!window.jQuery) {
            document.write('<script src="js/jquery.min.js"><\/script>')
        }
        </script>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/ie8/jquery.placeholder.js"></script>
    <script>
    $(document).ready(function() {

    $('.search-link').on('click', function(ev){
      ev.preventDefault();
      $(this).hide();
      $('.search-form').show();
      $('#q').focus()
    });
    $('#q').on('blur', function(){
      $('.search-link').show();
      $('.search-form').hide();
    })
  
  
  $('.news-slider-2').owlCarousel({
    navigation : false,
    items:2,
    itemsDesktop : [1200,2], //5 items between 1000px and 901px
    itemsDesktopSmall : [1039,2], // betweem 900px and 601px
    itemsTablet: [768,1],
    itemsMobile: [510,1],
  });

  $('.news-slider:not(.news-slider-2)').owlCarousel({
    navigation : false,
    items:3,
    itemsDesktop : [1200,3], //5 items between 1000px and 901px
    itemsDesktopSmall : [1039,2], // betweem 900px and 601px
    itemsTablet: [768,2],
    itemsMobile: [510,1],
  });

  $('input, textarea').placeholder();
 
});</script>
    <!--script src="../../assets/js/docs.min.js"></script-->
  </body>
</html>
