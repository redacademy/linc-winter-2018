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
			<div class="button-container">
			<button class="button-feature" id="button-feature">Features</button>
			<button class="button-benefit" id="button-benefit">Benefits</button>
			</div>



       <div class="features-content-container" id="feature-page">
			 <div class="benefit-carousel">
			 <div class="feature-title"><?php echo CFS()->get( 'features_title' ); ?> </div>
			 <div class="carousel"  data-flickity='{ "cellAlign": "left", "contain": true, "wrapAround": true }'>
        <?php $fields = CFS()->get( 'features' ); /* Declaring "features" forEach-loop */
					foreach ( $fields as $field ):  ?>
									<div class="carousel-cell">
							<div class="features-inner-container">
							<?php echo '<img src="' . $field['image'] . '"/>'; ?>
              <div class="features-title"><?php echo $field['title']; ?></div>
							<p class="features-text"><?php echo $field['description'];  ?>
							</div>	
							</div>
							<?php endforeach; ?>
							</div>	
							</div>
							</div>
							</p>


        <!-- Ending "features" forEach-loop -->

			
				<div class="benefits-content-container" id="benefit-desktop">
				<div class="benefit-title"><?php echo CFS()->get( 'benefits_title' ); ?></div>
        <?php $fields = CFS()->get( 'benefits' ); /* Declaring "benefits" forEach-loop */
          foreach ( $fields as $field ) : ?>
           
              <?php echo '<img src="' . $field['image'] . '"/>'; ?>
							<p class="benefits-text"><?php echo $field['description'];?></p>
							<?php endforeach; ?>
							</div>

				<div class="benefits-content-container" id="benefit-mobile">
					<div class="benefit-carousel">
					<div class="benefit-title"><?php echo CFS()->get( 'benefits_title' ); ?></div>
				<div class="carousel"  data-flickity='{ "cellAlign": "left", "contain": true, "wrapAround": true }'>
			<?php $fields = CFS()->get('benefits');
			foreach ($fields as $field ): ?>
				<div class="carousel-cell">
					<div class="benefit-image">
						<?php echo '<img src="' . $field['image'] . '"/>';?>
					</div>
					<div class="title-text-con">
					<div class="benefits-title"><?php echo $field['title']; ?></div>
					<p class="benefits-text"><?php echo $field['description'];?></p>
					</div>
				</div>
		<?php endforeach; ?>
			</div><!-- / carousel -->
</div>


				
          
        <!-- Ending "benefits" forEach-loop -->

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
