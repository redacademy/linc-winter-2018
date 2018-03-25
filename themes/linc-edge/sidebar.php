<?php
/**
 * The sidebar containing the main widget area.s
 *
 * @package linc_edge_Theme
 */

if ( ! is_active_sidebar( esc_html('sidebar-1') ) ) {
	return;
}
?>

<div id="secondary" class="widget-area">
	<?php dynamic_sidebar( esc_html('sidebar-1') ); ?>
</div><!-- #secondary -->
