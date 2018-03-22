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

    <div class="subscription-description-container">
      <?php $subscribes = CFS()->get( 'subscribe_description_content' ); foreach ( $subscribes as $subscribe ): ?>

        <div class="subscription-description-content-container">
          
          <div class="subscription-description-group">
            <p class="subscription-description"><?php echo $subscribe['subscribe_description']; ?></p><!-- .subscription-description -->
          </div><!-- .subscription-description-group -->

        </div><!-- .subscription-description-content-container -->

      <?php endforeach; ?><!-- ending foreach loop -->
    </div><!-- .subscription-description-container -->

    <div class="subscribe-container">
      <input type="email" name="EMAIL" placeholder="Email address" required />
      <input type="submit" value="Subscribe" />
    </div><!-- .subscribe-container -->

    <div class="subscription-condition-container">

      <div class="subscription-condition-content-container">
        <?php $conditions = CFS()->get( 'subscribe_condition_content' ); foreach ( $conditions as $condition ): ?>

          <div class="subscription-condition-group">
            <p class="subscription-condition"><?php echo $condition['subscribe_condition']; ?></p><!-- .subscription-condition -->
          </div><!-- .subscription-condition-group -->

        </div><!-- subscription-condition-content-container -->
    
      <?php endforeach; ?><!-- ending foreach loop -->
    </div><!-- .subscription-condition-container -->
          
  </main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>