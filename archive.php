 <?php get_header(); ?>
 <!--fenetre modale-->

    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Inscription</h3>
    </div>
    <div class="modal-body">
      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("popup") ) : ?>
      <?php endif; ?>
    </div>
    <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Fermer</button>
    </div>
    </div>
	<div id="bodybox1" class="ym-wbox asrch">
    	<div id="the_body1" class="ym-grid linearize-level-1">

	    </div><!--the_body-->
	</div><!--bodybox-->
<div id="sponsorbox" class="ym-wbox">

</div>
<!--main-->
<div id="mainwrapper" class="ym-wrapper arch">
	<div id="mainboxs" class="ym-wbox">
  		<div id="maingrid1" class="ym-g80 ym-gl linearize-level-1">
    <?php if (have_posts()) : ?>

      <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

      <?php while (have_posts()) : the_post(); ?>

        <div <?php post_class() ?>>

            <h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

            <?php //posted_on(); ?>

            <div class="entry">
              <?php the_content('En savoir plus...'); ?>
			  <div class="clearfix"></div>
            </div>

        </div>

      <?php endwhile; ?>

      <?php //post_navigation(); ?>

  <?php else : ?>

    <h2><?php _e('En cours de construction','html5reset'); ?></h2>

  <?php endif; ?>
   	 	</div><!--maingrid1-->
      <!--sponsors etc-->
  		<div id="maingrid2" class="ym-g20  ym-gr linearize-level-1">
			   <?php get_sidebar(2);?>
		  </div><!--gbox-->
    </div>

  </div><!--mainbox-->
</div>

<?php get_footer(); ?>
