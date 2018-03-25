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
        <div id="page" class="hfeed site" title="LincEdge">

            <a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

            <header id="masthead" class="site-header">

                <nav class="menu-navigation">
                    
                    <button class="hamburger hamburger--squeeze" type="button">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>

                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                        <img class="mobile-logo" alt="LincEdge Mobile" src="<?php echo get_stylesheet_directory_uri(); ?>/images/LincEdge-Logo-mobile.png">
                    </a>

                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                        <img class="desktop-logo" alt="LincEdge Desktop" src="<?php echo get_stylesheet_directory_uri(); ?>/images/LincEdge-Logo-Copyright.png">
                    </a>

       
   
                    <?php wp_nav_menu( array( esc_html('theme_location') => esc_html('primary'), esc_html('menu_id') => esc_html('primary-menu') ) ); ?>
                 
                </nav><!-- .menu-navigation -->

            </header><!-- #masthead -->

            <div id="content" class="site-content">