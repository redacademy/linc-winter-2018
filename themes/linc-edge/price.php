<?php
/**
 * Template Name: Pricing
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php while ( have_posts() ) : the_post(); ?>
            <header class="entry-header">
                <?php the_title( '<h1 class="entry-title"><span class="title-underline">', '</span></h1>' ); ?>
            </header>
        <?php endwhile; // End of the loop. Remaining content are custom fields ?>

<?php get_footer(); ?>