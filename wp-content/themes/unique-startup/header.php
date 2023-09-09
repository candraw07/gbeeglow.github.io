<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package unique_startup
 */

?>
<?php
	/**
	 * Hook - unique_startup_action_doctype.
	 *
	 * @hooked unique_startup_doctype -  10
	 */
	do_action( 'unique_startup_action_doctype' );
?>
<head>
	<?php
	/**
	 * Hook - unique_startup_action_head.
	 *
	 * @hooked unique_startup_head -  10
	 */
	do_action( 'unique_startup_action_head' );
	?>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php do_action( 'wp_body_open' ); ?>

	<?php
	/**
	 * Hook - unique_startup_action_before.
	 *
	 * @hooked unique_startup_page_start - 10
	 * @hooked unique_startup_skip_to_content - 15
	 */
	do_action( 'unique_startup_action_before' );
	?>

    <?php
	  /**
	   * Hook - unique_startup_action_before_header.
	   *
	   * @hooked unique_startup_header_start - 10
	   */
	  do_action( 'unique_startup_action_before_header' );
	?>
		<?php
		/**
		 * Hook - unique_startup_action_header.
		 *
		 * @hooked unique_startup_site_branding - 10
		 */
		do_action( 'unique_startup_action_header' );
		?>
    <?php
	  /**
	   * Hook - unique_startup_action_after_header.
	   *
	   * @hooked unique_startup_header_end - 10
	   */
	  do_action( 'unique_startup_action_after_header' );
	?>

	<?php
	/**
	 * Hook - unique_startup_action_before_content.
	 *
	 * @hooked unique_startup_content_start - 10
	 */
	do_action( 'unique_startup_action_before_content' );
	?>

	<!-- <?php
	  /**
	   * Hook - unique_startup_action_content.
	   */
	  do_action( 'unique_startup_action_content' );
	?> -->