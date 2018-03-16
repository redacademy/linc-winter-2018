<?php
/**
 * The main template file.
 * Template Name: Products
 *
 * @package linc_edge_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content' ); ?>

			<?php endwhile; ?>

      <?php the_posts_navigation(); ?>
      
        <?php $fields = CFS()->get( 'features' ); /* Declaring "features" forEach-loop */

          foreach ( $fields as $field ) { ?>
          
            <div class="features-content-container">
              <div class="features-title"><?php echo $field['title']; ?></div>
              <?php echo '<img src="' . $field['image'] . '"/>'; ?>
              <p class="features-text"><?php echo $field['description']; } ?></p>

        <!-- Ending "features" forEach-loop -->

        <?php $fields = CFS()->get( 'benefits' ); /* Declaring "benefits" forEach-loop */

          foreach ( $fields as $field ) { ?>

            <div class="benefits-content-container">
              <div class="benefits-title"><?php echo $field['title']; ?></div>
              <?php echo '<img src="' . $field['image'] . '"/>'; ?>
              <p class="benefits-text"><?php echo $field['description']; } ?></p>
          
        <!-- Ending "benefits" forEach-loop -->

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
