<?php
/**
 * Template Name: Front Page
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<div class="banner-container">
		  <?php $bannercontainers = CFS()->get( 'banners' );
			foreach ( $bannercontainers as $bannercontainer ) { ?>
				 <div class="banner-text">
					 <?php echo $bannercontainer['banner_text'];?>
				</div>
				 <div class="download-container">
				 	<?php echo '<img class="google-play-link" src="' . $bannercontainer['googleimage'] . '"/>';?>
				 	<?php echo '<img class="app-store-link" src="' . $bannercontainer['appleimage']. '"/>'; }?>
				</div>
				 <div class="signup-front-desktop">
					 <?php echo '<a href="' . get_site_url() . "/sign-up/" . '">';?> Sign Up </a>
				</div>
		</div>
		
		<div class="signup-front-mobile">
			<?php echo '<a href="' . get_site_url() . "/sign-up/" . '">';?> Sign Up </a>
		</div>

		<div class="afterbanner-container">
				<?php $afterbannertexts = CFS()->get( 'after_banner_text' );
				foreach ($afterbannertexts as $afterbannertext ) {?>
			<div class="theproblem-heading"><span class="title-underline">
				<?php echo $afterbannertext['heading']; ?>
			</span></div>
			<div class="theproblem-description">
				<?php echo $afterbannertext['heading1_description']; }?>
			</div>
		</div>



		<div class="benefits-header"><span class="title-underline">
			<?php echo CFS()->get( 'benefits_header' ); ?>
		</span></div>
		<div class="benefits-container">
			<?php $benefitscontainers = CFS()->get('benefits_container');
			foreach ($benefitscontainers as $benefitcontainer ): ?>
			<div class="indiv-benefit">
				<?php echo '<img class="benefits-image" src="' . $benefitcontainer['benefits_image'] . '"/>';?>
				<p class="benefits-title"><?php echo $benefitcontainer['benefits_text'];?></p>
			</div>
			<?php endforeach; ?>
		</div>

	

		<div class="howworks-header"><span class="title-underline">
			<?php echo CFS()->get( 'howworks_header' ); ?>
		</span></div>
		<div class="howworks-container">
			<div class="carousel"  data-flickity='{ "wrapAround": true }'>
			<?php $howworkscontainers = CFS()->get('howworks_container');
				foreach ($howworkscontainers as $howworkcontainer ): ?>
				<div class="carousel-cell">
					<div class="howworks-image">
						<?php echo '<img class="howworks-image" src="' . $howworkcontainer['howworks_image'] . '"/>';?>
					</div>
					<p class="howworks-title"><?php echo $howworkcontainer['howworks_text'];?></p>
				</div>
				<?php endforeach; ?>
			</div><!-- .carousel -->
			
			<div class="non-carousel">
			<?php $howworkscontainers = CFS()->get('howworks_container_desktop');
				foreach ($howworkscontainers as $howworkcontainer ): ?>
				<div class="hw-inner-container">
					<?php echo '<img class="howworks-image" src="' . $howworkcontainer['howworks_image_desktop'] . '"/>';?>
					<p class="howworks-title"><?php echo $howworkcontainer['howworks_text_desktop'];?></p>
				</div>
				<?php endforeach; ?>
			</div><!-- .non-carousel -->
		</div><!-- .howworks-container -->
	

		<div class="features-header"><span class="title-underline">
			<?php echo CFS()->get( 'features_header' ); ?>
		</span></div>
		<div class="features-container">
			<?php $featurescontainers = CFS()->get('features_container');
			foreach ($featurescontainers as $featurecontainer ):?>
			<div class="indiv-feature">
				<?php echo '<img class="features-image" src="' . $featurecontainer['features_image'] . '"/>';?>
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
    <?php endforeach; wp_reset_postdata(); ?>




		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
