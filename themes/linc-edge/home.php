<?php

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

       

       <header class="entry-header">

                <?php  esc_html(single_post_title('<h1 class="entry-title"><span class="title-underline">', '</span></h1>' )); ?>

        </header><!-- .entry-header -->
        
<div class="article-master-container">

		<?php if ( have_posts() ) : ?>
			<?php if ( is_home() && ! is_front_page() ) : ?>

			<?php endif; ?>
			<?php /* Start the Loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>
 
                <?php get_template_part( esc_html('template-parts/content-blog') ); ?>
 
		
			<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( esc_html('template-parts/content-blog'), esc_html('none') ); ?>
		<?php endif; ?>
</div><!-- .article-master-container -->
		<?php echo '<a class="linc-edge-button"
		href="' . esc_url(get_site_url()) . '">';?>
			<p>Go Back Home</p>
		</a>
		

		</main><!-- #main -->
    </div><!-- #primary -->
	<a href="#page" id="back-to-top-btn" title="Go to top"><i class="fas fa-arrow-up"></i></a>


<?php get_footer(); ?>
