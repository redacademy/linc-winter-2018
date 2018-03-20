<?php
/**
 * Template Name: About
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; ?>

      <div class="about-container">

        <?php $fields = CFS()->get( 'action_description' );
      
        foreach ( $fields as $field ): ?> 

          <div class="about-content-container">

            <div class="about-text-group">
              <p class="about-title"><?php echo $field['title'];?></p>
              <p class="about-description"><?php echo $field['description']; ?></p>
            </div><!-- .about-text-group -->

            <div class="about-image-group">
              <?php echo '<img src="' . $field['picture'] .'"/>';  ?>
            </div><!-- .about-image-group -->
              
          </div><!-- .about-content-container -->
          
        <?php endforeach; ?>

      </div><!-- .about-container -->

      <div class="customer-container">

        <?php $fields = CFS()->get( 'customer_logo' );

        foreach ( $fields as $field ): ?>

          <div class="customer-content-container">

            <div class="customer-image-group">
              <?php echo '<img src="' . $field['image'] . '"/>'; ?>
            </div><!-- .customer-image-group -->

          </div><!-- .customer-content-container -->

        <?php endforeach; ?>

      </div><!-- .customer-container -->

    </main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
