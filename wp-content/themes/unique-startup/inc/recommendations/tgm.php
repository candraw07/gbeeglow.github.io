<?php
	
require get_template_directory() . '/inc/recommendations/class-tgm-plugin-activation.php';

/**
 * Recommended plugins.
 */
function unique_startup_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Mizan Demo Importor', 'unique-startup' ),
			'slug'             => 'mizan-demo-importer',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'Happy Addons for Elementor', 'unique-startup' ),
			'slug'             => 'happy-elementor-addons',
			'required'         => false,
			'force_activation' => false,
		),
	);
	$config = array();
	unique_startup_tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'unique_startup_register_recommended_plugins' );