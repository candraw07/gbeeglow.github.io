<?php
/**
 * Default theme options.
 *
 * @package unique_startup
 */

if ( ! function_exists( 'unique_startup_get_default_theme_options' ) ) :

	/**
	 * Get default theme options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Default theme options.
	 */
	function unique_startup_get_default_theme_options() {

		$defaults = array();

		// Header.
		$defaults['show_title']            = true;
		$defaults['show_tagline']          = true;
		$defaults['show_social_in_header'] = false;
		$defaults['search_in_header']      = true;

		// Layout.
		$defaults['global_layout']           = 'right-sidebar';
		$defaults['archive_layout']          = 'excerpt';
		$defaults['archive_image']           = 'large';
		$defaults['archive_image_alignment'] = 'center';
		$defaults['single_image']            = 'large';

		// Home Page.
		$defaults['home_content_status'] = true;
		
		// Footer.
		$defaults['copyright_text']        = esc_html__( 'Copyright &copy; All rights reserved.', 'unique-startup' );
		
		// Pass through filter.
		$defaults = apply_filters( 'unique_startup_filter_default_theme_options', $defaults );
		return $defaults;
	}

endif;
