<?php
/**
 * Template Name: Front Page
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>
		  <div class="banner-container">
		 	 <div class="banner-text"> <?php echo CFS()->get( 'banner_text' );?> </div>
			 	<div class="download-container">  
				 <div class="download-pics"><?php echo '<img src="' . CFS()->get( 'googleimage' ) . '"/>'; ?></div>  
				 <div class="download-pics"><?php echo '<img src="' . CFS()->get( 'appleimage' ) .'"/>'; ?></div>
				</div>
		  </div>
		  <div class="theproblem-heading"><?php echo CFS()->get( 'heading' ); ?> </div>
		  <div class="theproblem-description"><?php echo CFS()->get ('heading1_description'); ?></div>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
