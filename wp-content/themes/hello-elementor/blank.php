<?php
/**
 * Template Name: Blank
 */

get_header();
?>
    <section id="primary" class="content-area">
        <div id="main" class="site-main" role="main">
            <div class="container">
                <?php
                while ( have_posts() ) : the_post();
                    get_template_part( 'template-parts/archive', 'notitle' );
                endwhile; // End of the loop.
                ?>
            </div>
        </div><!-- #main -->
    </section><!-- #primary -->

<?php
get_footer();
