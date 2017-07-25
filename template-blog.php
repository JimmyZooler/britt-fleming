<?php
/**
 * Template Name: Blog Page
 *
 * Template for displaying the Blog page.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>


<div id="blog-masonry">

    <main class="site-main" id="main" role="main">

        <?php

            //* The Query
            $post_query = new WP_Query( array (
              'post_type' => 'post'
            ) );

            //* The Loop
            if ( $post_query->have_posts() ) { ?>

                  <div id="grid" data-columns> <?php

                while ( $post_query->have_posts() ): $post_query->the_post(); ?>


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
                        </div> 
                      
              <?php endwhile; ?>
                      
                  </div> 
        
        <?php }  
            

                //* Restore original Post Data
                wp_reset_postdata();  ?>

    </main><!-- #main -->

</div>

<?php get_footer(); ?>
