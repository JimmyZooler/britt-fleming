<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
    <style>
        @font-face {
            font-family: 'Nevis-Bold';
            src:url('<?php echo get_home_url(); ?>/wp-content/themes/understrap-child/fonts/Nevis-Bold.ttf.woff') format('woff'),
                url('<?php echo get_home_url(); ?>/wp-content/themes/understrap-child/fonts/Nevis-Bold.ttf.svg#Nevis-Bold') format('svg'),
                url('<?php echo get_home_url(); ?>/wp-content/themes/understrap-child/fonts/Nevis-Bold.ttf.eot'),
                url('<?php echo get_home_url(); ?>/wp-content/themes/understrap-child/fonts/Nevis-Bold.ttf.eot?#iefix') format('embedded-opentype'); 
            font-weight: normal;
            font-style: normal;
        }
    </style>
</head>
<body <?php body_class(); ?>>

<div class="hfeed site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar">

		<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content',
		'understrap' ); ?></a>

		<nav class="navbar navbar-toggleable-md">

		<?php if ( 'container' == $container ) : ?>
			<div class="container">
        <?php else : ?>
            <div class="container-fluid">
		<?php endif; ?>

				<!-- Your site title as branding in the menu -->
					<?php if ( ! has_custom_logo() ) { ?>

						<?php if ( is_front_page() && is_home() ) : ?>

							<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
							
						<?php else : ?>

							<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
						
						<?php endif; ?>
						
					
					<?php } else {
						the_custom_logo();
					} ?><!-- end custom logo -->
                
                <div id="menu-button">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </div>

                <div id="menu-modal">
                    <!-- The WordPress Menu goes here -->
                    <?php wp_nav_menu(
                        array(
                            'theme_location'  => 'primary',
                            'container_class' => '',
                            'container_id'    => 'modal-menu-wrap',
                            'menu_class'      => 'nav',
                            'fallback_cb'     => '',
                            'menu_id'         => 'main-menu',
                            'walker'          => new WP_Bootstrap_Navwalker(),
                        )
                    ); ?>
                </div>
                
                
			<?php if ( 'container' == $container ) : ?>
			</div><!-- .container -->
            <?php else : ?>
            </div>
			<?php endif; ?>

		</nav><!-- .site-navigation -->

	</div><!-- .wrapper-navbar end -->
