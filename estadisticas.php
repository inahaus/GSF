
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="shortcut icon" href="../../assets/ico/favicon.ico"> -->

    <title>Estad&iacute;sticas</title>

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

  <body role="document" class="tramites-n2 estadisticas">

  <!--  Header -->
 <?php
 include 'header.php';

 ?>
 <div class="box-6 ui-bg-9">
    <div class="container">
      <h2 class="ui-h2-3"><a href="#">Estad&iacute;sticas</a></h2>
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
        <h3 class="ui-h3-1"><i class="icon-flechad"></i> Permiso de Edificaci&oacute;n Mensual. Departamento San Cristobal. Septiembre 2013 </h3>
     </div> 
   
    </div>
 </div>

  
 <!-- News Grid  -->
 <div class="contents">
    
   <div class="main-2">
   
      <ul class="ui-list-4">
          <li>
            <p>Caracter&iacute;sticas generales de la obras autorizadas. Departamento SAN CRISTOBAL.</p>
            <a href="#"><i class="icon-concursos"></i>Ver cuadro</a>
          </li>
          <li>
            <p>Caracter&iacute;sticas generales de la obras autorizadas. Municipalidad de SAN CRISTOBAL.</p>
            <a href="#"><i class="icon-concursos"></i>Ver cuadro</a>
          </li>
        </ul>

      <div class="datos-estadisticas">
        <p><strong>Fuente:</strong> IPEC</p>
        <p><strong>&Uacute;ltima actualizaci&oacute;n:</strong>  04/09/2014 - 15:21</p>
      </div>

   </div>

  <div class="sidebar">
                  
 <div class="row">
       <div class="col-md-4 touch-hidden">
         <a href="#"><img class="flex-img" src="imgs/santafe-responde.png" alt="Santa Fe Responde"></a>
       </div>
       <div class="col-md-4">
            <a href="#"><img class="flex-img" src="imgs/agenda.gif" alt=""></a>
       </div>
       <div class="col-md-4">
            <a href="#"><img class="flex-img" src="imgs/missing.png" alt=""></a>
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

 
});</script>
    <!--script src="../../assets/js/docs.min.js"></script-->
  </body>
</html>
