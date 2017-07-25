<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	</header><!-- .entry-header -->

	<div class="entry-content">

		<?php the_content(); ?>

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
		) );
		?>

	</div><!-- .entry-content -->
    
    <div class="wrapper-fluid" id="post-gallery">

        <div id="grid" data-columns>

            <?php 

            $images = get_field('post_gallery');

            if( $images ): ?>

                    <?php foreach( $images as $image ): ?>
                        <div class="gallery-image">
                            <a href="<?php echo $image['url']; ?>">
                                 <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
                            </a>
                        </div>
                    <?php endforeach; ?>

            <?php endif; ?>

        </div>

    </div><!-- Wrapper end -->

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
