<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

get_header();
$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>

<div class="wrapper-fluid" id="single-wrapper">

	<div id="grid" data-columns>
    
        <?php 

        $images = get_field('section_gallery');

        if( $images ): ?>
            
                <?php foreach( $images as $image ): ?>
                    <div>
                        <a href="<?php echo $image['url']; ?>">
                             <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
                        </a>
                    </div>
                <?php endforeach; ?>
        
        <?php endif; ?>

    </div>
    
</div><!-- Wrapper end -->

<?php get_footer(); ?>
