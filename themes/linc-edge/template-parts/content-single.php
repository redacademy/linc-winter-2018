<?php
/**
 * Template part for displaying single posts.
 *
 * @package linc_edge_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>

		<div class="entry-meta">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

			<?php linc_edge_posted_on(); ?> / <?php linc_edge_comment_count(); ?> / <?php linc_edge_posted_by(); ?>
		</div><!-- .entry-meta -->
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

	<footer class="entry-footer">
		<?php linc_edge_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
