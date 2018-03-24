<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package linc_edge_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404">

				<header class="entry-header">
					<h1 class="error-title entry-title"><span class="title-underline"><?php echo esc_html( 'Error 404' ); ?></span></h1>
				</header><!-- .error-header -->

				<div class="error-content">
					<p class="error-description"><?php echo esc_html( 'This page could not be found.' ); ?></p>
				</div><!-- .error-content -->

        <div class="error-button">
          <button><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Back to Home</a></button>
        <div class="error-button">

			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
