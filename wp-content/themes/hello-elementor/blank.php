<?php
/**
 * Template Name: Blank
 */

get_header(do_shortcode('[elementor-template id="207"]'));
?>
<?php while ( have_posts() ) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; // end of the loop. ?>

<?php echo do_shortcode('[elementor-template id="972"]'); ?> <!-- Section 1 (Hero) -->
<?php echo do_shortcode('[elementor-template id="975"]'); ?> <!-- Section 2 (About Us) -->

<?php echo do_shortcode('[elementor-template id="978"]'); ?> <!-- Section 3 (CTA Slider Heading) -->

<section id="primary" class="content-area p-100-d"> <!-- Section 3 CTA SLIDER CODE (ACF PRO) -->
  <div class="container-fluid"> <!-- container -->
    <div class="cta-slider w-90"> <!-- Start of CTA Slider - Slick - Shortcode -->
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
              <i><img src="<?php the_sub_field('slider_item_button_icon'); ?>" width="30" height="27"></i>
              <p><?php the_sub_field('slider_item_button_text'); ?></p>
            </a>
          </div>
        <?php endwhile; // while( has_sub_field() ): ?>
        </div> <!-- End of Slick Items -->
      <?php endif; // if( get_field('slider_item') ): ?>  
    </div> <!-- End of CTA Slider - Slick - Shortcode -->
  </div> <!-- /container -->
</section><!-- #primary --> <!-- END //Section 3 CTA SLIDER CODE (ACF PRO) -->

<?php echo do_shortcode('[elementor-template id="981"]'); ?> <!-- Section 4 (Why Us) -->
<?php echo do_shortcode('[elementor-template id="984"]'); ?> <!-- Section 5 (Order) -->

<section class="menu-tabs__container">
  <?php echo do_shortcode('[elementor-template id="987"]'); ?> <!-- Section 6 (Menu Tabs) -->
  <section id="menu-tabs" class="menu-tabs content-area w-90 p-100-d"> <!-- Section 6 (Menu Tabs) CODE (ACF PRO) -->
      <?php if( have_rows('menu_tabs') ): ?>
        <?php while( have_rows('menu_tabs') ): the_row(); ?>
          <div class="row menu-tabs__position">
            <div class="col-3 menu-tabs__navigation">
              <div class="nav diets-nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <?php if( have_rows('menu_tab_nav_item_1st_active') ): ?> <!-- Check if 1st Active Exists -->
                  <?php while( have_rows('menu_tab_nav_item_1st_active') ): the_row(); ?> <!-- While 1st Active Exists -->
                    <a class="nav-link active" id="<?php the_sub_field('menu_tab_nav_item_tab_label_1st'); ?>" data-toggle="pill" href="#<?php the_sub_field('menu_tab_nav_item_id_1st'); ?>" role="tab" aria-controls="<?php the_sub_field('menu_tab_nav_item_id_1st'); ?>" aria-selected="true"><?php the_sub_field('menu_tab_nav_item_name_1st'); ?></a>
                  <?php endwhile; ?> <!-- End While 1st Active Exists -->
                <?php endif; ?> <!-- End Check if 1st Active Exists -->
                <?php if( have_rows('menu_tab_nav_item') ): ?> <!-- Check if Nav Item Exists -->
                  <?php while( have_rows('menu_tab_nav_item') ): the_row(); ?> <!-- While Nav Item Exists -->
                    <a class="nav-link" id="<?php the_sub_field('menu_tab_nav_item_tab_label'); ?>" data-toggle="pill" href="#<?php the_sub_field('menu_tab_nav_item_id'); ?>" role="tab" aria-controls="<?php the_sub_field('menu_tab_nav_item_id'); ?>" aria-selected="false"><?php the_sub_field('menu_tab_nav_item_name'); ?></a>
                  <?php endwhile; ?> <!-- End While Nav Item Exists -->
                <?php endif; ?> <!-- End Check if Nav Item Exists -->
              </div>
            </div>
            <div class="col-9 menu-tabs__content">
              <div class="tab-content" id="v-pills-tabContent">
                <?php if( have_rows('menu_tab_item_content_1st_active') ): ?> <!-- Check if 1st Active Exists -->
                  <?php while( have_rows('menu_tab_item_content_1st_active') ): the_row(); ?> <!-- While 1st Active Exists -->
                    <div class="tab-pane fade show active" id="<?php the_sub_field('menu_tab_item_content_tab_id_1st'); ?>" role="tabpanel" aria-labelledby="<?php the_sub_field('menu_tab_item_content_tab_label_1st'); ?>">
                      <?php if( have_rows('menu_tab_item_content_items_1st') ): ?>
                        <?php while( have_rows('menu_tab_item_content_items_1st') ): the_row(); ?>
                          <div class="menu-tabs__content-panel">
                            <?php if( have_rows('menu_tab_item_content_1_1st') ): ?>
                              <?php while( have_rows('menu_tab_item_content_1_1st') ): the_row(); ?>
                                <div class="menu-tabs__content-panel-tab">
                                  <h5 class="menu-tabs__content-panel-tab-heading"><?php the_sub_field('menu_tab_item_content_header_1_1st'); ?></h5>
                                  <p class="menu-tabs__content-panel-tab-content"><?php the_sub_field('menu_tab_item_content_content_1_1st'); ?></p>
                                </div>
                              <?php endwhile; ?>
                            <?php endif; ?>
                          </div>
                          <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                  <?php endwhile; ?> <!-- End While 1st Active Exists -->
                <?php endif; ?> <!-- End Check if 1st Active Exists -->
                <?php if( have_rows('menu_tab_item_content') ): ?> <!-- Check if  Exists -->
                  <?php while( have_rows('menu_tab_item_content') ): the_row(); ?> <!-- While Exists -->
                    <div class="tab-pane fade" id="<?php the_sub_field('menu_tab_item_content_tab_id'); ?>" role="tabpanel" aria-labelledby="<?php the_sub_field('menu_tab_item_content_tab_label'); ?>">
                      <?php if( have_rows('menu_tab_item_content_items') ): ?>
                        <?php while( have_rows('menu_tab_item_content_items') ): the_row(); ?>
                          <div class="menu-tabs__content-panel">
                            <?php if( have_rows('menu_tab_item_content') ): ?>
                              <?php while( have_rows('menu_tab_item_content') ): the_row(); ?>
                                <div class="menu-tabs__content-panel-tab">
                                  <h5 class="menu-tabs__content-panel-tab-heading"><?php the_sub_field('menu_tab_item_content_header'); ?></h5>
                                  <p class="menu-tabs__content-panel-tab-content"><?php the_sub_field('menu_tab_item_content_content'); ?></p>
                                </div>
                              <?php endwhile; ?>
                            <?php endif; ?>
                          </div>
                        <?php endwhile; ?>
                      <?php endif; ?>
                    </div>
                  <?php endwhile; ?> <!-- End While Exists -->
                <?php endif; ?> <!-- End Check If Exists -->
              </div>
            </div>
          </div>
        <?php endwhile; // while( has('menu-tabs') ): ?>
      <?php endif; // if( get_field('menu_tabs') ): ?> 
  </section> <!-- END //Section 6 (Menu Tabs) CODE (ACF PRO) -->
