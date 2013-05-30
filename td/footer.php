<!--levela-->
<div id="footerz" class="ym-wrapper">
  <div id="cam">
          <span>&copy; Copyright Global View 2013 | Tous droits r&eacute;serv&eacute;s | Réalis&eacute; par <a href="http://www.inpulsion.net" target="_blank">Inpulsion</a></span>
  </div>
	<div id="fbboxf" class="ym-grid linearize-level-1">
    <div id="logop" class="ym-gl ym-g33">
        <a href="http://globalview-fr.com" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/globalview.jpg" />
</a>
        <a href="http://www.cepici.gouv.ci/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/cepici_small.gif" /></a>
    </div>
    <div id="contacts" class="ym-gl ym-g66">
               <!--<img src="<?php //bloginfo('template_directory'); ?>/images/s.gif" />-->
	<div id="socials">
		<a href="http://www.viadeo.com/profile/0021oorml2rukw0s?ga_from=Fu:undefined;Fb%3Aright_col-resume%3BFe%3Aname%3B" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/viadeo.gif" /></a>
		<a href="http://www.linkedin.com/pub/diaspora-growth/71/538/293" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/in.gif" /></a>
		<a href="http://gplus.to/DiasporaForGrowth" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/gplus.gif" /></a>
		<a href="https://twitter.com/DiasporaForGrow" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/twitter.gif" /></a>
		<a href="https://www.facebook.com/diasporaforgrowth" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/facebook.gif" /></a>
	</div>
    </div>
	</div>
</div>
</div><!--bodywrapper-->
	<?php wp_footer(); ?>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.js"></script>
<script src="http://malsup.github.io/jquery.cycle.all.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap-transition.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap-modal.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap-scrollspy.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap-tab.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap-button.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap-collapse.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/cufon-yui.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/Bebas_Neue_400.font.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/nevis_700.font.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.backstretch.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.blockUI.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/functions.js"></script>
<script type="text/javascript">
  jQuery(window).bind('resize', (function() {
    var timer;
    return function() {
      clearTimeout(timer);
      timer = setTimeout(function() {
        Cufon.refresh("#message h1",{
fontSize:'18px',
      letterSpacing:'0px',
      color:'#000',
    textTransform:'uppercase',
   fontFamily: 'Bebas Neue'
});
      }, 50); // possibly more than 50
    };
  })());
</script>
<!--<script>
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-XXXXXX-XX']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
-->
</body>
</html>
