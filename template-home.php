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

<div class="wrapper" id="home-page-masonry">

    <main class="site-main" id="main" role="main">

            <?php

            //* The Query
            $exec_query = new WP_Query( array (
              'post_type' => 'gallery'
            ) );

            //* The Loop
            if ( $exec_query->have_posts() ) { ?>

                  <div id="grid" data-columns> <?php

                while ( $exec_query->have_posts() ): $exec_query->the_post(); ?>

                    <div>
                        <a href="<?php the_permalink(); ?>">
                          <img src="<?php 
                
                            $thumb_id = get_post_thumbnail_id();
                            $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
                            echo $thumb_url_array[0]; 
                                    
                                    ?>" />
                        </a>
                        <a href="<?php the_permalink(); ?>">
                          <h2><?php the_title(); ?></h2>
                        </a>
                    </div> <?php

                endwhile; ?>

                  </div> <?php

                //* Restore original Post Data
                wp_reset_postdata();

            } ?>

        </main><!-- #main -->

</div>

<?php get_footer(); ?>
