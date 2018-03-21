<?php
/*
Template Name: Our Journey
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
                <header class="entry-header">
                    <?php the_title( '<h1 class="entry-title"><span class="title-underline">', '</span></h1>' ); ?>
                </header>
            <?php endwhile; // End of the loop. ?>
            
        <?php $timeline_entry_container = CFS()->get('timeline_entry'); ?>
        <ul class="timeline-list">
                <?php foreach ($timeline_entry_container as $post ): ?>
                <li>
                    <div class="timeline-item">
                        <?php if ( $post['timeline_image'] ) : ?>
                            <?php echo '<img class="timeline-image" src="' . $post['timeline_image'] . '"/>';?>
                        <?php endif ?>
                        <div class="timeline-content">
                            <h2 class="timeline-date"><?php echo $post['timeline_date'];?></h2>
                            <p class="timeline-event"><?php echo $post['timeline_event'];?></p>
                        </div>
                    </div>
                </li>
                <?php endforeach; ?>

        </ul>

    



<?php get_footer(); ?>