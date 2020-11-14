<?php
/**
 * Template Name: Blank
 */

get_header(do_shortcode('[elementor-template id="207"]'));
?>

<?php echo do_shortcode('[elementor-template id="972"]'); ?>

    <section id="primary" class="content-area">
        <div id="main">
                <div class="container-fluid"> <!-- container -->
                  <?php while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>

                      <div class="cta-slider p-150"> <!-- Start of CTA Slider - Slick - Shortcode -->
                      <!-- <h3><?php //the_field('slider_item_name'); ?></h3> -->

                      <?php if( have_rows('slider_item') ): ?>
                          <div class="cta-slider__responsive"> <!-- Slick Items Start -->

                          <?php // loop through rows (parent repeater)
                          while( have_rows('slider_item') ): the_row(); ?>
                          
                            <div class="cta-slider__item">
                              <img class="cta-slider__item-highlight--shadow" src="<?php the_sub_field('slider_item_highlight'); ?>" width="300" height="375">
                              <img class="cta-slider__item-background" src="<?php the_sub_field('slider_item_content_background'); ?>" width="412" height="412">
                              <h2 class="cta-slider__heading"><?php the_sub_field('slider_item_name'); ?></h2>
                              <p class="cta-slider__desc"><?php the_sub_field('slider_item_description'); ?></p>
                              <h6 class="cta-slider__calories-header"><?php the_sub_field('slider_item_calories_header'); ?></h6>
                              <?php 
							                // check for rows (sub repeater)
                              if( have_rows('slider_item_avaliable_calories') ): ?>
                                <div class="cta-slider__item-calories"> <!-- Avaliable Calories in CTA Slider -->

                                  <?php 
                                  // loop through rows (sub repeater - calories)
                                  while( have_rows('slider_item_avaliable_calories') ): the_row(); ?>

                                    <span class="cta-slider__item-calories__item">
                                      <?php the_sub_field('av_calories_item'); ?>
                                    </span>

                                  <?php endwhile; ?>

                                </div> <!-- /cta-slider__item-calories -->
                              <?php endif; //if( get_sub_field('slider_item_avaliable_calories') ): ?>
                              <a class="cta-slider__button" href="<?php the_sub_field('slider_item_button_link'); ?>" target="_blank"> 
                                <i>
                                  <img src="<?php the_sub_field('slider_item_button_icon'); ?>" width="30" height="27">
                                </i>
                                <p>
                                  <?php the_sub_field('slider_item_button_text'); ?>
                                </p>
                              </a>
                            </div>

                          <?php endwhile; // while( has_sub_field('to-do_lists') ): ?>
                          
                          </div> <!-- End of Slick Items -->
                      <?php endif; // if( get_field('to-do_lists') ): ?>  
                        </div> <!-- End of CTA Slider - Slick - Shortcode -->
                  <?php endwhile; // end of the loop. ?>
                </div> <!-- /container -->
        </div><!-- #main -->


    </section><!-- #primary -->

<?php
get_footer(do_shortcode('[elementor-template id="217"]'));
