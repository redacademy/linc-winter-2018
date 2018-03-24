<?php

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

       

       <header class="entry-header">

                <?php single_post_title( '<h1 class="entry-title"><span class="title-underline">', '</span></h1>' ); ?>

        </header><!-- .entry-header -->
        
<div class="article-master-container">

		<?php if ( have_posts() ) : ?>
			<?php if ( is_home() && ! is_front_page() ) : ?>

			<?php endif; ?>
			<?php /* Start the Loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>
 
                <?php get_template_part( 'template-parts/content-blog' ); ?>
 
		
			<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'template-parts/content-blog', 'none' ); ?>
		<?php endif; ?>
		</main><!-- #main -->
    </div><!-- #primary -->
    
</div>

<?php get_footer(); ?>
