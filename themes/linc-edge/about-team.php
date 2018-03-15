<?php
/*
Template Name: Our Team
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

    <!-- Get 'team' posts -->
    <?php
    $team_posts = get_posts( array(
        'post_type' => 'team',
        'posts_per_page' => -1, // Unlimited posts
        'orderby' => 'title', // Order alphabetically by name
    ) );

