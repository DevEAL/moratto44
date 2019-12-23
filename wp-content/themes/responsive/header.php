<?php
/**
 * Header Template
 *
 *
 * @file           header.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2014 CyberChimps
 * @license        license.txt
 * @version        Release: 1.3
 * @filesource     wp-content/themes/responsive/header.php
 * @link           http://codex.wordpress.org/Theme_Development#Document_Head_.28header.php.29
 * @since          available since Release 1.0
 */

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

?>
	<!DOCTYPE html>

<html lang="es" >
	<head>

		<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Morrato.44</title>

<link rel="icon" href="<?php bloginfo('template_url'); ?>/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.css">





<script src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>


		<?php wp_head(); ?>
	</head>

<?php if( is_front_page() ) { ?>
     <body>
     <?php } else {?>
     <body <?php body_class(); ?>>
     <?php } ?>
	<div id="header" role="banner">

		<div id="wrapper1">

<nav class="navbar navbar-default brand-center bootsnav nav">

    <div class="container">      
        <!-- Start Header Navigation -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                <i class="fa fa-bars"></i>
            </button>
<?php $url = home_url();?>
            <a class="navbar-brand" href="<?php echo esc_url( $url ); ?>"><img src="<?php bloginfo('template_url'); ?>/img/marroto-logo.jpg" class="logo" alt=""></a>
        </div>
        <!-- End Header Navigation -->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-menu">
        
            <ul class="nav navbar-nav" data-in="fadeInDown" data-out="fadeOutUp">
                <li><a class="apartments page-scroll" href="http://futiq.co.uk/real/">APARTAMENTOS</a></li> 
                <li><a class="benef page-scroll" href="http://futiq.co.uk/real/">BENEFICIOS</a></li> 
                <li><a class="page-scroll block" href="http://futiq.co.uk/real/" class="n1"></a></li> 
                <li><a class="location1 page-scroll block"  href="http://futiq.co.uk/real/">UBICACIÓN</a></li> 
                <li><a class="contactus page-scroll" href="http://futiq.co.uk/real/">CONTÁCTANOS</a></li> 
                <li><a class="page-scroll" href="http://futiq.co.uk/real/blog">NOVEDADES</a></li>                    
                -- More menu --
            </ul>
        </div><!-- /.navbar-collapse -->
    </div>   
</nav>

</div>
<div id="scrollbar" class="scrollToTop " style="display: block;">

<div class="container pdng barfix">

<div class="col-sm-7 barpic pdng">
<div class="row bartext">VISITA EL APARTAMENTO MODELO</div>
<div class="row"><img src="<?php bloginfo('template_url'); ?>/img/logowith3logo.jpg" class=" img-responsive" alt="logo11"></div>
</div>
<div class="col-sm-5">
<div class="row row1"></div>

<div class="row row2">
<div class="col-sm-7 pdng"><img src="<?php bloginfo('template_url'); ?>/img/leed-erazo.jpg" width="210" height="55"></div>
<div class="col-sm-5">
<div>
          <button class="contactus btn btn-link">CONTACTO <span class="badge"><span class="glyphicon glyphicon-menu-down"></span></span>   </button>
        </div>


</div>
</div>

<div class="row row3">El sueño  de vivir en armonía total</div>


</div>


</div>



</div>

<?php if( is_front_page() ) { ?>

<?php } ?>