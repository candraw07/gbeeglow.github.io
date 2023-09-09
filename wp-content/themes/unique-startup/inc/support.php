<?php
/**
 * Theme supports.
 *
 * @package unique_startup
 */

// Load Footer Widget Support.
require_if_theme_supports( 'footer-widgets', get_template_directory() . '/inc/support/footer-widgets.php' );