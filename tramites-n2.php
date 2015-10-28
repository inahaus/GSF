
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="shortcut icon" href="../../assets/ico/favicon.ico"> -->

    <title>Tramites - N2</title>

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

  <body role="document" class="tramites-n2">

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
 
 <div class="box-0 ">
   <div class="row">
     <div class="pull-right santafe-avanza internal-cta">
       <a href="#"><img src="imgs/santafe-avanza.png" alt="Santa Fe Avanza"></a>
     </div>
     <div class="pull-left">
        <h3 class="ui-h3-1"><i class="icon-flechad"></i> Impuesto Inmobiliario: Impresi&oacute;n de Boletas </h3>
     </div> 
   
    </div>
 </div>

  
 <!-- News Grid  -->
 <div class="contents">
    
   <div class="main-2">
   
      <div class="box-7">

        <div class="body">
          <div class="realizar-tramite clearfix">
            <div class="dropdown dropdown-1 pull-left"><?php //usar clase hidden cuando el tramite NO PUEDE hacerse online?>
              <a href="#" class="btn">Realizar este tr&aacute;mite online</a>
            </div>
            <div class="icons-tramite pull-right"><?php //usar clase p-visible cuando el tramite NO PUEDE hacerse online?>
              <p class="pull-left hidden"><?php //usar clase hidden cuando el tramite PUEDE hacerse online?>Actualmente este tr&aacute;mite no est&aacute; disponible para ser realizado online.</p>
              <a href="#"><i class="icon-compartir"></i></a>
              <a href="#"><i class="icon-impresora"></i></a>
            </div>
          </div>
          <h3>¿En qué consiste?</h3>
          <p>Este servicio permite imprimir las boletas de Impuesto Inmobiliario correspondientes al año corriente, estén vencidas o no.</p>
          <p>La Administración Provincial de Impuestos emite las boletas para el pago del impuesto del año corriente y las envía al domicilio de cada contribuyente.</p>
          <p>Si el contribuyente no recibe las boletas en su domicilio puede imprimirlas desde su casa utilizando este servicio. Las boletas obtenidas son válidas para ser abonadas en cajas con sistema de emisión de ticket. Pasada la fecha de vencimiento la caja calculará los intereses correspondientes.</p>
          <h3>¿Qué necesito para realizarlo?</h3>
          <p>Disponer de un comprobante del impuesto correspondiente, a los efectos de ingresar el número de partida.</p>
          <p>Contar con un programa visualizador de archivos de tipo PDF en la PC que permita visualizar la boleta.</p>
          <p>Para poder leer documentos "pdf" es necesario el lector de Adobe Acrobat v.5.0 o superior.</p>
          <p>Disponer de una Impresora de Tecnologí­a de Chorro de Tinta o Láser, con papel formato A4 (210 mm x 297 mm).</p>
          <h3>¿Cuánto cuesta?</h3>
          <p>Gratuito.</p>
          <h3>¿Dónde se realiza?</h3>
          <p>Desde cualquier PC con conexión a Internet. Trámite online.</p>
          <h3>Observaciones</h3>
          <p>Para descargar Adobe Acrobat 7.0, ingrese <a href="#">aquí.</a></p>
          <p>Bancos habilitados para realizar el pago: Nuevo Banco de Santa Fe - Municipal de Rosario - Nación Argentina - Credicoop - Macro S.A. - Bersa (Santa Fe, Rosario y Paraná).</p>
        </div>

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
