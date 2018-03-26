<?php
/**
 * The template for displaying about page
 * @package Linc-edge-theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

        <header class="entry-header">
          <?php esc_html(the_title( '<h1 class="entry-title"><span class="title-underline">', '</span></h1>' )); ?>
        </header><!-- .entry-header -->

        <div class="entry-content">
          <?php the_content(); ?>
          <?php
            wp_link_pages( array(
              'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
              'after'  => '</div>',
            ) );
          ?>
        </div><!-- .entry-content -->

			<?php endwhile; ?>

      <div class="about-container">

        <?php $fields = CFS()->get( esc_html('action_description' )); foreach ( $fields as $field ): ?> 

          <div class="about-content-container">

            <div class="about-text-group">
              <p class="about-title"><span class="title-underline-short"><?php echo esc_html($field['title']);?></span></p>
              <p class="about-description"><?php echo esc_html($field['description']); ?></p>
            </div><!-- .about-text-group -->

            <div class="about-image-group">
              <?php echo '<img src="' . esc_url($field['picture']) .'"/>';  ?>
            </div><!-- .about-image-group -->
              
          </div><!-- .about-content-container -->
          
        <?php endforeach; ?>

      </div><!-- .about-container -->

	    <div class="customer-container">

			  <div class="customer-header"><span class="title-underline"><?php echo CFS()->get( esc_html('customer_header') ); ?></span></div>
        
        <div class="carousel">
			    <?php $customers = CFS()->get(esc_html('customer_logo')); foreach ($customers as $customer ): ?>
          
				    <div class="customer-content-container">
					    <div class="customer-image-group"> 
                <?php echo '<img src="' . esc_url($customer['image']) . '"/>'; ?>
					    </div><!-- .customer-image-group -->
            </div><!-- .customer-content-container -->
            
		      <?php endforeach; ?>
        </div><!-- .carousel -->
      </div><!-- .customer-container -->

    </main><!-- #main -->
	</div><!-- #primary -->
	<a id="back-to-top-btn" title="Go to top"><i class="fas fa-arrow-up"></i>TOP</a>

<?php get_footer(); ?>
