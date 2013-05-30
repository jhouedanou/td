<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<?php if (is_search()) { ?>
	<meta name="robots" content="index, follow" />
	<?php } ?>
	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	<meta name="title" content="<?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--[if lte IE 7]>
		<script src="<?php bloginfo('template_directory'); ?>/js/respond.min.js" type="text/javascript"></script>
		<link href="<?php bloginfo('template_directory'); ?>/css/iehacks.min.css" rel="stylesheet" type="text/css" />
	<![endif]-->
	<!--[if lt IE 9]>
		<script src="http://html5shim.gooym-glecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico">
	<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/_/img/apple-touch-icon.png">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/tabs.css" type="text/css"/>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/base.min.css" type="text/css"/>
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/bootstrap.css" type="text/css"/>
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/bootstrap-responsive.css" type="text/css"/>
  <script>
function blink(ob)
{
if (ob.style.visibility == "visible" )
{
ob.style.visibility = "hidden";
}
else
{
ob.style.visibility = "visible";
}
}
setInterval("blink(bl)",500);
</script> 
  	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
</head>
<body>
<div id="bodywrapper" class="ym-wrapper">
<a href="https://plus.google.com/109315927051538702264" rel="publisher"></a>
	<!--deco-->
  <div id="logowrapper" class="ym-wbox">
<!--contenu du site web-->
    <div id="logoinner" class="ym-wbox">
  		<div id="logobox" class="ym-grid linearize-level-1">
              <div id="logo" class="ym-g30 ym-gl">
                  <a title="<?php echo get_bloginfo('description'); ?>" href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/Logo_DFG_withTagline.jpg" class="flexible"/></a>
              </div><!--logo-->
              <!--responsive menu-->
         <div id="navabar" class="ym-g70 ym-gr linearize-level-1">
        	<a class="toggleMenu" href="#">Menu</a>
				  <?php
                    wp_nav_menu( array( 'menu' => 'navbar','walker' => new MV_Cleaner_Walker_Nav_Menu(),'menu_class' => 'nav linearize-level-1'));
                  ?>
          <!--nav-->
        </div><!--navabar-inner -->
      </div><!--logobox-->
  	</div><!--logoinner-->
  </div><!--logowrapper-->

