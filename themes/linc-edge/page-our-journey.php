<?php
/**
 * The template for displaying journey page
 * @package Linc-edge-theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
        <header class="entry-header">
            <?php esc_html(the_title( '<h1 class="entry-title"><span class="title-underline">', '</span></h1>' )); ?>
        </header>
      <?php endwhile; // End of the loop. ?>
            
      <?php $timeline_entry_container = CFS()->get(esc_html('timeline_entry')); ?>
        <ul class="timeline-list">
          <?php foreach ($timeline_entry_container as $post ): ?>
          <li>
              <div class="timeline-item">
                  <?php if ( esc_html($post['timeline_image']) ) : ?>
                      <?php echo '<img class="timeline-image" src="' . esc_html($post['timeline_image']) . '"/>';?>
                  <?php endif ?>
                  <div class="timeline-content">
                      <h2 class="timeline-date"><?php echo esc_html($post['timeline_date']); ?></h2>
                      <p class="timeline-event"><?php echo esc_html($post['timeline_event']); ?></p>
                  </div>
              </div>
          </li>
          <?php endforeach; ?>
        </ul>

    </main><!-- #main -->
	</div><!-- #primary -->
	<a id="back-to-top-btn" title="Go to top"><i class="fas fa-arrow-up"></i>TOP</a>

<?php get_footer(); ?>