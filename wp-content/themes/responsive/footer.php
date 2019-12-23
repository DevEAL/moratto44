<?php

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Footer Template
 *
 *
 * @file           footer.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2014 CyberChimps
 * @license        license.txt
 * @version        Release: 1.2
 * @filesource     wp-content/themes/responsive/footer.php
 * @link           http://codex.wordpress.org/Theme_Development#Footer_.28footer.php.29
 * @since          available since Release 1.0
 */

/*
 * Globalize Theme options
 */
global $responsive_options;
$responsive_options = responsive_get_options();
?>
<footer>
  <div class="container">
    <div class=" col-sm-10 cnt"><img src="<?php bloginfo('template_url'); ?>/img/forlogo.jpg" class="img-responsive" alt="logoes"></div>
  </div>
</footer>








<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/bootsnav.js"></script>

<script src="<?php bloginfo('template_url'); ?>/js/parallax.min.js"></script>
<script>
$('.parallax-window').parallax({imageSrc:'<?php bloginfo('template_url'); ?>/img/banner1.jpg'});
$('.parallax-window1').parallax({imageSrc:'<?php bloginfo('template_url'); ?>/img/pic1.jpg'});
$('.parallax-window2').parallax({imageSrc:'<?php bloginfo('template_url'); ?>/img/apartment2-big.jpg'});
$('.parallax-window3').parallax({imageSrc:'<?php bloginfo('template_url'); ?>/img/apartment3-big.jpg'});
$('.parallax-window4').parallax({imageSrc:'<?php bloginfo('template_url'); ?>/img/apartment4-big.jpg'});

</script>


<script>
$(window).scroll(function() {
  $(".slideanim").each(function(){
    var pos = $(this).offset().top;

    var winTop = $(window).scrollTop();
    if (pos < winTop + 600) {
      $(this).addClass("slide");
    }
  });
});

</script>



<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/1build.html"></script>


<script type="text/javascript">
$(window).on('mousewheel DOMMouseScroll', function(e) {
  var dir,
      amt = 500;

  e.preventDefault();
  if(e.type === 'mousewheel') {
    dir = e.originalEvent.wheelDelta > 0 ? '-=' : '+=';
  }
  else {
    dir = e.originalEvent.detail < 0 ? '-=' : '+=';
  }      

  $('html, body').stop().animate({
    scrollTop: dir + amt
  },200, 'linear');
})
</script>





<!-- prograssbar-->

<script>
function isScrolledIntoView(elem) {
        var docViewTop = $(window).scrollTop();
        var docViewBottom = docViewTop + $(window).height();

        var elemTop = $(elem).offset().top;
        var elemBottom = elemTop + $(elem).height();

        return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
    }

    $(window).scroll(function(){

        if (isScrolledIntoView('#wrapper13') === true) {
            $('.jk').addClass('progress')
        }

    });
	
	
</script>
<!-- prograssbar-->



<!-- scrollbar-->




 <script src="<?php bloginfo('template_url'); ?>/js/jquery.easing.min.js"></script>
 <script src="<?php bloginfo('template_url'); ?>/js/scrolling-nav.js"></script>
 <script src="<?php bloginfo('template_url'); ?>/js/build.js"></script>

<?php wp_footer(); ?>
</body>
</html>
