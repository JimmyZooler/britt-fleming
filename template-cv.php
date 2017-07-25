<?php
/**
 * Template Name: CV Page
 *
 * Template for displaying the CV page.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>
<main class="site-main" id="main" role="main">
    <div class="wrapper" id="cv-page-content" style="">
        <div class="container">
            <div id="cv-top-section">
                <?php echo the_field('cv_top_section'); ?>
            </div>
            
            <div id="client-list">
                <h2>Clients</h2>
                <div class="row">

                <?php 

                if( have_rows('clients') ): ?>
                    <?php while ( have_rows('clients') ) : the_row(); ?>

                            <div class="col-md-3 client" style="background-image: url('<?php echo the_sub_field('client_logo'); ?>');">
<!--
                                <div class="client-overlay">
                                    <h3><?php echo the_sub_field('client_name'); ?></h3>
                                </div>
-->
                            </div>

                    <?php endwhile; ?>
                <?php endif; ?>
                </div>
            </div>    
            
        </div>
    </div>    
</main><!-- #main -->


<?php get_footer(); ?>