
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="shortcut icon" href="../../assets/ico/favicon.ico"> -->

    <title>Compras - N1</title>

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

  <body role="document" class="compras">

  <!--  Header -->
  <?php
  include 'header.php';

  ?>

<div class="container hidden-desktop">
  <div class="box-0 ui-bg-6 cta-headers">
    <div class="row">
      <div class="col-md-4 hidden-mobile hidden-tablet-vertical col-sm-3 santafe-avanza">
        <a href="#"><img src="imgs/santafe-avanza.png" alt="Santa Fe Avanza"></a>
      </div>
      <div class="col-md-2 hidden-xs hidden-sm">
      </div>
      <div class="col-md-2 col-xs-4 col-sm-3">
        <a href="#" class="cta">
        <i class="icon-tramites"></i> <span class="label">Ciudadanos<br />en general</span>
        <span class="title">Trámites</span></a>
      </div>
      <div class="col-md-2 col-xs-4 col-sm-3">
        <a href="#" class="cta">
        <i class="icon-intranet"></i> <span class="label">Personal<br />del Estado</span> <span class="title">Intranet</span>
        </a>
       </div>
      <div class="col-md-2 col-xs-4 col-sm-3">
        <a href="#" class="cta"> 
        <i class="icon-responde"></i> 
        <span class="label">Atenci&oacute;n<br />al ciudadano</span> 
        <span class="title">GSF Responde</span></a> 
      </div>
    </div>
  </div>
