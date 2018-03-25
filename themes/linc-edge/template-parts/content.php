<?php
/**
 * Template part for displaying posts.
 *
 * @package linc_edge_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="image-container">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
			
		
		<?php endif; ?>
	



		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
            <span class="posted-on-container"><span><i class="far fa-clock"></i> </span><?php linc_edge_posted_on(); ?> / </span> 
            <span class="comments"><?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / </span>
            <span class="author"> By <span class="author-color"><?php the_author(); ?></span></span>
		</div><!-- .entry-meta -->
		</div>
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content1">
	<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<?php the_excerpt(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
