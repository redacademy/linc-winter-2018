<?php
/*
Template Name: Our Team
*/

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php while ( have_posts() ) : the_post(); ?>
            <header class="entry-header">
                <?php the_title( '<h1 class="entry-title"><span class="title-underline">', '</span></h1>' ); ?>
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
                    <?php the_post_thumbnail( 'medium', ['class' => 'headshot'] ); ?>
                <?php endif; ?>
                <div class="member-profile-inner">
                    <h2><?php the_title(); ?></h2>
                    <h3><?php echo CFS() -> get ('position'); ?></h3>
                    <div class="bio-excerpt">
                        <?php echo CFS() -> get ('biography'); ?>
                    </div>

                    <?php
                    $content = CFS() -> get ('biography');
                    $content = str_replace( ']]>', ']]>', $content );
                    echo do_shortcode('[expand title="" 
                    alt="Show biography" 
                    trigpos="below" 
                    trigclass="expand-bio"
                    targclass="bio"]'
                    .$content.'[/expand]');
                    ?>
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
<h1 class="additional-title"><span class="title-underline"><?php echo CFS()->get('additional_department'); ?></span></h1>
<h2 class="team-comment"><?php echo CFS()->get('department_comment'); ?></h2>

    <div class="team-co-op-container">
        <?php 
        foreach ( $team_posts2 as $post ): 
        setup_postdata($post);
        ?>      
            <div class="member-profile">
                <?php if ( has_post_thumbnail() ) : ?>
                    <?php the_post_thumbnail( 'medium', ['class' => 'headshot'] ); ?>
                <?php endif; ?>

                <div class="member-profile-inner">
                    <h2><?php the_title(); ?></h2>
                    <h3><?php echo CFS() -> get ('position'); ?></h3>
                    <div class="bio-excerpt">
                        <?php echo CFS() -> get ('biography'); ?>
                    </div>
                    
                    <?php
                    $content = CFS() -> get ('biography');
                    $content = str_replace( ']]>', ']]>', $content );
                    echo do_shortcode('[expand title="" 
                    alt="Show biography" 
                    trigpos="below" 
                    trigclass="expand-bio"
                    targclass="bio"]'
                    .$content.'[/expand]');
                    ?>
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
                    class="btn"><?php echo $term->name; ?></a>
                </p>
            </li>
        <?php endforeach; ?>
        <?php endif; ?>
</ul> -->
    
<?php get_footer(); ?>


