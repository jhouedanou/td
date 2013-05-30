<div id="ym-gbox">
		<?php if (!(is_home())) { ?>
           <div id="facebook">
              <div class="ym-gbox">
                   <h3><?php get_a_post(246);
                      the_title(); ?> </h3>
                  <?php get_a_post(246);
                     the_content(); ?>
              </div>
            </div>
			<?php } else { echo ' '; } ?>
			
           <div id="partners">
             <div class="ym-gbox">
                 <h3><?php get_a_post(/*63*/178);
                      the_title(); ?> </h3>
                <?php get_a_post(178);
                      the_content(); ?>
              </div>
            </div>
			<div id="presse">
              <div class="ym-gbox">
                   <h3><?php get_a_post(182);
                      the_title(); ?> </h3>
                  <?php get_a_post(182);
                     the_content(); ?>
              </div>
            </div>
           <!-- <div id="sponsors">
              <div class="ym-gbox">
                   <h3><?php //get_a_post(70);
                     // the_title(); ?> </h3>
                  <?php //get_a_post(70);
                    // the_content(); ?>
              </div>
            </div>-->
          </div>
