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
                <h1 class="entry-title"><span class="title-underline">Team Member</span></h1>
            </header><!-- .entry-header -->

            <div class="member-profile">
                <?php if ( has_post_thumbnail() ) : ?>
                    <?php the_post_thumbnail( 'medium', ['class' => 'headshot'] ); ?>
                <?php endif; ?>
                <div class="member-profile-inner">
                    <h2><?php the_title(); ?></h2>
                    <h3 class="title-underline-short"><?php echo CFS() -> get (esc_html('position')); ?></h3>
                    <div class="bio-excerpt-mobile">
                        <?php echo CFS() -> get (esc_html('biography')); ?>
                    </div>
                    <div class="bio-excerpt-desktop">
                        <?php echo CFS() -> get (esc_html('biography')); ?>
                    </div>
                </div>
            </div><!-- .member-profile -->

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>