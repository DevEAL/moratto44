<?php

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Site Front Page
 *
 * Note: You can overwrite front-page.php as well as any other Template in Child Theme.
 * Create the same file (name) include in /responsive-child-theme/ and you're all set to go!
 * @see            http://codex.wordpress.org/Child_Themes and
 *                 http://themeid.com/forum/topic/505/child-theme-example/
 *
 * @file           front-page.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2014 CyberChimps
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/front-page.php
 * @link           http://codex.wordpress.org/Template_Hierarchy
 * @since          available since Release 1.0
 */

/**
 * Globalize Theme Options
 */
$responsive_options = responsive_get_options();
/**
 * If front page is set to display the
 * blog posts index, include home.php;
 * otherwise, display static front page
 * content
 */
if ( 'posts' == get_option( 'show_on_front' ) && $responsive_options['front_page'] != 1 ) {
	get_template_part( 'home' );
} elseif ( 'page' == get_option( 'show_on_front' ) && $responsive_options['front_page'] != 1 ) {
	$template = get_post_meta( get_option( 'page_on_front' ), '_wp_page_template', true );
	$template = ( $template == 'default' ) ? 'index.php' : $template;
	locate_template( $template, true );
} else {
	get_header();
?>


<div id="wrapper-mb" >
  <div class="container">
    <div class="row mbsection1 ">
      <div class=" col-xs-7 pdng"><img src="<?php bloginfo('template_url'); ?>/img/mb-partners.jpg" class=" img-responsive pull-right"  alt="parners" style="padding-left:40px"></div>
      <div class=" col-xs-5  pdng pull-left">
        <div class="dropdown">
          <a class="btn btn-link dropdown-toggle page-scroll" type="button" data-toggle="dropdown"  href="#CONTÁCTANOS">CONTACTO <span class="badge"><span class="glyphicon glyphicon-menu-down"></span></span> </a>
          <!--<ul class="dropdown-menu">
            <li><a href="#">HTML</a></li>
            <li><a href="#">CSS</a></li>
            <li><a href="#">JavaScript</a></li>
          </ul>-->
        </div>
      </div>
    </div>
    <div class="row mbsection2 ">
      <div class="col-xs-12">El sueño de vivir en armonía total</div>
            
    </div>
    <div class="row mbsection3 ">
           <div class="col-xs-12">VISITA EL APARTAMENTO MODELO</div>
        </div>
  </div>
</div>
<div id="wrapper3">
  <div class="container">
    <div class="row">
      <div class="col-sm-7">
        <p><span class="text-primary"> Moratto44 / </span> El sueño de vivir en armonía total</p>
        <h1 class="text-left">La exclusividad adquiere más valor
          cuando se invierte en sostenibilidad.</h1>
        <p> Moratto44 se construye con el estándar de edificación sostenible de <span class="text-primary"> mayor prestigio</span> en el mundo: LEED, Leadership in Energy & Environmental Design. </p>
       
        <a class="page-scroll location" href="#"><span>CONOCE MÁS</span> <span > <i class="fa fa-angle-down" aria-hidden="true"></i> </span> </a> </div>
    </div>
  </div>
</div>
<div id="wrapper2"> <img src="<?php bloginfo('template_url'); ?>/img/banner1.jpg" class="img-responsive" alt="bannner1"> </div>
<div class="clr"></div>
<div id="wrapper4"> <div id="get-location"></div>

    <h1>Cll. 44 N° 38 - 11 Cabecera, Bucaramanga</h1>
<div class="map-pic"><img src="<?php bloginfo('template_url'); ?>/img/map2.jpg" class="img-responsive cnt" alt="map11"></div>
  <div class="container">

        <div class="row ">
      <div class="cabece-pic slideanim ">
        <div class="col-sm-3 post-left">
          <p class="lead text-right">La ubicación perfecta</p>
          <p class="text-right">La localización de
            Moratto44 es privilegiada
            e incentiva la movilización
            en múltiples alternativas
            de transporte, amigables
            con el medio ambiente,
            como la bicicleta.</p>
        </div>
        <div class="col-sm-3 pull-right">
          <p class="lead text-left">El hogar ideal </p>
          <p class="text-left">Moratto44 es un espacio
            diseñado especialmente
            para vivir de forma 
            segura y tranquila. 
            Además, se destaca como 
            el edificio de mayor 
            aporte a la preservación 
            y control del medio 
            ambiente.</p>
        </div>
      </div>
    </div>
  </div>
</div>





<div id="wrapper5" class="parallax-window1" data-parallax="scroll" data-image-src="<?php bloginfo('template_url'); ?>/img/pic1.jpg">
<div class=" col-xs-12 visible-xs"><img src="<?php bloginfo('template_url'); ?>/img/pic1.jpg" class="img-responsive cnt" ></div>
  <div class="container">
    <div class="col-sm-5 pull-right divscrol">
      <p class="lead text-right">Características Premium </p>
      <p  class="text-right">Además de ser el único proyecto residencial en proceso de 
        obtener la certificación LEED de la ciudad, Moratto44 cuenta
        con una ubicación con todas las facilidades, espacios sanos,
        agradables, con aire fresco, mayor luz natural y un conjunto
        de estrategias sostenibles que se traducen en alta eficiencia,
        ahorro en servicios públicos y mejor calidad de vida. </p>
    </div>
    <div class="clr"></div>
  </div>
</div>
<div id="wrapper6">
<div  id="get-news"></div>
  <div class="container">
    <div class="row">
      <div class="col-sm-8 slideanim cnt"> <img src="<?php bloginfo('template_url'); ?>/img/pic2.png" class="img-responsive cnt pic" alt="pic"></div>
    </div>
    <div class="row apartment">
      <div class="col-sm-12 col-md-6 pic3"> <img src="<?php bloginfo('template_url'); ?>/img/pic3.png" class="img-responsive cnt" alt="name"> </div>
      <div class="col-sm-12 col-md-6">
        <ul>
          <li>Moratto44 tiene un sistema de ventilación pasiva que garantiza la renovación del aire
            y mantiene los rangos de confort ambiental.</li>
          <li>El sistema eléctrico de una edificación como Moratto44 logra la optimización del
            consumo de energía.</li>
          <li>Moratto44 tiene un sistema eficaz que le permite ahorrar en el consumo de agua potable. </li>
          <li>Moratto44 cuenta con un sistema de recolección y tratamiento de agua lluvia para
            disminuir el consumo innecesario de agua potable en zonas comunes.</li>
        </ul>
        <a href="#" data-toggle="modal" data-target="#myModal" ><span>VER GALERÍA</span> <span><i class="fa fa-angle-down" aria-hidden="true"></i></span> </a>
        <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog"> 
            
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                <div id="myCarousel" class="carousel slide" data-ride="carousel"> 
                  <!-- Indicators --> 
                  
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    <div class="item active"> <img src="<?php bloginfo('template_url'); ?>/img/g1.jpg" alt="name" > </div>
                    <div class="item"> <img src="<?php bloginfo('template_url'); ?>/img/g2.jpg" alt="name"> </div>
                    <div class="item"> <img src="<?php bloginfo('template_url'); ?>/img/g4.jpg" alt="name" > </div>
                    <div class="item"> <img src="<?php bloginfo('template_url'); ?>/img/g5.jpg" alt="name"> </div>
                    <div class="item"> <img src="<?php bloginfo('template_url'); ?>/img/g6.jpg" alt="name"> </div>
                    <div class="item"> <img src="<?php bloginfo('template_url'); ?>/img/g7.jpg" alt="name"> </div>
                  </div>
                  
                  <!-- Left and right controls --> 
                  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success pull-right btn-lg" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-10 forlogo cnt">
        <div class="col-sm-3 slideanim"><img src="<?php bloginfo('template_url'); ?>/img/logoes1.png" class="img-responsive cnt"  alt="logoes"></div>
        <div class="col-sm-3 slideanim"><img src="<?php bloginfo('template_url'); ?>/img/logoes2.png" class="img-responsive cnt" alt="logoes"></div>
        <div class="col-sm-3 slideanim"><img src="<?php bloginfo('template_url'); ?>/img/logoes3.png" class="img-responsive cnt" alt="logoes"></div>
        <div class="col-sm-3 slideanim"><img src="<?php bloginfo('template_url'); ?>/img/logoes4.png" class="img-responsive cnt" alt="logoes"></div>
      </div>
    </div>
  </div>
</div>


<div id="wrapper7">
<div id="get-apartments"></div>
  <div class="container">
    <h1>Explora los tipos de apartamento</h1>
    <p class="text-center">Todos los apartamentos cuentan con Zona Social: Sala comedor con balcón<br>
      y baño social, además de una moderna Zona Privada: Alcoba principal con baño y vestier, 2 alcobas, baño alcobas y estar de TV. </p>
    <div class="row">
      <div id="apartments" class="content panel-floorplans step-in">
        <div class="inner">
          <div class="floorplan-menu step-item animate">
            <header> <span class="header-title">APARTAMENTOS TIPO</span> </header>
            <div class="menu-section">
              <ul class="expandable-region parent-menu">
                <li class="no-mob-border"> <a href="#" class="sub-parent active">APARTAMENTO TIPO 1</a>
                  <ul class="sub-menu option-4-alt active">
                    <li><a href="#" data-floor="basement2" class="">Planta</a></li>
                    <li><a href="#" data-floor="basement1" class="">Isométrica</a></li>
                  </ul>
                  <div class="mob-content show-mob active" data-floor="basement2"> <img src="<?php bloginfo('template_url'); ?>/img/apatment1.jpg" alt="Basement 2 Floorplan"> </div>
                  <div class="mob-content show-mob" data-floor="basement1"> <img src="<?php bloginfo('template_url'); ?>/img/apatment2.jpg" alt="Basement 1 Floorplan"> </div>
                </li>
              </ul>
            </div>
            <div class="menu-section">
              <ul class="expandable-region parent-menu">
                <li> <a href="#" class="sub-parent" data-config="1b1b">APARTAMENTO TIPO 2</a>
                  <ul class="sub-menu option-2" style="display: none;">
                    <li><a class="" href="#" data-type="A">Planta</a></li>
                    <li><a href="#" data-type="B">Isométrica</a></li>
                  </ul>
                  <div class="mob-content show-mob " data-type="A"> <img src="<?php bloginfo('template_url'); ?>/img/apatment3.jpg" alt="Layout A Floorplan"> </div>
                  <div class="mob-content show-mob" data-type="B"> <img src="<?php bloginfo('template_url'); ?>/img/apatment4.jpg" alt="Layout B Floorplan"> </div>
                </li>
                <li> <a href="#" class="sub-parent" data-config="2b2b">APARTAMENTO TIPO 3</a>
                  <ul class="sub-menu option-6" style="display: none;">
                    <li><a href="#" data-type="C" class=""><span>Tipo 3A -</span> Planta</a></li>
                    <li><a href="#" data-type="C1" class=""><span>Tipo 3A -</span> Isométrica</a></li>
                    <li><a href="#" data-type="D" class=""><span>Tipo 3B - </span>Planta</a></li>
                  </ul>
                  <div class="mob-content show-mob" data-type="C"> <img src="<?php bloginfo('template_url'); ?>/img/apatment5.jpg" alt="Layout C Floorplan"> </div>
                  <div class="mob-content show-mob" data-type="C1"> <img src="<?php bloginfo('template_url'); ?>/img/apatment6.jpg" alt="Layout C1 Floorplan"> </div>
                  <div class="mob-content show-mob" data-type="D"> <img src="<?php bloginfo('template_url'); ?>/img/apatment7.jpg" alt="Layout D Floorplan"> </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="floorplan-wrapper-outer step-item animate">
            <div class="floorplan-wrapper">
              <div class="level active" data-floor="basement2"> <img src="<?php bloginfo('template_url'); ?>/img/apatment1.jpg" alt="Basement 2 Floorplan"> </div>
              <div class="level" data-floor="basement1"> <img src="<?php bloginfo('template_url'); ?>/img/apatment2.jpg" alt="Basement 1 Floorplan"> </div>
              <div class="level" data-floor="lowerground"> <img src="<?php bloginfo('template_url'); ?>/img/apatment3.jpg" alt="Lower Ground Floorplan"> </div>
              <div class="room" data-type="A"> <img src="<?php bloginfo('template_url'); ?>/img/apatment3.jpg" alt="Layout A Floorplan"> </div>
              <div class="room" data-type="B"> <img src="<?php bloginfo('template_url'); ?>/img/apatment4.jpg" alt="Layout B Floorplan"> </div>
              <div class="room" data-type="C"> <img src="<?php bloginfo('template_url'); ?>/img/apatment5.jpg" alt="Layout C Floorplan"> </div>
              <div class="room" data-type="C1"> <img src="<?php bloginfo('template_url'); ?>/img/apatment6.jpg" alt="Layout C1 Floorplan"> </div>
              <div class="room" data-type="D"> <img src="<?php bloginfo('template_url'); ?>/img/apatment7.jpg" alt="Layout D Floorplan"> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="clr"></div>
</div>
<div class="clr"></div>
<div id="wrapper8"> <img src="<?php bloginfo('template_url'); ?>/img/apartment2-big.jpg" class="cnt slideanim" alt="pic"></div>
<div class="clr"></div>
<div id="wrapper9">
<div id="get-location"></div>
  <div class="container">
    <h1>Disfrútalo todo sin salir de casa</h1>
    <p class="text-center">Una torre de 14 pisos de vivienda, 6 niveles de parqueaderos y una espectacular<br>
      cubierta verde con gimnasio, BBQ y piscina para un total de 21 niveles.</p>
    <div class="row">
      <div class="col-sm-4 slideanim">
        <div class="thumbnail"> <img src="<?php bloginfo('template_url'); ?>/img/CUBIERTA.png" width="95" height="81" alt="img">
          <div class="caption">
            <h4 class="text-center"><strong>CUBIERTA</strong></h4>
            <p class="text-center">Piscina adultos con jacuzzi <br>
              Gimnasio con balcón<br>
              Baños con vestier <br>
              Zonas verdes<br>
              Sauna -Turco<br>
              Solárium - BBQ</p>
          </div>
        </div>
      </div>
      <div class="col-sm-4 slideanim">
        <div class="thumbnail"> <img src="<?php bloginfo('template_url'); ?>/img/CUBIERTA.png" width="95" height="81" alt="img">
          <div class="caption">
            <h4 class="text-center"><strong>PISO 6</strong></h4>
            <p class="text-center">Piscina para niños - Parque infantil<br>
              Salón social - Zona de lectura<br>
              Salón de juegos<br>
              Zonas verdes</p>
          </div>
        </div>
      </div>
      <div class="col-sm-4 slideanim">
        <div class="thumbnail"> <img src="<?php bloginfo('template_url'); ?>/img/CUBIERTA.png" width="95" height="81" alt="img">
          <div class="caption">
            <h4 class="text-center"><strong>PRIMER PISO</strong></h4>
            <p class="text-center">Lobby doble altura <br>
              Portería <br>
              Bicicleteros <br>
              Zonas verdes <br>
              Cuartos de reciclaje<br>
              Parqueaderos visitantes</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="wrapper10" >
  <div class="container">
    <div class="chart1"> <img src="<?php bloginfo('template_url'); ?>/img/aprt-chart.png" class="img-responsive cnt" alt="name"> </div>
    <div class="chart2"> <img src="<?php bloginfo('template_url'); ?>/img/aprt-chart2.png" class="img-responsive cnt" alt="name"> </div>
  </div>
</div>
<div id="wrapper11">
  <div class="container">
    <h1 class="text-left">Imagina un domingo…</h1>
    <div class="row">
      <div class="col-sm-3">
        <p>7AM</p>
        <div class="line"><img src="<?php bloginfo('template_url'); ?>/img/line.png" width="1" height="66" alt="line"></div>
        <h4 > RELAX</h4>
        <p>Disfruta del amanecer
          desde tu balcón privado
          y llénate de buena energía
          mientras recibes la brisa
          de la mañana. </p>
      </div>
      <div class="col-sm-3">
        <p>10AM</p>
        <div class="line"><img src="<?php bloginfo('template_url'); ?>/img/line.png" width="1" height="66" alt="line"></div>
        <h4 > DIVERSIÓN</h4>
        <p>Haz ejercicio en el  gimnasio 
          totalmente equipado o 
          relájate en  la piscina para
          estar  renovado el resto
          de la semana. </p>
      </div>
      <div class="col-sm-3">
        <p>1PM</p>
        <div class="line"><img src="<?php bloginfo('template_url'); ?>/img/line.png" width="1" height="66" alt="line"></div>
        <h4 > DELEITE</h4>
        <p>Sal a caminar y encuentra
          exclusivos restaurantes
          en la zona para disfrutar
          de un almuerzo completo 
          y, luego, un buen café. </p>
      </div>
      <div class="col-sm-3">
        <p>7PM</p>
        <div class="line"><img src="<?php bloginfo('template_url'); ?>/img/line.png" width="1" height="66" alt="line"></div>
        <h4> CONFORT</h4>
        <p>Termina el domingo con
          un plan perfecto de películas 
          en casa. Descansa en la 
          comodidad que solo puede
          ofrecerte tu hogar en Moratto44. </p>
      </div>
    </div>
  </div>
</div>
<div id="wrapper12" class="parallax-window3" data-parallax="scroll" data-image-src="<?php bloginfo('template_url'); ?>/img/apartment3-big.jpg">
  <div class="container"> </div>
</div>
<div id="wrapper13" class="slideanim">
<div id="get-contactus"></div> 
  <div class="container">
    <h1>Proceso de construcción</h1>
    <div class="row">
   <div class="row">
        <div class="col-sm-10 col-xs-8 prog1 cnt">
          <div id="progressbar">
            <div class="jk">
              <div id="pbaranim"></div>
            </div>
          </div>
        </div>
      </div>
            
      <div class="row">
        <div class="col-sm-10 col-xs-10 pull-right" style="position:relative"> 
         <div class="prog">
          <div id="progressbar2">
            <div class="jk">
              <div id="pbaranim2" ></div>
            </div>
          </div>
        </div>
          <div class="col-sm-2">
            <div class="line2"></div>
            <h4>Fase uno</h4>
            <p>Demolición
              + movimientos de tierra</p>
          </div>
          <div class="col-sm-2">
            <div class="line2"></div>
            <h4>Fase dos</h4>
            <p>Estructura de
              planta baja</p>
          </div>
          <div class="col-sm-2">
            <div class="line2"></div>
            <h4>Fase tres</h4>
            <p>Construcción
              interna + externa</p>
          </div>
          <div class="col-sm-2">
            <div class="line2"></div>
            <h4>Fase cuatro</h4>
            <p>Terminaciones
              internas + externas</p>
          </div>
          <div class="col-sm-2">
            <div class="line2"></div>
            <h4>Fase cinco</h4>
            <p>¡Listos para darte
              la bienvenida!</p>
          </div>
        </div>
      </div>
      
      
    </div>
  </div>
</div>
<div id="wrapper14" class="parallax-window4" data-parallax="scroll" data-image-src="<?php bloginfo('template_url'); ?>/img/apartment4-big.jpg">

  <div class="container">
    <div class="col-sm-10 col-md-8  cnt frm1 slideanim">
      <h1>Deja tus datos<br>
        y nos pondremos en contacto</h1>
      <?php
	if (isset($_REQUEST['submit']))  {
	  $admin_email = "yohanna.rozo@eivos.com, santander@coldwellbanker.com.co";
	  $email = $_REQUEST['txt1'];
	  $name = $_REQUEST['txt2'];
          $name1 = $_REQUEST['txt3'];
          $name2= $_REQUEST['txt4'];
          $name3 = $_REQUEST['txt5'];
	  $msg = $_REQUEST['txt6'];
	  $sub = $name."(".$email.")";
	  
	  //send email
	  $status = mail($admin_email, "$sub", $msg, "From:" . $email);
	  if($status){
		$mailMsg = "Gracias por contactarnos! Tu mensaje ha sido enviado con éxito.";
                echo "<script type='text/javascript'>alert('$mailMsg');</script>";
	  } else{
		$mailMsg = "Oops! Query is not sent.";
                echo "<script type='text/javascript'>alert('$mailMsg');</script>";
	  }
  }
?>
      <form method="POST" enctype="multipart/form-data">
        <div class="col-12">
          <input name="txt1" class="effect-8" type="text" placeholder="NOMBRES">
          <span class="focus-border"> <i></i> </span> </div>
        <div class="col-12">
          <input name="txt2" class="effect-8" type="text" placeholder="APELLIDOS">
          <span class="focus-border"> <i></i> </span> </div>
        <div class="col-12">
          <input name="txt3" class="effect-8" type="text" placeholder="CORREO ELECTRÓNICO">
          <span class="focus-border"> <i></i> </span> </div>
        <div class="col-12">
          <input name="txt4" class="effect-8" type="text" placeholder="CELULAR">
          <span class="focus-border"> <i></i> </span> </div>
        <div class="col-12">
           <input name="txt5" class="effect-8" type="text" placeholder="¿CÓMO TE ENTERASTE DE MORATTO 44?">
         
          <span class="focus-border"> <i></i> </span> </div>
        <div class="col-12">
          <textarea name="txt6" class="effect-8" placeholder="Escribe tu mensaje" rows="7"></textarea>
          <span class="focus-border"> <i></i> </span> </div>
        <div class=" col-12"> <span style="height:30px;" >
          <input name="check" type="checkbox" value="">
          </span > <span style="height:30px" >Acepto las <a href="http://futiq.co.uk/real/terminos-y-condiciones/"> polítcas de privacidad y </a> los <a href="http://futiq.co.uk/real/terminos-y-condiciones/"> términos y condiciones</a>.</span> </div>
        <div class="col-12">
          <button type="submit" name="submit" class="bnt btn-success" value="ENVIAR">ENVIAR</button>
        </div>
      </form>
       
      <div class="clr"></div>
    </div>
  </div>
  <br>
</div>
<div id="wrapper15">
  <div class="container">
    <div class="row">
      <div class="col-sm-4"> <img src="<?php bloginfo('template_url'); ?>/img/volar-logo.png" class="img-responsive cnt" alt="pic"></div>
      <div class="col-sm-8 f2lg">
        <p class=" text-justify"> Moratto44 es el resultado de la constante búsqueda de Grupo Valor S.A. por la excelencia en 
          arquitectura y construcción desde 1984, una compañía que se destaca a nivel nacional por
          sus proyectos innovadores y amigables con el medio ambiente. <br>
          <br>
          Inspirados en el continuo mejoramiento de la calidad de sus edificaciones, Grupo Valor S.A. 
          seleccionó a Bucaramanga para lograr su proyecto más innovador y de más altos estándares 
          ambientales, beneficiando a la ciudad y, particularmente, a los residentes que disfrutarán de MORATTO 44. </p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4"> <img src="<?php bloginfo('template_url'); ?>/img/bankerlogo.png" class="img-responsive cnt" alt="pic"></div>
      <div class="col-sm-8 f2lg">
        <p class=" text-justify"> Moratto44 hace parte del portafolio de proyectos EXCLUSIVOS comercializados por Coldwell Banker -
          Innovación Inmobiliaria Santander. ¡Déjate acompañar por un experto!</p>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
jQuery(document).on("click", '.apartments', function(e){
      e.preventDefault();
	jQuery('html,body').animate({
    	scrollTop: jQuery('#get-apartments').offset().top - 0
    },2000);
    jQuery(".tempo-navigation-wrapper:first-child").removeClass("collapse-in");
	jQuery("body").css("overflow", "initial");

});

jQuery(document).on("click", '.benef', function(e){
    e.preventDefault();
	jQuery('html,body').animate({
    	scrollTop: jQuery('#get-news').offset().top - 0
    },2000);
    jQuery(".tempo-navigation-wrapper:first-child").removeClass("collapse-in");
	jQuery("body").css("overflow", "initial");

});

jQuery(document).on("click", '.location1', function(e){
    e.preventDefault();
	jQuery('html,body').animate({
    	scrollTop: jQuery('#get-location').offset().top - 0
    },2000);
    jQuery(".tempo-navigation-wrapper:first-child").removeClass("collapse-in");
	jQuery("body").css("overflow", "initial");

});

jQuery(document).on("click", '.location', function(e){
    e.preventDefault();
	jQuery('html,body').animate({
    	scrollTop: jQuery('#get-location').offset().top - 0
    },2000);
    jQuery(".tempo-navigation-wrapper:first-child").removeClass("collapse-in");
	jQuery("body").css("overflow", "initial");

});

jQuery(document).on("click", '.contactus', function(e){
    e.preventDefault();
	jQuery('html,body').animate({
    	scrollTop: jQuery('#get-contactus').offset().top - 0
    },2000);
    jQuery(".tempo-navigation-wrapper:first-child").removeClass("collapse-in");
	jQuery("body").css("overflow", "initial");

});

jQuery(document).on("click", '.dropdown-toggle', function(e){
    e.preventDefault();
	jQuery('html,body').animate({
    	scrollTop: jQuery('#get-contactus').offset().top - 0
    },2000);
    jQuery(".tempo-navigation-wrapper:first-child").removeClass("collapse-in");
	jQuery("body").css("overflow", "initial");

});




</script>

	<?php

	get_footer();
}
