<?php
/**
 * Template Name: Info Page
 *
 * Template for displaying the info (contact) page.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>
<main class="site-main" id="main" role="main">
    <div class="wrapper" id="info-page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="<?php echo get_field('image'); ?>" alt="Brittany Fleming exploring the streets of California" />
                </div>
                <div class="col-md-6">
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                        the_content();
                        endwhile; ?>
                        <?php endif; ?>
                </div>
            </div>
            <div class="row" id="contact">

                <h2><?php echo get_field('heading'); ?></h2>

                <div class="col-md-6 column-contact">
                    <span class="contact-info" id="emailAddress">b_fleming@live.com</span>
                </div>
                <div class="col-md-6 column-contact">
                    <span class="contact-info" id="phoneNumber">613-612-1463</span>
                </div>

            </div>
        </div>
    </div>    
</main><!-- #main -->



<?php get_footer(); ?>
