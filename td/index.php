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
	<div id="bodybox" class="ym-wbox">
    	<div id="the_body" class="ym-grid linearize-level-1">
        	<div id="message">
				    <h1 style="text-transform:uppercase !important">
                <?php get_a_post(4);
                 the_title(); ?>
            </h1>
                <p>
                  <?php get_a_post(4);
                       the_content(); ?>
                </p>
            </div>
            <div id="lieu">
            	<div id="date">
                  <h1>  <?php get_a_post(9);
                     the_title(); ?>
                    
                      <p><?php get_a_post(9);
                      the_content(); ?></p>
                    </h1>
                </div>
                <div id="geo">
                     <h1> 
                        <?php get_a_post(11);
                        the_title(); ?>
                      
                   		
                      <p> <?php get_a_post(11);
                       the_content(); ?></p>
                      </h1>
                </div>
                <div id="mconnex">
                    <a href="#myModal" role="button"
                    data-toggle="modal" id="inscrez">S'inscrire a la newsletter</a>
                </div>
            </div>
	    </div><!--the_body-->
	</div><!--bodybox-->
<div id="sponsorbox" class="ym-wbox">

</div>
<!--main-->
<div id="mainwrapper" class="ym-wrapper">
	<div id="mainbox" class="ym-wbox ym-grid">
  		<div id="maingrid1" class="ym-g80 ym-gl linearize-level-1">
   			<div id="pourquoi" class="ym-g33 ym-gl">
            <!--deco -->
            <div class="ym-gbox">
              <a style="text-decoration: underline !important;" title="INSCRIPTION" href="http://diasporaforgrowth.com/sinscrire/">
			  <h1><div id="bl" style="visibility: visible"><?php get_a_post(14);
                  the_title();?>
              
			  <?php get_a_post(14);
				   the_content();
                //the_post_thumbnail(array(130,220));?></div></h1></a>
            </div>
            <!--deco2 -->
			      <!--sponsors etc-->
  		<!--<div id="maingrid3" class="ym-g20  ym-gl linearize-level-1">-->
			   <?php get_sidebar(3);?>
		  <!--</div>--><!--gbox-->
        </div>
        <div id="raisons" class="ym-g66 ym-gr linearize-level-1">
                     <div id="lev2" class="ym-gbox">

              <div id="ppart" class="mbottom">
                  <h3>
                  <?php get_a_post(109);
                  the_title();?>
                </h3>
                    <?php get_a_post(109);
                  the_content('En savoir plus...');?>
				  <div class="clearfix"></div>
              </div><!--ppaprt-->
           </div>
		   <div id="lev1" class="ym-gbox">
              <div id="dia" class="ym-g40 ym-gl">
                <div class="ym-gbox">
                  <h3><?php get_a_post(158);
                the_title();?></h3>
				  <div class="download">
				  <?php get_a_post(158);
				   the_content();
                //the_post_thumbnail(array(130,220));?>
				   </div>
                </div>
              </div>
              <div class="ym-g60 ym-gr">
              <div id="slidia">
                <?php
                 query_posts(array(
                      'cat'=> 4,
                    ));
                  while (have_posts()) : the_post();?>
                      <div id="now" class="ym-gbox">
                        <h3 id="snompdxr">
                            <?php the_title();?>
                        </h3>
                          <?php the_content('En savoir plus...');?>
                      </div><!--now-->
                  <?php endwhile; ?>
				  </div>
              </div><!--slidia-->
            </div><!--lev1-->


        </div>
   	 	</div><!--maingrid1-->
      <!--sponsors etc-->
  		<div id="maingrid2" class="ym-g20  ym-gr linearize-level-1">
			   <?php get_sidebar(2);?>
		  </div><!--gbox-->
    </div>
  </div><!--mainbox-->

<?php get_footer(); ?>
