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
      </header><!-- .entry-header -->

      <div class="entry-content">
        <?php the_content(); ?>
        <?php wp_link_pages( array(
          'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
          'after'  => '</div>',
          ) );
        ?>
      </div><!-- .entry-content -->

    <?php endwhile; ?><!-- ending while loop -->

    <div class="pricing-plan-container">
      <?php $fields = CFS()->get( 'pricing_plan' ); foreach ( $fields as $field ): ?>

        <div class="pricing-plan-content-container">

          <div class="pricing-plan-image-group">
            <?php echo '<img src="' . $field['pricing_image'] . '"/>'; ?>
          </div><!-- .pricing-plan-image-group -->

          <div class="pricing-plan-text-group">
            <p class="pricing-plan-title"><?php echo $field['pricing_title']; ?></p><!-- .pricing-plan-title -->
            <p class="pricing-plan-description"><?php echo $field['pricing_description']; ?></p><!-- .pricing-plan-description -->
            <p class="pricing-plan-rate"><?php echo $field['pricing_rate']; ?></p><!-- .pricing-plan-rate -->
          </div><!-- .pricing-plan-text-group -->

          <div class="pricing-plan-button-group">
            <button class="pricing-plan-button"><?php echo $field['pricing_button']; ?></button><!-- .pricing-plan-button -->
          </div><!-- .pricing-plan-button -->
        
        </div><!-- .pricing-plan-content-container -->
        
      <?php endforeach; ?><!-- ending foreach loop -->
    </div><!-- .pricing-plan-container -->

    <div class="notification-subscription-container">
      <?php $updates = CFS()->get( 'content_subsciption' ); foreach ( $updates as $update ): ?>

        <div class="notification-subscription-content-container">
          
          <div class="notification-subscription-description-group">
            <p class="notification-subscription-description"><?php echo $field['subscribe_description']; ?></p><!-- .notification-subscription-description -->
          </div><!-- .notification-subscription-description-group -->

          <div class="notification-subscription-condition-group">
            <p class="notification-subscription-condition"><?php echo $field['subscribe_condition']; ?></p><!-- .notification-subscription-condition -->
          </div><!-- .notification-subscription-condition-group -->

        </div><!-- .notification-subscription-content-container -->

      <?php endforeach; ?><!-- ending foreach loop -->
    </div><!-- .notification-subscription-container -->

  </main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>