</div>

  <div class="box-6 ui-bg-9">
    <div class="container">
      <h2 class="ui-h2-3"><a href="#">Compras</a></h2>
    </div>
  </div>

  <div class="container" role="main">
    <!-- Hot Links   -->
    <div class="visible-desktop box-10 ui-bg-6 cta-headers">
      <div class="santafe-avanza pull-right hidden-xs">
         <a href="#"><img src="imgs/santafe-avanza.png" alt="Santa Fe Avanza"></a>
      </div>

      <div class="col-md-2 col-xs-4 col-sm-3 pull-right">
        <a href="#" class="cta"> 
        <i class="icon-responde"></i> 
        <span class="label">Atenci&oacute;n<br />al ciudadano</span> 
        <span class="title">GSF Responde</span></a> 
      </div>

      <div class="col-md-2 col-xs-4 col-sm-3 pull-right">
        <a href="#" class="cta">
        <i class="icon-intranet"></i>
        <span class="label">Personal<br />del Estado</span>
        <span class="title">Intranet</span></a>
      </div>

      <div class="col-md-2 col-xs-4 col-sm-3 pull-right">
        <a href="#" class="cta">
        <i class="icon-tramites"></i> <span class="label">Ciudadanos<br />en general</span>
        <span class="title">Trámites</span></a>
      </div>
    </div>
    
    <!-- News Grid  -->
    <div class="contents"> 

      <div class="box-11 grid internal-cta">
        <div class="row">
          <div class="col-md-4">
            <div class="item item-icon-title item-4">
              <a href="#">
                <i class="icon-concursos pull-left"></i>
                <p>Personal escolar: Solicitud de licencia por enfermedad, familiar enfermo o maternidad</p>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="item item-icon-title item-5">
              <a href="#">
                <i class="icon-concursos pull-left"></i>
                <p>Pago anual impuesto inmobiliario</p>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="item item-icon-title item-6">
              <a href="#">
                <i class="icon-concursos pull-left"></i>
                <p>Turnos Web: Solicitud de turnos para tr&aacute;mites en el Gobierno de Santa Fe</p>
              </a>
            </div>
          </div>
        </div>
      </div>

      <h3 class="ui-h3-1"><i class="icon-flechad"></i> B&uacute;squeda de gestiones de Compra </h3>

      <div class="contact-form">
        <form action="#">
          <h4 class="ui-h4-3">Filtros</h4>
          <div class="ui-bg-2">

            <div class="col-lg-4 col-sm-6 col-xs-12">
              <label for="tipo-gestion">Tipo de gesti&oacute;n</label>
              <input class="input-text input-text-large" type="text" id="tipo-gestion" name="tipo-gestion" required="required"/>
            </div>
            <div class="col-lg-4 col-sm-6 col-xs-12">
              <label for="numero-gestion">N&uacute;mero de gesti&oacute;n</label>
              <input class="input-text input-text-large" type="text" id="numero-gestion" name="numero-gestion" required="required"/>
            </div>
            <div class="col-lg-4 col-sm-6 col-xs-12">
              <label for="age">A&ntilde;o</label>
              <input class="input-text input-text-large" type="text" id="age" name="age" required="required"/>
            </div>

            <div class="col-lg-4 col-sm-6 col-xs-12">
              <label for="rubro">Rubro</label>
              <input class="input-text input-text-large" type="text" id="rubro" name="rubro" required="required"/>
            </div>
            <div class="col-lg-4 col-sm-6 col-xs-12">
              <label for="sub-rubro">Sub-rubro</label>
              <input class="input-text input-text-large" type="text" id="sub-rubro" name="sub-rubro" required="required"/>
            </div>
            <div class="col-lg-4 col-sm-6 col-xs-12">
              <label for="n-expediente">Nº de expediente</label>
              <input class="input-text input-text-large" type="text" id="n-expediente" name="n-expediente" required="required"/>
            </div>

            <div class="col-lg-4 col-sm-6 col-xs-12">
              <label for="o-licitante">Organismo licitante</label>
              <input class="input-text input-text-large" type="text" id="o-licitante" name="o-licitante" required="required"/>
            </div>
            <div class="col-lg-4 col-sm-6 col-xs-12">
              <label for="o-comitente">Organismo comitente</label>
              <input class="input-text input-text-large" type="text" id="o-comitente" name="o-comitente" required="required"/>
            </div>
            <div class="col-lg-4 col-sm-6 col-xs-12">
              <label for="objeto">Objeto</label>
              <input class="input-text input-text-large" type="text" id="objeto" name="objeto" required="required"/>
            </div>

            <div class="clearfix">
              <div class="dropdown dropdown-1 col-md-6 col-sm-6 col-xs-12 pull-right">
                <input type="submit" value="Consultar" class="btn pull-right"/>
              </div>
              <div class="col-lg-6 col-sm-12 col-xs-12">
                <small>El filtro de Rubro - Subrubro se encuentra habilitado para gestiones a partir del año 2011.</small>
              </div>
            </div>

          </div>
        </form>
      </div>

      <div class="tabs-compras">
        <h4 class="ui-h4-3">Resultados</h4>
        <div class="ui-bg-2">
          <div class="tabs">
            <ul class="tabs-nav">
              <li class="active"><a href="#" data-target="tab-1">Apertura (64)</a></li>
              <li><a href="#" data-target="tab-2">En tr&aacute;mite (466)</a></li>
              <li><a href="#" data-target="tab-3">Concluidas (182)</a></li>         
            </ul>
            <div class="tab-contents">
              <div class="tab-content tab-1 active">
                <table>
                  <tr>
                    <th>Apertura</th>
                    <th>Gestión</th>
                    <th>Objeto</th>
                    <th>Organismo Licitante</th>
                    <th>&nbsp;</th>
                  </tr>
                  <tr>
                    <td>28/07/2014<br/>09:00</td>
                    <td>CONCURSO DE PRECIOS 28/2014</td>
                    <td>ADUISICION 20 (VEINTE) <br/>FRASCOS FACTOR VIII <br/> ANTIHEMOFILICO HUMANO X 1000</td>
                    <td>HOSPITAL GENERAL<br/> RECONQUISTA OLGA STUCKY DE RIZZI</td>
                    <td class="td-icon"><a href="#"><i class="icon-responde">&nbsp;</i></a></td>
                  </tr>
                  <tr>
                    <td>28/07/2014<br/>09:00</td>
                    <td>CONCURSO DE PRECIOS 28/2014</td>
                    <td>ADUISICION 20 (VEINTE) <br/>FRASCOS FACTOR VIII <br/> ANTIHEMOFILICO HUMANO X 1000</td>
                    <td>HOSPITAL GENERAL<br/> RECONQUISTA OLGA STUCKY DE RIZZI</td>
                    <td class="td-icon"><a href="#"><i class="icon-responde">&nbsp;</i></a></td>
                  </tr>
                  <tr>
                    <td>28/07/2014<br/>09:00</td>
                    <td>CONCURSO DE PRECIOS 28/2014</td>
                    <td>ADUISICION 20 (VEINTE) <br/>FRASCOS FACTOR VIII <br/> ANTIHEMOFILICO HUMANO X 1000</td>
                    <td>HOSPITAL GENERAL<br/> RECONQUISTA OLGA STUCKY DE RIZZI</td>
                    <td class="td-icon"><a href="#"><i class="icon-responde">&nbsp;</i></a></td>
                  </tr>
                  <tr>
                    <td>28/07/2014<br/>09:00</td>
                    <td>CONCURSO DE PRECIOS 28/2014</td>
                    <td>ADUISICION 20 (VEINTE) <br/>FRASCOS FACTOR VIII <br/> ANTIHEMOFILICO HUMANO X 1000</td>
                    <td>HOSPITAL GENERAL<br/> RECONQUISTA OLGA STUCKY DE RIZZI</td>
                    <td class="td-icon"><a href="#"><i class="icon-responde">&nbsp;</i></a></td>
                  </tr>
                </table>
              </div> 
              <div class="tab-content tab-2">
                <table>
                  <tr>
                    <th>Apertura</th>
                    <th>Gestión</th>
                    <th>Objeto</th>
                    <th>Organismo Licitante</th>
                    <th>&nbsp;</th>
                  </tr>
                  <tr>
                    <td>28/07/2014<br/>09:00</td>
                    <td>CONCURSO DE PRECIOS 28/2014</td>
                    <td>ADUISICION 20 (VEINTE) <br/>FRASCOS FACTOR VIII <br/> ANTIHEMOFILICO HUMANO X 1000</td>
                    <td>HOSPITAL GENERAL<br/> RECONQUISTA OLGA STUCKY DE RIZZI</td>
                    <td class="td-icon"><a href="#"><i class="icon-responde">&nbsp;</i></a></td>
                  </tr>
                  <tr>
                    <td>28/07/2014<br/>09:00</td>
                    <td>CONCURSO DE PRECIOS 28/2014</td>
                    <td>ADUISICION 20 (VEINTE) <br/>FRASCOS FACTOR VIII <br/> ANTIHEMOFILICO HUMANO X 1000</td>
                    <td>HOSPITAL GENERAL<br/> RECONQUISTA OLGA STUCKY DE RIZZI</td>
                    <td class="td-icon"><a href="#"><i class="icon-responde">&nbsp;</i></a></td>
                  </tr>
                  <tr>
                    <td>28/07/2014<br/>09:00</td>
                    <td>CONCURSO DE PRECIOS 28/2014</td>
                    <td>ADUISICION 20 (VEINTE) <br/>FRASCOS FACTOR VIII <br/> ANTIHEMOFILICO HUMANO X 1000</td>
                    <td>HOSPITAL GENERAL<br/> RECONQUISTA OLGA STUCKY DE RIZZI</td>
                    <td class="td-icon"><a href="#"><i class="icon-responde">&nbsp;</i></a></td>
                  </tr>
                  <tr>
                    <td>28/07/2014<br/>09:00</td>
                    <td>CONCURSO DE PRECIOS 28/2014</td>
                    <td>ADUISICION 20 (VEINTE) <br/>FRASCOS FACTOR VIII <br/> ANTIHEMOFILICO HUMANO X 1000</td>
                    <td>HOSPITAL GENERAL<br/> RECONQUISTA OLGA STUCKY DE RIZZI</td>
                    <td class="td-icon"><a href="#"><i class="icon-responde">&nbsp;</i></a></td>
                  </tr>
                  <tr>
                    <td>28/07/2014<br/>09:00</td>
                    <td>CONCURSO DE PRECIOS 28/2014</td>
                    <td>ADUISICION 20 (VEINTE) <br/>FRASCOS FACTOR VIII <br/> ANTIHEMOFILICO HUMANO X 1000</td>
                    <td>HOSPITAL GENERAL<br/> RECONQUISTA OLGA STUCKY DE RIZZI</td>
                    <td class="td-icon"><a href="#"><i class="icon-responde">&nbsp;</i></a></td>
                  </tr>
                </table>
              </div>
              <div class="tab-content tab-3">
                <table>
                  <tr>
                    <th>Apertura</th>
                    <th>Gestión</th>
                    <th>Objeto</th>
                    <th>Organismo Licitante</th>
                    <th>&nbsp;</th>
                  </tr>
                  <tr>
                    <td>28/07/2014<br/>09:00</td>
                    <td>CONCURSO DE PRECIOS 28/2014</td>
                    <td>ADUISICION 20 (VEINTE) <br/>FRASCOS FACTOR VIII <br/> ANTIHEMOFILICO HUMANO X 1000</td>
                    <td>HOSPITAL GENERAL<br/> RECONQUISTA OLGA STUCKY DE RIZZI</td>
                    <td class="td-icon"><a href="#"><i class="icon-responde">&nbsp;</i></a></td>
                  </tr>
                  <tr>
                    <td>28/07/2014<br/>09:00</td>
                    <td>CONCURSO DE PRECIOS 28/2014</td>
                    <td>ADUISICION 20 (VEINTE) <br/>FRASCOS FACTOR VIII <br/> ANTIHEMOFILICO HUMANO X 1000</td>
                    <td>HOSPITAL GENERAL<br/> RECONQUISTA OLGA STUCKY DE RIZZI</td>
                    <td class="td-icon"><a href="#"><i class="icon-responde">&nbsp;</i></a></td>
                  </tr>
                  <tr>
                    <td>28/07/2014<br/>09:00</td>
                    <td>CONCURSO DE PRECIOS 28/2014</td>
                    <td>ADUISICION 20 (VEINTE) <br/>FRASCOS FACTOR VIII <br/> ANTIHEMOFILICO HUMANO X 1000</td>
                    <td>HOSPITAL GENERAL<br/> RECONQUISTA OLGA STUCKY DE RIZZI</td>
                    <td class="td-icon"><a href="#"><i class="icon-responde">&nbsp;</i></a></td>
                  </tr>
                  <tr>
                    <td>28/07/2014<br/>09:00</td>
                    <td>CONCURSO DE PRECIOS 28/2014</td>
                    <td>ADUISICION 20 (VEINTE) <br/>FRASCOS FACTOR VIII <br/> ANTIHEMOFILICO HUMANO X 1000</td>
                    <td>HOSPITAL GENERAL<br/> RECONQUISTA OLGA STUCKY DE RIZZI</td>
                    <td class="td-icon"><a href="#"><i class="icon-responde">&nbsp;</i></a></td>
                  </tr>
                  <tr>
                    <td>28/07/2014<br/>09:00</td>
                    <td>CONCURSO DE PRECIOS 28/2014</td>
                    <td>ADUISICION 20 (VEINTE) <br/>FRASCOS FACTOR VIII <br/> ANTIHEMOFILICO HUMANO X 1000</td>
                    <td>HOSPITAL GENERAL<br/> RECONQUISTA OLGA STUCKY DE RIZZI</td>
                    <td class="td-icon"><a href="#"><i class="icon-responde">&nbsp;</i></a></td>
                  </tr>
                  <tr>
                    <td>28/07/2014<br/>09:00</td>
                    <td>CONCURSO DE PRECIOS 28/2014</td>
                    <td>ADUISICION 20 (VEINTE) <br/>FRASCOS FACTOR VIII <br/> ANTIHEMOFILICO HUMANO X 1000</td>
                    <td>HOSPITAL GENERAL<br/> RECONQUISTA OLGA STUCKY DE RIZZI</td>
                    <td class="td-icon"><a href="#"><i class="icon-responde">&nbsp;</i></a></td>
                  </tr>
                </table>
              </div>
            </div>
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
    <script src="js/jquery.marquee.min.js"></script>
    <script src="js/homepage.js"></script>
    <script>

  $(".tabs-nav a").on('click',function(ev){
    ev.preventDefault();
    el = $(this);
    $(".tabs-nav li").removeClass('active');
    el.parent().addClass('active');
    $('.tab-content').removeClass('active');
    $('.'+el.data('target')).addClass('active');
  })
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
    items:1,
    itemsDesktop : [1200,1], //5 items between 1000px and 901px
    itemsDesktopSmall : [1039,1], // betweem 900px and 601px
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

    <script src="http://cdn.jquerytools.org/1.2.6/full/jquery.tools.min.js"></script>
    <script>
        $(function() {
          // setup ul.tabs to work as tabs for each div directly under div.panes
          $("ul.tabs-compras").tabs("div.panes-compras > div");
      });
    </script>

    <!--script src="../../assets/js/docs.min.js"></script-->
  </body>
</html>
