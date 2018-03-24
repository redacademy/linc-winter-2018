<?php
/**
 * Template part for displaying posts.
 *
 * @package linc_edge_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="image-container">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
        <?php endif; ?>
    </div>
        
	<div class="entry-content">
    <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
        <?php the_excerpt(); ?>
        
        		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
            <span class="posted-on"><?php linc_edge_posted_on(); ?> /</span> 
            <span class="comments"><?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / </span>
            <span class="author"><?php linc_edge_posted_by(); ?></span>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
