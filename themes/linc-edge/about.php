<?php
/**
 * Template Name: About
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

      <?php $fields = CFS()->get( 'action_description' );
      
        foreach ( $fields as $field ) { ?> 
        
				</div></div><div class="about-content-container">
				<div class="about-title">
          <?php echo $field['title'];?></div>
    		<div class="about-description">
          <?php echo $field['description']; ?>
          <?php echo '<img src="' . $field['picture'] .'"/>'; } ?>

    </main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
