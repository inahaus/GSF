
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

      <div class="contact-form">

          <form action="#">

            <h4>Datos de identificaci&oacute;n</h4>

            <div class="ui-bg-2">

              <div class="row">

                <div class="col-xs-12 col-sm-6">
                  <input class="input-text input-text-large" type="text" name="nombre" placeholder="Nombre*" required="required"/>
                  <span class="input-required-alert">Nombre es un dato obligatorio</span>
                </div>

                <div class="col-xs-12 col-sm-6">
                  <input class="input-text input-text-large" type="text" name="apellido" placeholder="Apellido*" required="required"/>
                  <span class="input-required-alert">Apellido es un dato obligatorio</span>
                </div>

              </div>

              <div class="row">

                <div class="col-xs-12 col-sm-6">
                  <input class="input-text input-text-large" type="email" name="email" placeholder="Correo electr&oacute;nico*" required="required"/>
                  <span class="input-required-alert">Correo electr&oacute;nico es un dato obligatorio</span>
                </div>

                <div class="col-xs-12 col-sm-6">
                  <input class="input-text input-text-large" type="number" name="documento" placeholder="Nº de documento*"/ required="required">
                  <span class="input-required-alert">Nº de documento es un dato obligatorio</span>
                </div>

              </div>

              <small>(*) Campos obligatorios.</small>

              <div class="row">

                <div class="col-xs-12 col-sm-6">
                  <label class="label-datos pull-left" for="input-codarea">Tel&eacute;fono</label>
                  <div class="input-text-medium pull-right">
                    <input class="input-text input-text-xs pull-left" id="input-codarea" type="tel" name="datos" placeholder="Ej:(0342)"/>
                    <input class="input-text input-text-small pull-right" id="input-phone" type="tel" name="datos"/>
                  </div>
                </div>

              </div>

              <div class="row">

                <div class="col-xs-12 col-sm-6">
                  <label class="label-datos" for="input-provincia">Provincia</label>
                  <input class="input-text input-text-medium pull-right" id="input-provincia" type="text" name="datos"/>
                </div>

                <div class="col-xs-12 col-sm-6">
                  <label class="label-datos" for="input-localidad">Localidad</label>
                  <input class="input-text input-text-medium pull-right" id="input-localidad" type="text" name="datos"/>
                </div>

              </div>

            </div>

            <h4>Motivo del contacto</h4>

            <div class="ui-bg-2">

              <div class="row">

                <div class="col-xs-12 col-sm-4">
                  <input type="radio" value="info" id="input-info" name="motivo"  checked="checked"/>
                  <label for="input-info"><span>&nbsp;</span>Solicitar informaci&oacute;n</label>
                </div>

                <div class="col-xs-12 col-sm-4">
                  <input type="radio" value="sugerencias" id="input-sug" name="motivo" />
                  <label for="input-sug"><span>&nbsp;</span>Realizar sugerencias</label>
                </div>

                <div class="col-xs-12 col-sm-4">
                  <input type="radio" value="problemas" id="input-problem" name="motivo"/>
                  <label for="input-problem"><span>&nbsp;</span>Reportar problemas en la web</label>
                </div>

              </div>

              <div class="row">

                <div class="col-xs-12">
                  <textarea placeholder="Escrib&iacute; tu mensaje aqu&iacute;. El mismo debe tener, como m&iacute;nimo, 20 caracteres."></textarea>
                </div>

              </div>

              <div class="row">

                <div class="col-xs-12 col-sm-6">
                  <input class="input-text input-text-medium pull-left" type="text" name="captcha" placeholder="Introduzca el texto de la imagen*" required="required"/>
                  <img class="captcha pull-right" src="imgs/captcha.jpg" alt="" />
                  <span class="input-required-alert pull-left">El c&oacute;digo de la imagen no coincide</span>
                </div>

                <div class="col-xs-12 col-sm-6">
                  <div class="dropdown dropdown-1">
                    <input type="submit" value="Enviar" class="btn pull-right"/>
                  </div>
                </div>

              </div>

            </div>

          </form>

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
