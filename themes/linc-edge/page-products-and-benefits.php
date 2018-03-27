<?php
/**
 * The template for displaying products page
 * @package Linc-edge-theme
 */

 

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<!-- Mobile only -->
			<div class="button-container">
				<button class="button-feature" id="button-feature">Features</button>
				<button class="button-benefit" id="button-benefit">Benefits</button>
			</div>

			<!-- Features section, Carousel with Testimonial, Mobile & Desktop -->
			<div class="features-content-container" id="feature-page">
				<!-- Features Carousel -->
			 	<div class="features-carousel"> <!-- renamed from benefit-carousel, pretty sure unused -->
					<h1 class="entry-title"><span class="title-underline">
						<?php echo CFS()->get( esc_html('features_title') ); ?>
					</span></h1>
			 		<div class="carousel">
        			<?php $fields = CFS()->get( esc_html('features') ); /* Declaring "features" forEach-loop */
						foreach ( $fields as $field ):  ?>
						<div class="carousel-cell">
							<div class="features-inner-container">
							<span class="white-back"></span>
								<?php echo '<img src="' . esc_url($field['image']) . '"/>'; ?>
	
								<div class="feature-text-container">
									<div class="features-title">
										<span class="title-underline-short">
										<?php echo esc_html($field['title']); ?>
										</span>
									</div>
									<p class="features-text">
										<?php echo esc_html($field['description']);  ?>
									</p>
								</div>
							</div><!-- .features-inner-container -->	
						</div><!-- .carousel-cell -->
						<?php endforeach; ?>					
					</div><!-- .carousel -->
				</div><!-- .features-carousel -->

				<!-- Features Testimonial, Chad -->
				<?php
				$args = array(
					'post_type' => 'testimonial',
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
						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail(esc_html('large'), [esc_html('class') => esc_html('testimonial-headshot'), esc_html('alt') => esc_html('Testimonial Headshot')]); ?>
						<?php endif; ?>
						<div class="endorsement">
								<p><?php echo CFS() -> get (esc_html('endorsers_testimonial')); ?></p>
								<h2><?php echo CFS() -> get (esc_html('endorsers_name')); ?></h2>
						</div>
					</div>
				</div><!-- .testimonial -->
				<?php endforeach; wp_reset_postdata(); ?>
			</div> <!-- .features-content-container -->

			<!-- Desktop only Benefits section -->
			<a class="anchor-desktop" id="benefit"></a>
			<h1 class="entry-title entry-title-benefits" id="benefits"><span class="title-underline">
				<?php echo CFS()->get( esc_html('benefits_title') ); ?>
			</span></h1>
			<div class="benefits-content-container" id="benefit-desktop">
				<?php $fields = CFS()->get( esc_html('benefits') ); /* Declaring "benefits" forEach-loop */
					foreach ( $fields as $field ) : ?>
					<div class="benefit-text-container">
					<span class="benefit-back"></span>
							<?php echo '<img src="' . esc_url($field['image']) . '"/>'; ?>
							<p class="benefit-title-desktop"><span class="title-underline-short"><?php echo esc_html($field['title']);?></span></p>
							<p class="benefits-text"><?php echo esc_html($field['description']);?></p>
					</div>
					<?php endforeach; ?>
			</div><!-- .benefits-content-container -->
			<!-- Desktop only Benefits Testimonial, Daniel  -->
			<div class="testimonial-desktop">
				<?php
				$args = array(
					'post_type' => 'testimonial',
					'title' => 'Daniel Mendes'
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
									<p><?php echo CFS() -> get (esc_html('endorsers_testimonial')); ?></p>
									<h2><?php echo CFS() -> get (esc_html('endorsers_name')); ?></h2>
							</div>
					</div>
				</div><!-- .testimonial -->
				<?php endforeach; wp_reset_postdata(); ?>	
			</div><!-- .testimonial-desktop -->

			<!-- Mobile only Benefits section -->
			<div class="benefits-content-container" id="benefit-mobile">
				<div class="benefit-carousel"> <!-- pretty sure unused -->
					<h1 class="benefit-title">
						<?php echo CFS()->get( esc_html('benefits_title') ); ?>
					</h1>
					<div class="carousel-2">
					<?php 
					foreach($fields as $field ): ?>
						<div class="carousel-cell">
							<div class="benefits-image">
								<?php echo '<img src="' . esc_url($field['image']) . '"/>';?>
							</div>
							<div class="title-text-con">
								<div class="benefits-title"><?php echo esc_html($field['title']); ?></div>
								<p class="benefits-text"><?php echo esc_html($field['description']);?></p>
							</div>
						</div><!-- .carousel cell -->
					<?php endforeach; ?>
					</div><!-- .carousel2 -->

					<!-- Mobile only Benefits Testimonial, Daniel -->
					<?php
					$args = array(
						'post_type' => 'testimonial',
						'title' => 'Daniel Mendes'
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
									<p><?php echo CFS() -> get (esc_html('endorsers_testimonial')); ?></p>
									<h2><?php echo CFS() -> get (esc_html('endorsers_name')); ?></h2>
								</div>
							</div>
						</div><!-- .testimonial -->
    					<?php endforeach; wp_reset_postdata();?>
				</div><!-- .benefit-carousel -->
			</div><!-- .benefit content container -->


		<div class="experience-container">
			<h2 class="experience-title">
				<?php echo CFS()->get(esc_html('experience_title'));?>
			</h2>
			<?php echo ' <a class="linc-edge-button"
			href="' . esc_url(get_site_url()) . "/sign-up/" . '"> ';?>
				<p class="mobile">Sign Up</p>
				<p class="desktop">Sign Up for Beta</p>
			</a>
		</div> <!-- .experience-container -->
    <!-- Ending "benefits" forEach-loop -->

		</main><!-- #main -->
	</div><!-- #primary -->
	<a id="back-to-top-btn" title="Go to top"><i class="fas fa-arrow-up"></i>TOP</a>

<?php get_footer(); ?>


