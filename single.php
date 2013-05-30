 <?php get_header(); ?>
 <!--fenetre modale-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/all.js#xfbml=1&appId=461551590580268";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

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
  		<div id="maingrid1" class="ym-g66 ym-gl linearize-level-1">
    <!--post loop-->
      <div id="content">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
            <div class="description">
              <h1 class="entry-title"><?php the_title(); ?></h1>
            </div>
            <div class="entry-content">
              <div class="ze">
                <?php //include (TEMPLATEPATH . '/_/inc/meta.php' ); ?>
              </div>
<?php //the_post_thumbnail('medium');?>
              <?php the_content(); ?>
              <?php //wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
              <?php //the_tags( 'Tags: ', ', ', ''); ?>
            </div>
            <?php edit_post_link('Edit this entry','','.'); ?>
          </div>
<!--no comments allowed when coding this thing-->
        <?php //comments_template(); ?>
        <?php endwhile; endif; ?>
        </div><!--content-->
    <!--post loop end-->
   	 	</div><!--maingrid1-->
 <!--sponsors etc-->
      <div id="maingrid2" class="ym-g33  ym-gr linearize-level-1">
         <?php get_sidebar();?>
      </div><!--gbox-->
    </div>
  </div><!--mainbox-->

<?php get_footer(); ?>

