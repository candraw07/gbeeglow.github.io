<?php
/**
 * The Secondary Sidebar.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package unique_startup
 */

?>
<?php $default_sidebar = apply_filters( 'unique_startup_filter_default_sidebar_id', 'sidebar-2', 'secondary' ); ?>
<div id="sidebar-secondary" class="widget-area sidebar" role="complementary">
	<?php if ( is_active_sidebar( $default_sidebar ) ) : ?>
		<?php dynamic_sidebar( $default_sidebar ); ?>
	<?php else : ?>
		<?php
			do_action( 'unique_startup_action_default_sidebar', $default_sidebar, 'secondary' );
		?>
	<?php endif ?>
</div>