<?php
/**
 * Template Name: Home Page
 *
 * Template for displaying the home page.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper-fluid">
    
    <?php 

$images = get_field('hero_image_carousel');

if( $images ): ?>
    <div id="slider">
        <ul class="slides">
            <?php foreach( $images as $image ): ?>
                <li style="background-image: url('<?php echo $image['url']; ?>');" >
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>
    
</div><!-- Wrapper end -->

<div class="wrapper">

    <main class="site-main" id="main" role="main">

            

        </main><!-- #main -->

</div>

<?php get_footer(); ?>
