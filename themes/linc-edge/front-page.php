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
		  <?php $bannercontainers = CFS()->get( 'banners' );
			foreach ( $bannercontainers as $bannercontainer ) { ?>
				 <div class="banner-text"> <?php echo $bannercontainer['banner_text'];?></div>
				 <div class="download-container">
				 <div class="download-pics"><?php echo '<img src="' . $bannercontainer['googleimage'] . '"/>';?></div>
				 <div class="download-pics2"><?php echo '<img src="' . $bannercontainer['appleimage']. '"/>'; }?></div>
				</div>
				 <div class="signup-front2"><?php echo '<a href="' . get_site_url() . "/sign-up/" . '">';?> Sign Up </a></div>
				</div>
		</div>
		
		
					<div class="signup-front"><?php echo '<a href="' . get_site_url() . "/sign-up/" . '">';?> Sign Up </a></div>

	<div class="afterbanner-container">
			<?php $afterbannertexts = CFS()->get( 'after_banner_text' );
			foreach ($afterbannertexts as $afterbannertext ) {?>
		  <div class="theproblem-heading"> <?php echo $afterbannertext['heading']; ?> </div>
		  <div class="theproblem-description"> <?php echo $afterbannertext['heading1_description']; }?> </div>
	</div>



	<div class="benefits-header">	<?php echo CFS()->get( 'benefits_header' ); ?></div>
	<div class="benefits-container">
			<?php $benefitscontainers = CFS()->get('benefits_container');
			foreach ($benefitscontainers as $benefitcontainer ): ?>
			<div>
			<div class="benefits-image"><?php echo '<img src="' . $benefitcontainer['benefits_image'] . '"/>';?></div>
			<p class="benefits-title"><?php echo $benefitcontainer['benefits_text'];?>
			</div>
				<?php endforeach; ?>
			</div>

	

	<div class="howworks-container">
			<div class="howworks-header">	<?php echo CFS()->get( 'howworks_header' ); ?></div>
				<div class="carousel"  data-flickity='{ "cellAlign": "left", "contain": true, "wrapAround": true }'>
			<?php $howworkscontainers = CFS()->get('howworks_container');
			foreach ($howworkscontainers as $howworkcontainer ): ?>
				<div class="carousel-cell">
					<div class="howworks-image">
						<?php echo '<img src="' . $howworkcontainer['howworks_image'] . '"/>';?>
					</div>
					<p class="howworks-title"><?php echo $howworkcontainer['howworks_text'];?></p>
				</div>
		<?php endforeach; ?>
			</div><!-- / carousel -->
			
			<div class="non-carousel">
			<?php $howworkscontainers = CFS()->get('howworks_container_desktop');
			foreach ($howworkscontainers as $howworkcontainer ): ?>
				<div class="hw-inner-container">
					<div class="howworks-image">
						<?php echo '<img src="' . $howworkcontainer['howworks_image_desktop'] . '"/>';?>
					</div>
					<p class="howworks-title"><?php echo $howworkcontainer['howworks_text_desktop'];?></p>
				</div>
		<?php endforeach; ?>
			</div><!-- / carousel -->
		</div>
	









		


	<div class="features-header">	<?php echo CFS()->get( 'features_header' ); ?></div>
	<div class="features-container">
			<?php $featurescontainers = CFS()->get('features_container');
			foreach ($featurescontainers as $featurecontainer ):?>
			<div>
			<div class="features-image"><?php echo '<img src="' . $featurecontainer['features_image'] . '"/>';?></div>
			<p class="features-title"><?php echo $featurecontainer['features_text']; ?>
	</div>
	<?php endforeach; ?>
		</div>
	<div class="learnmore-front"><?php echo '<a href="' . get_site_url() . "/products-features-benefits/" . '">';?> learn more </a></div>

<!-- testimonials -->
<?php
    $args = array(
        'post_type' => 'testimonial',
        'posts_per_page' => 1,
        'title' => 'Chad Myers'
                );
    $get_testimonial = get_posts( $args );
    ?>
    <?php 
        foreach ( $get_testimonial as $post ): 
        setup_postdata($post);
    ?>
        <div class="testimonial">
            <div class="testimonial-inner">
                <img src="<?php echo CFS() -> get ('image'); ?>">
                <div class="endorsement">
                    <p><?php echo CFS() -> get ('endorsers_testimonial'); ?></p>
                    <h2><?php echo CFS() -> get ('endorsers_name'); ?></h2>
                </div>
            </div>
        </div>
    <?php endforeach; ?>




		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
