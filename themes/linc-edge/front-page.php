<?php
/**
 * 
 * The template for displaying the front page. 
 * 
 * @package linc_edge_Theme 
 */

get_header();?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			
		<div class="banner-container">
				 <div class="banner-text">
					 <?php echo CFS()->get( esc_html('banner_text') ); ?>
				</div>
				 <div class="download-container">
					<a href="<?php echo CFS()->get( esc_html('google_store_link') );?>"><?php echo '<img class="google-play-link" alt="Google Store "src="' . CFS()->get( esc_html('googleimage') ) . '"/>'?></a> 
					<a href="<?php echo CFS()->get( esc_html('apple_store_link') );?>"><?php echo '<img class="app-store-link" alt="Apple Store" src="' . CFS()->get( esc_html('appleimage') ). '"/>' ?></a>
	
				</div>
				<?php echo '<a class="linc-edge-button signup-front-desktop"
				href="' . esc_url(get_site_url()) . "/signup/" . '">';?>
					<p>Sign Up</p>
				</a>
		</div>
		
		<!-- Mobile: Sign Up button below banner -->
		<?php echo '<a class="linc-edge-button signup-front-mobile"
		href="' . esc_url(get_site_url()) . "/signup/" . '">';?>
			<p>Sign Up</p>
		</a>

		<div class="afterbanner-container">
				<?php $afterbannertexts = CFS()->get( esc_html('after_banner_text') );
				foreach ($afterbannertexts as $afterbannertext ) {?>
			<div class="theproblem-heading"><span class="title-underline">
				<?php echo esc_html($afterbannertext['heading']); ?>
			</span></div>
			<div class="theproblem-description">
				<?php echo esc_html($afterbannertext['heading1_description']); }?>
			</div>
		</div>

		<div class="benefits-header"><span class="title-underline">
			<?php echo CFS()->get( esc_html('benefits_header') ); ?>
		</span></div>
		<div class="benefits-container">
			<?php $benefitscontainers = CFS()->get(esc_html('benefits_container'));
			foreach ($benefitscontainers as $benefitcontainer ): ?>
			<div class="indiv-benefit">
				<?php echo '<img class="benefits-image" alt="Benefits Image" src="' . esc_html($benefitcontainer['benefits_image']) . '"/>';?>
				<p class="benefits-title"><?php echo esc_html($benefitcontainer['benefits_text']); ?></p>
			</div>
			<?php endforeach; ?>
		</div>

		<div class="howworks-header"><span class="title-underline">
			<?php echo CFS()->get( esc_html('howworks_header') ); ?>
		</span></div>
		<div class="howworks-container">
			<div class="carousel" >
			<?php $howworkscontainers = CFS()->get(esc_html('howworks_container'));
				foreach ($howworkscontainers as $howworkcontainer ): ?>
				<div class="carousel-cell">
					<div class="howworks-image">
						<?php echo '<img class="howworks-image" alt="How Works Image" src="' . esc_html($howworkcontainer['howworks_image']) . '"/>';?>
					</div>
					<p class="howworks-title"><?php echo esc_html($howworkcontainer['howworks_text']); ?></p>
				</div>
				<?php endforeach; ?>
			</div><!-- .carousel -->
			
			<div class="non-carousel">
			<?php $howworkscontainers = CFS()->get(esc_html('howworks_container_desktop'));
				foreach ($howworkscontainers as $howworkcontainer ): ?>
				<div class="hw-inner-container">
					<?php echo '<img class="howworks-image" alt="How Works Image" src="' . esc_html($howworkcontainer['howworks_image_desktop']) . '"/>';?>
					<p class="howworks-title"><?php echo esc_html($howworkcontainer['howworks_text_desktop']); ?></p>
				</div>
				<?php endforeach; ?>
			</div><!-- .non-carousel -->
		</div><!-- .howworks-container -->
	
		<div class="features-header"><span class="title-underline">
			<?php echo CFS()->get( esc_html('features_header') ); ?>
		</span></div>
		<div class="features-container">
			<?php $featurescontainers = CFS()->get(esc_html('features_container'));
			foreach ($featurescontainers as $featurecontainer ):?>
			<div class="indiv-feature">
				<?php echo '<img class="features-image" alt="Features Image" src="' . esc_html($featurecontainer['features_image']) . '"/>';?>
				<p class="features-title"><?php echo esc_html($featurecontainer['features_text']); ?>
			</div>
			<?php endforeach; ?>
		</div>
		
		<!-- Learn More button -->
		<?php echo '<a class="linc-edge-button"
		href="' . esc_url(get_site_url()) . "/products-features-benefits/" . '">';?>
			<p>Learn More</p>
		</a>

		<!-- testimonial -->
		<?php
			$args = array(
				'post_type' => 'testimonial',
				'posts_per_page' => 1,
				'orderby'=> 'rand'
						);
			$get_testimonial = get_posts( $args );
			?>
			<?php 
				foreach ( $get_testimonial as $post ): 
				setup_postdata($post);
			?>
				<div class="testimonial">
					<div class="testimonial-inner">
						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail(esc_html('large'), [esc_html('class') => esc_html('testimonial-headshot'), esc_html('alt') => esc_html('Testimonial Headshot')]); ?>
						<?php endif; ?>
						<div class="endorsement">
							<p><?php echo CFS()->get(esc_html('endorsers_testimonial')); ?></p>
							<h2><?php echo CFS()->get(esc_html('endorsers_name')); ?></h2>
						</div>
					</div>
				</div>
			<?php endforeach; wp_reset_postdata(); ?>

		<div class="join-beta-container">
			<h2 class="join-beta-title">
				<?php echo CFS()->get(esc_html('join_beta_title' )); ?>
			</h2>
			<?php echo '<a class="linc-edge-button"
			href="' . esc_url(get_site_url()) . "/signup/" . '">';?>
				<p>Sign Up</p>
			</a>
		</div>


		</main><!-- #main -->
	</div><!-- #primary -->
	<a id="back-to-top-btn" title="Go to top"><i class="fas fa-arrow-up"></i>TOP</a>

<?php get_footer(); ?>