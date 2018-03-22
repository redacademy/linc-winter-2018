<?php
/**
 * Template Name: About
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

        <header class="entry-header">
          <?php the_title( '<h1 class="entry-title"><span class="title-underline">', '</span></h1>' ); ?>
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

        <?php $fields = CFS()->get( 'action_description' ); foreach ( $fields as $field ): ?> 

          <div class="about-content-container">

            <div class="about-text-group">
              <p class="about-title"><span class="title-underline-short"><?php echo $field['title'];?></span></p>
              <p class="about-description"><?php echo $field['description']; ?></p>
            </div><!-- .about-text-group -->

            <div class="about-image-group">
              <?php echo '<img src="' . $field['picture'] .'"/>';  ?>
            </div><!-- .about-image-group -->
              
          </div><!-- .about-content-container -->
          
        <?php endforeach; ?>

      </div><!-- .about-container -->

	    <div class="customer-container">

			  <div class="customer-header"><?php echo CFS()->get( 'customer_header' ); ?></div>
        
        <div class="carousel" data-flickity='{ "cellAlign": "left", "contain": true, "wrapAround": true }'>
			    <?php $customers = CFS()->get('customer_logo'); foreach ($customers as $customer ): ?>
          
				    <div class="customer-content-container">
					    <div class="customer-image-group"> 
                <?php echo '<img src="' . $customer['image'] . '"/>'; ?>
					    </div><!-- .customer-image-group -->
            </div><!-- .customer-content-container -->
            
		      <?php endforeach; ?>
        </div><!-- .carousel -->
      </div><!-- .customer-container -->

    </main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
