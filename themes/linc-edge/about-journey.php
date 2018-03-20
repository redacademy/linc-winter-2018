<?php
/*
Template Name: Our Journey
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
                <header class="entry-header">
                    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                </header>
            <?php endwhile; // End of the loop. ?>
            
    <?php
    $args = array(
        'post_type' => 'testimonial',
        'posts_per_page' => 1,
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
                <img src="<?php echo CFS() -> get ('image'); ?>">
                <div class="endorsement">
                    <p><?php echo CFS() -> get ('endorsers_testimonial'); ?></p>
                    <h2><?php echo CFS() -> get ('endorsers_name'); ?></h2>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    



<?php get_footer(); ?>