</section>

<section class="map-container-bcg" style="background: url('<?php the_field('map_background_img'); ?>');">
  <section id="map" class="map-container content-area w-90 p-100"> <!-- Section 7 (MAP) CODE (ACF PRO) -->
    <div class="row">
      <div class="col-lg-6 col-md-12 map-ship-area__content"> <!-- Ship Area Content -->
        <div class="map-ship-area__content-headings">
          <p class="toptag"><?php the_field('map_toptag'); ?></p>
          <h1><?php the_field('map_header'); ?></h1>
        </div>
        <?php if( have_rows('map_table') ): ?> <!-- Check if Group Exists -->
          <?php while( have_rows('map_table') ): the_row(); ?> <!-- Render Map Table -->
            <div class="map-ship-area__content-table"> <!-- Map Table -->
              <?php if( have_rows('map_table_column') ): ?> <!-- Check if Column Exists -->
                <?php while( have_rows('map_table_column') ): the_row(); ?> <!-- Render Column -->
                  <div class="map-ship-area__content-table-column">
                    <?php if( have_rows('map_table_row') ): ?> <!-- Check if Row Exists -->
                      <?php while( have_rows('map_table_row') ): the_row(); ?> <!-- Render Row -->
                        <div class="map-ship-area__content-table-row">
                          <p class="row-label"><?php the_sub_field('map_table_row_item'); ?></p>
                        </div>
                      <?php endwhile; ?> <!-- //Render Row -->
                    <?php endif; ?> <!-- //Check if Row Exists -->
                  </div>
                <?php endwhile; ?> <!-- //Render Column -->
              <?php endif; ?> <!-- //Check if Column Exists -->
            </div> <!-- //Close Map Table -->
          <?php endwhile; ?> <!-- Stop Render Map Table -->
        <?php endif; ?> <!-- //Check if Group Exists -->
        <div class="map-ship-area__content-cta">
          <h4><?php the_field('map_undertag'); ?></h4>
          <a class="my-btn" href="<?php the_field('map_button_1_href'); ?>" target="_blank"> 
            <p><?php the_field('map_button_1_text'); ?></p>
          </a>
        </div> 
      </div> <!-- //Close Ship Area Content -->
      <div class="col-lg-6 col-md-12 map__content"> <!-- Map Content -->
        <div class="map-svg">
          <?php if( have_rows('map_points') ): ?> <!-- Check if Map Points Exists -->
            <?php while( have_rows('map_points') ): the_row(); ?> <!-- Render Map Points -->
              <div class="map-pointers">
                <?php if( have_rows('point') ): ?> <!-- Check if Point Exists -->
                  <?php while( have_rows('point') ): the_row(); ?> <!-- Render Point -->
                    <div class="map-point">
                      <span class="map-point-marker hover-invisible" style="margin-top:<?php the_sub_field('point_position_y_up'); ?>; margin-right:<?php the_sub_field('point_position_x_right'); ?>; margin-bottom:<?php the_sub_field('point_position_y_down'); ?>; margin-left:<?php the_sub_field('point_position_x_left'); ?>;">
                        <p class="map-point-marker-content"><?php the_sub_field('point_content_on_hover'); ?></p>
                      </span>
                    </div>
                  <?php endwhile; ?> <!-- Stop Render Points -->
                <?php endif; ?> <!-- //Check if Point Exists -->
              </div>
              <img src="<?php the_field('map_svg'); ?>" width="630" height="940"> <!-- map svg -->
            <?php endwhile; ?> <!-- Stop Render Map Points -->
          <?php endif; ?> <!-- //Check if Map Points Exists -->
        </div>
      </div> <!-- //Close Map Content -->
    </div>
  </section> <!-- END //Section 7 (MAP) CODE (ACF PRO) -->
</section>

<?php echo do_shortcode('[elementor-template id="993"]'); ?> <!-- Section 8 (Instagram Feed) -->

<?php
get_footer(do_shortcode('[elementor-template id="217"]'));
