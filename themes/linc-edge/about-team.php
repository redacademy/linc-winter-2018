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
        <?php 
        foreach ( $team_posts as $post ): 
        setup_postdata($post);
        ?>
            <div class="member-profile">
                <?php if ( has_post_thumbnail() ) : ?>
                    <?php the_post_thumbnail( 'medium' ); ?>
                <?php endif; ?>
                <h3><?php the_title(); ?></h3>
                <?php echo CFS() -> get ('position'); ?>
                <?php echo CFS() -> get ('biography'); ?>
            </div>
        <?php endforeach; ?>
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
    $team_posts = get_posts( $args2 );

    if ( $team_posts ):
    ?>
    <h1>Co-op</h1>
    <?php echo $term->name; ?>
        <?php 
        foreach ( $team_posts as $post ): 
        setup_postdata($post);
        ?>

            <div class="member-profile">
                <?php if ( has_post_thumbnail() ) : ?>
                    <?php the_post_thumbnail( 'medium' ); ?>
                <?php endif; ?>
                <h3><?php the_title(); ?></h3>
                <?php echo CFS() -> get ('position'); ?>
                <?php echo CFS() -> get ('biography'); ?>
            </div>
        <?php endforeach; ?>
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


