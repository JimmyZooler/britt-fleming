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

            <?php 
            $args = array( 'post_type' => 'gallery', 'posts_per_page' => 10 );
            $the_query = new WP_Query( $args ); 
            if ( $the_query->have_posts() ) : ?>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <img src="<?php get_the_post_thumbnail_url(); ?>" alt="<?php get_post_meta( $thumbnail->ID, '_wp_attachment_image_alt', true ); ?>" />
                <h2><?php the_title(); ?></h2>
            <?php endif; ?>

        </main><!-- #main -->

</div>

<?php get_footer(); ?>
