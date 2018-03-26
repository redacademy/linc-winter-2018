<?php

/**
 * The template for displaying pricing page
 * @package Linc-edge-theme
 */

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">

      <header class="entry-header">
        <?php esc_html(the_title( '<h1 class="entry-title"><span class="title-underline">', '</span></h1>' )); ?>
      </header><!-- .entry-header -->

    <div class="pricing-plans-container">
      <?php $fields = CFS()->get(esc_html( 'pricing_plan' )); foreach ( $fields as $field ): ?>

        <div class="pricing-plan-content-container">
          <?php echo '<img src="' . esc_url($field['pricing_image']) . '"/>'; ?>
          <p class="pricing-plan-title"><?php echo esc_html($field['pricing_title']); ?></p><!-- .pricing-plan-title -->
          <p class="pricing-plan-description"><?php echo esc_html($field['pricing_description']); ?></p><!-- .pricing-plan-description -->
          <p class="pricing-plan-rate"><?php echo esc_html($field['pricing_rate']); ?></p><!-- .pricing-plan-rate -->
          <button class="pricing-plan-button"><?php echo esc_html($field['pricing_button']); ?></button><!-- .pricing-plan-button -->
        </div><!-- .pricing-plan-content-container -->
        
      <?php endforeach; ?><!-- ending foreach loop -->
    </div><!-- .pricing-plans-container -->

    <?php $subscribes = CFS()->get( esc_html('subscribe_description_content') ); foreach ( $subscribes as $subscribe ): ?>

      <div class="subscription-description-container">
        <p class="subscription-description"><?php echo esc_html($subscribe['subscribe_description']); ?></p><!-- .subscription-description -->
      </div><!-- .subscription-description-container -->

    <?php endforeach; ?><!-- ending foreach loop -->

    <div class="subscription-form-container">
      <?php echo CFS()->get( esc_html('subscribe_form') ); ?>
    </div><!-- .subscription-form-container -->

    <?php $conditions = CFS()->get( esc_html('subscribe_condition_content') ); foreach ( $conditions as $condition ): ?>

      <div class="subscription-condition-container">
        <p class="subscription-condition"><?php echo esc_html($condition['subscribe_condition']); ?></p><!-- .subscription-condition -->
      </div><!-- subscription-condition-container -->
  
    <?php endforeach; ?><!-- ending foreach loop -->
          
  </main><!-- .site-main -->
</div><!-- .content-area -->
<a id="back-to-top-btn" title="Go to top"><i class="fas fa-arrow-up"></i></a>
  
<?php get_footer(); ?>