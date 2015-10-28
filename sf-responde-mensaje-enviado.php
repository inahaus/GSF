
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="shortcut icon" href="../../assets/ico/favicon.ico"> -->

    <title>Santa Fe - Responde</title>

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

  <body role="document" class="n2">

  <!--  Header -->
 <?php
 include 'header.php';

 ?>
 <div class="box-6 ui-bg-9">
    <div class="container">
      <h2 class="ui-h2-3"><a href="#">Santa Fe Responde</a></h2>
    </div>
 </div>
 <div class="container" role="main">
 <!-- Hot Links   -->
 
 <div class="box-0 cta-headers  internal-cta">
   <div class="row">
   <div class="pull-right santafe-avanza">
     <a href="#"><img src="imgs/santafe-avanza.png" alt="Santa Fe Avanza"></a>
   </div>
   
    </div>
 </div>

  
 <!-- Contact Grid  -->
 <div class="contents sf-responde">

   <div class="main">

      <div class="contact-form mensaje-enviado">
            <p><strong>Gracias por contactarse con nosotros.</strong></p>
            <p>En breve enviaremos una respuesta a su casilla de correo electr&oacute;nico.</p>
            <div class="dropdown dropdown-1">
              <a href="sf-responde.php" class="btn">regresar</a>
            </div>
      </div>

   </div>

  <div class="sidebar">


      <img class="pull-left" src="imgs/img-1.jpg" alt=""/>
      <img class="pull-left" src="imgs/img-1.jpg" alt=""/>


   
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
