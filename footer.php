<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_html( $container ); ?>">

		<footer class="site-footer" id="colophon">

            <div class="row">

                <div class="col-md-6">

                    <?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'menu_class' => 'navbar-nav' ) ); ?>

                </div>

                <div class="col-md-6 site-info">

                    <p>© 2017 Brittany Fleming. Made with ♥ by <a href="http://getgeometric.com">Geometric.</a></p>

                </div><!-- .site-info -->

            </div><!-- row end -->

		
        </footer><!-- #colophon -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>

