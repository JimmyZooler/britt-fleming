<?php
/**
 * Template Name: Slideshows Page
 *
 * Template for displaying the Slideshows page.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>
<main class="site-main" id="main" role="main">
    <div class="wrapper" id="slideshows-page-content" style="">
        <div class="container">
            
            <?php 

            if( have_rows('slideshows') ): ?>
                <div class="row slideshow">
                    <?php while ( have_rows('slideshows') ) : the_row(); ?>
                    <div class="col-md-9">
                        <?php echo the_sub_field('slideshow_embed'); ?>
                        <h2><?php echo the_sub_field('slideshow_title'); ?></h2>
                    </div>
                    <div class="col-md-3">
                        <p><?php echo the_sub_field('slideshow_description'); ?></p>
                    </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
            
            
        </div>
    </div>    
</main><!-- #main -->


<?php get_footer(); ?>
