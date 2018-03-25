<?php
/**
 * Template part for displaying single posts.
 *
 * @package linc_edge_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="article-container">
    <div class="image-container">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
        <?php endif; ?>
    </div>
        
    
	<div class="entry-content">
        <div class="content-container">
    <div class="category-title">
    <?php
    foreach((get_the_category()) as $category) { 
    echo '<a href="' . get_category_link($category->cat_ID) . '">' . $category->category_nicename . '</a> ';
    
    } 
    ?>
    </div>

    <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
            <span class="posted-on-container"><span><i class="far fa-clock"></i> </span><?php linc_edge_posted_on(); ?> / </span> 
            <span class="comments"><?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / </span>
            <span class="author"> By <span class="author-color"><?php the_author(); ?></span></span>
		</div><!-- .entry-meta -->
		<?php endif; ?>
    </div><!-- .entry-content -->
</div>

	<div class="entry-content1">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->


</article><!-- #post-## -->
