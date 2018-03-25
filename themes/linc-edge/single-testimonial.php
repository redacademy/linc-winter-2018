<?php
/**
 * The template for displaying a single testimonial.
 *
 * @package linc_edge_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

        <?php while ( have_posts() ) : the_post(); ?>
        
            <header class="entry-header">
                <h1 class="entry-title"><span class="title-underline">Testimonial</span></h1>
            </header><!-- .entry-header -->

            <div class="testimonial">
                <div class="testimonial-inner">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <?php the_post_thumbnail(esc_html('large'), [esc_html('class') => esc_html('testimonial-headshot'), esc_html('alt') => esc_html('Testimonial headshot')]); ?>
                    <?php endif; ?>
                    <div class="endorsement">
                        <p><?php echo CFS() -> get (esc_html('endorsers_testimonial')); ?></p>
                        <h2><?php echo CFS() -> get (esc_html('endorsers_name')); ?></h2>
                    </div>
                </div>
            </div>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>