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
						<?php echo CFS()->get( 'features_title' ); ?>
					</span></h1>
			 		<div class="carousel">
        			<?php $fields = CFS()->get( 'features' ); /* Declaring "features" forEach-loop */
						foreach ( $fields as $field ):  ?>
						<div class="carousel-cell">
							<div class="features-inner-container">
							<span class="white-back"></span>
								<?php echo '<img src="' . $field['image'] . '"/>'; ?>
	
								<div class="feature-text-container">
									<div class="features-title">
										<span class="title-underline-short">
										<?php echo $field['title']; ?>
										</span>
									</div>
									<p class="features-text">
										<?php echo $field['description'];  ?>
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
							<?php the_post_thumbnail('large', ['class' => 'testimonial-headshot', 'alt' => 'Testimonial Headshot']); ?>
						<?php endif; ?>
						<div class="endorsement">
								<p><?php echo CFS() -> get ('endorsers_testimonial'); ?></p>
								<h2><?php echo CFS() -> get ('endorsers_name'); ?></h2>
						</div>
					</div>
				</div><!-- .testimonial -->
				<?php endforeach; wp_reset_postdata(); ?>
			</div> <!-- .features-content-container -->

			<!-- Desktop only Benefits section -->
			<h1 class="entry-title entry-title-benefits"><span class="title-underline">
				<?php echo CFS()->get( 'benefits_title' ); ?>
			</span></h1>
			<div class="benefits-content-container" id="benefit-desktop">
				<?php $fields = CFS()->get( 'benefits' ); /* Declaring "benefits" forEach-loop */
					foreach ( $fields as $field ) : ?>
					<div class="benefit-text-container">
					<span class="benefit-back"></span>
							<?php echo '<img src="' . $field['image'] . '"/>'; ?>
							<p class="benefit-title-desktop"><span class="title-underline-short"><?php echo $field['title'];?></span></p>
							<p class="benefits-text"><?php echo $field['description'];?></p>
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
							<?php the_post_thumbnail('large', ['class' => 'testimonial-headshot', 'alt' => 'Testimonial Headshot']); ?>
						<?php endif; ?>
							<div class="endorsement">
									<p><?php echo CFS() -> get ('endorsers_testimonial'); ?></p>
									<h2><?php echo CFS() -> get ('endorsers_name'); ?></h2>
							</div>
					</div>
				</div><!-- .testimonial -->
				<?php endforeach; wp_reset_postdata(); ?>	
			</div><!-- .testimonial-desktop -->

			<!-- Mobile only Benefits section -->
			<div class="benefits-content-container" id="benefit-mobile">
				<div class="benefit-carousel">
					<h1 class="benefit-title">
						<?php echo CFS()->get( 'benefits_title' ); ?>
					</h1>
					<div class="carousel-2">
					<?php 
					foreach($fields as $field ): ?>
						<div class="carousel-cell">
							<div class="benefit-image">
								<?php echo '<img src="' . $field['image'] . '"/>';?>
							</div>
							<div class="title-text-con">
								<div class="benefits-title"><?php echo $field['title']; ?></div>
								<p class="benefits-text"><?php echo $field['description'];?></p>
							</div>
						</div><!-- carousel cell -->
					<?php endforeach; ?>
					</div><!-- carousel2 -->

					<!-- Testimonial for Benefits, mobile, Daniel -->
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
									<?php the_post_thumbnail('large', ['class' => 'testimonial-headshot', 'alt' => 'Testimonial Headshot']); ?>
								<?php endif; ?>
								<div class="endorsement">
									<p><?php echo CFS() -> get ('endorsers_testimonial'); ?></p>
									<h2><?php echo CFS() -> get ('endorsers_name'); ?></h2>
								</div>
							</div>
						</div><!-- testimonial -->
    					<?php endforeach; wp_reset_postdata();?>
				</div><!-- benefit-carousel -->
			</div><!-- benefit content container -->


		<div class="experience-container">
			<h2 class="experience-title">
				<?php echo CFS()->get('experience_title');?>
			</h2>
			<?php echo '<a href="' . get_site_url() . "/sign-up/" . '">';?>
				<button class="sign-up-product">
					<p>Sign Up</p>
				</button>
			</a>
			<?php echo '<a href="' . get_site_url() . "/sign-up/" . '">';?>
				<button class="sign-up-product-desktop">
					<p>Sign Up for Beta</p>
				</button>
			</a>
			<!-- <div class="signup-product"><?php echo '<a href="' . get_site_url() . "/sign-up/" . '">';?> Sign Up </a></div>
			<div class="signup-product-desktop"><?php echo '<a href="' . get_site_url() . "/sign-up/" . '">';?> sign up for beta</a></div> -->
		</div>
        <!-- Ending "benefits" forEach-loop -->

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>


