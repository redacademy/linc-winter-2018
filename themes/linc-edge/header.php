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
        <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>


    <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <div id="page" class="hfeed site">

            <a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

            <header id="masthead" class="site-header">

                <nav class="menu-navigation">
                    
                    <button class="hamburger hamburger--squeeze" type="button">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>

                    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>


                </nav><!-- .menu-navigation -->

                    



            </header><!-- #masthead -->

            <div id="content" class="site-content">