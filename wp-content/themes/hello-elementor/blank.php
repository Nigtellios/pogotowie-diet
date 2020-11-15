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

<section id="primary" class="content-area"> <!-- Section 3 CTA SLIDER CODE (ACF PRO) -->
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
<?php echo do_shortcode('[elementor-template id="987"]'); ?> <!-- Section 6 (Menu Tabs) -->

<section id="menu-tabs" class="menu-tabs content-area w-90"> <!-- Section 6 (Menu Tabs) CODE (ACF PRO) -->
  <?php if( have_rows('menu_tabs') ): ?>
    <?php while( have_rows('menu_tabs') ): the_row(); ?>
      <div class="row menu-tabs__position">
        <div class="col-3 menu-tabs__navigation">
          <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
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

<section id="map" class="map-container content-area w-90"> <!-- Section 7 (MAP) CODE (ACF PRO) -->
  <div class="row">
    <div class="col-6 map-ship-area__content"> 
      <div class="map-ship-area__content-headings">
        <p class="toptag">GDZIE DOWOZIMY?</p>
        <h1>OBSZAR DOSTAW</h1>
      </div> 

      <div class="map-ship-area__content-table">
        <div class="map-ship-area__content-table-column">

          <div class="map-ship-area__content-table-row">
            <p class="row-label">Białystok</p>
          </div>

        </div>
      </div>

      <div class="map-ship-area__content-cta">
        <p class="toptag">GDZIE DOWOZIMY?</p>
        <h1>OBSZAR DOSTAW</h1>
      </div> 

    </div>

    <div class="col-6 map__content">
      <div class="map-svg">
        <div class="map-pointers">

        </div>
      </div>
    </div>
  </div>
</section> <!-- END //Section 7 (MAP) CODE (ACF PRO) -->

<?php echo do_shortcode('[elementor-template id="993"]'); ?> <!-- Section 8 (Instagram Feed) -->

<?php
get_footer(do_shortcode('[elementor-template id="217"]'));
