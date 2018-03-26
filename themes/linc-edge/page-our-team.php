<?php
/**
 * The template for displaying prcing page
 * @package Linc-edge-theme
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php while ( have_posts() ) : the_post(); ?>
            <header class="entry-header">
                <?php esc_html(the_title( '<h1 class="entry-title"><span class="title-underline">', '</span></h1>' )); ?>
            </header>
        <?php endwhile; // End of the loop. Remaining content are custom fields ?>
        
<!-- Get 'team' posts -->
<?php
$args = array(
    'post_type' => 'team',
    'department' => 'general',
    'posts_per_page' => -1,
    'meta_key' => 'order_placement',
    'orderby' => 'meta_value',
    'order' => 'ASC'
            );
$team_posts = get_posts( $args );

if ( $team_posts ):
?>
    <div class="team-general-container">
        <?php 
        foreach ( $team_posts as $post ): 
        setup_postdata($post);
        ?>
            <div class="member-profile">
                <?php if ( has_post_thumbnail() ) : ?>
                    <?php the_post_thumbnail( esc_html('medium'), [esc_html('class') => esc_html('headshot')] ); ?>
                <?php endif; ?>
                <div class="member-profile-inner">
                    <h2><?php the_title(); ?></h2>
                    <h3 class="title-underline-short"><?php echo CFS() -> get (esc_html('position')); ?></h3>
                    <div class="bio-excerpt-mobile">
                        <?php echo CFS() -> get (esc_html('biography')); ?>
                    </div>
                    <div class="bio-excerpt-desktop">
                        <?php echo CFS() -> get (esc_html('biography')); ?>
                    </div>
                    <div class="arrow-container-mobile">
                        <img class="arrow-show-more-mobile" src="<?php echo esc_html(get_stylesheet_directory_uri()); ?>/images/arrow-show-more-down.png">
                        <img class="arrow-show-less-mobile" src="<?php echo esc_html(get_stylesheet_directory_uri()); ?>/images/arrow-show-more-up.png">
                    </div>
                    <div class="arrow-container-desktop">
                        <img class="arrow-show-more-desktop" src="<?php echo esc_html(get_stylesheet_directory_uri()); ?>/images/arrow-show-more-down.png">
                        <img class="arrow-show-less-desktop" src="<?php echo esc_html(get_stylesheet_directory_uri()); ?>/images/arrow-show-more-up.png">
                    </div>
                </div>
            </div><!-- .member-profile -->
        <?php endforeach; ?>
        <?php wp_reset_postdata(); ?>
    </div>
<?php endif; ?>


<?php
$args2 = array(
    'post_type' => 'team',
    'department' => 'co-op',
    'posts_per_page' => -1,
    'meta_key' => 'order_placement',
    'orderby' => 'meta_value',
    'order' => 'ASC'
            );
$team_posts2 = get_posts( $args2 );

if ( $team_posts2 ):
?>
<h1 class="additional-title"><span class="title-underline"><?php echo CFS()->get(esc_html('additional_department')); ?></span></h1>
<h2 class="team-comment"><?php echo CFS()->get(esc_html('department_comment')); ?></h2>

    <div class="team-co-op-container">
        <?php 
        foreach ( $team_posts2 as $post ): 
        setup_postdata($post);
        ?>      
            <div class="member-profile">
                <?php if ( has_post_thumbnail() ) : ?>
                    <?php the_post_thumbnail( esc_html('medium'), [esc_html('class') => esc_html('headshot')] ); ?>
                <?php endif; ?>

                <div class="member-profile-inner">
                    <h2><?php the_title(); ?></h2>
                    <h3 class="title-underline-short"><?php echo CFS() -> get (esc_html('position')); ?></h3>
                    <div class="bio-excerpt-mobile">
                        <?php echo CFS() -> get (esc_html('biography')); ?>
                    </div>
                    <div class="bio-excerpt-desktop">
                        <?php echo CFS() -> get (esc_html('biography')); ?>
                    </div>
                    <div class="arrow-container-mobile">
                        <img class="arrow-show-more-mobile" src="<?php echo esc_html(get_stylesheet_directory_uri()); ?>/images/arrow-show-more-down.png">
                        <img class="arrow-show-less-mobile" src="<?php echo esc_html(get_stylesheet_directory_uri()); ?>/images/arrow-show-more-up.png">
                    </div>
                    <div class="arrow-container-desktop">
                        <img class="arrow-show-more-desktop" src="<?php echo esc_html(get_stylesheet_directory_uri()); ?>/images/arrow-show-more-down.png">
                        <img class="arrow-show-less-desktop" src="<?php echo esc_html(get_stylesheet_directory_uri()); ?>/images/arrow-show-more-up.png">
                    </div>
                </div>
            </div><!-- .member-profile -->
        <?php endforeach; ?>
        <?php wp_reset_postdata(); ?>
    </div>
<?php endif; ?>


<!-- This part is just to show taxonomy links, which we have to redirect/remove -->
<!-- <ul class="product-types-list">
<?php
        $terms = get_terms ( array(
            'taxonomy' => 'department',
            'hide_empty' => 0,
        ));
        if ( ! empty ($terms) ):
        ?>
            <?php foreach ( $terms as $term ):?>
            <li class="product-type">
                <p>
                    <a href="<?php echo get_term_link( $term ); ?>"
                    class="btn"><?php echo esc_url($term->name); ?></a>
                </p>
            </li>
        <?php endforeach; ?>
        <?php endif; ?>
</ul> -->
    
    </main><!-- #main -->
</div><!-- #primary -->
<a id="back-to-top-btn" title="Go to top"><i class="fas fa-arrow-up"></i>TOP</a>

<?php get_footer(); ?>


