<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package unique_startup
 */

	/**
	 * Hook - unique_startup_action_after_content.
	 *
	 * @hooked unique_startup_content_end - 10
	 */
	do_action( 'unique_startup_action_after_content' );
?>

	<?php
	/**
	 * Hook - unique_startup_action_before_footer.
	 *
	 * @hooked unique_startup_add_footer_bottom_widget_area - 5
	 * @hooked unique_startup_footer_start - 10
	 */
	do_action( 'unique_startup_action_before_footer' );
	?>
    <?php
	  /**
	   * Hook - unique_startup_action_footer.
	   *
	   * @hooked unique_startup_footer_copyright - 10
	   */
	  do_action( 'unique_startup_action_footer' );
	?>
	<?php
	/**
	 * Hook - unique_startup_action_after_footer.
	 *
	 * @hooked unique_startup_footer_end - 10
	 */
	do_action( 'unique_startup_action_after_footer' );
	?>

<?php
	/**
	 * Hook - unique_startup_action_after.
	 *
	 * @hooked unique_startup_page_end - 10
	 * @hooked unique_startup_footer_goto_top - 20
	 */
	do_action( 'unique_startup_action_after' );
?>

<?php wp_footer(); ?>
</body>
</html>
