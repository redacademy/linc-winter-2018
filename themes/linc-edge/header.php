<?php
/**
* The header for our theme.
*
* @package linc_edge_Theme
*/

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <div id="page" class="hfeed site">

            <a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

            <header id="masthead" class="site-header">

                    <div class="site-logo">

                        <img class="hamburger-menu" src="<?php echo get_stylesheet_directory_uri(); ?>/images/BurgerMenu-mobile.png">

                        <a href="<?php echo esc_url( home_url( ‘/’ ) ); ?>" rel="home">
                            <img class="mobile-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/LincEdge-Logo-mobile.png">
                        </a><!-- .mobile-logo -->
    
                        <a href="<?php echo esc_url( home_url( ‘/’ ) ); ?>" rel="home">
                            <img class="desktop-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/LincEdge-Logo.svg">
           				</a><!-- .desktop-logo -->
           
                    </div><!-- .site-logo -->

                    <nav id="site-navigation" class="main-navigation">
                        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
                    </nav><!-- #site-navigation -->

            </header><!-- #masthead -->

            <div id="content" class="site-content">