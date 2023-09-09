<?php
/**
 * Theme Options.
 *
 * @package unique_startup
 */

$default = unique_startup_get_default_theme_options();

// Add Panel.
$wp_customize->add_panel( 'theme_option_panel',
	array(
	'title'      => __( 'Theme Options', 'unique-startup' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	)
);

// Header Section.
$wp_customize->add_section( 'section_header',
	array(
	'title'      => __( 'Header Options', 'unique-startup' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	'panel'      => 'theme_option_panel',
	)
);

// Setting show_title.
$wp_customize->add_setting( 'theme_options[show_title]',
	array(
	'default'           => $default['show_title'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'unique_startup_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[show_title]',
	array(
	'label'    => __( 'Show Site Title', 'unique-startup' ),
	'section'  => 'section_header',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);
// Setting show_tagline.
$wp_customize->add_setting( 'theme_options[show_tagline]',
	array(
	'default'           => $default['show_tagline'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'unique_startup_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[show_tagline]',
	array(
	'label'    => __( 'Show Tagline', 'unique-startup' ),
	'section'  => 'section_header',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);


// Setting opening_time
$wp_customize->add_setting( 'theme_options[header_opening_time]',
	array(
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	)
);
$wp_customize->add_control( 'theme_options[header_opening_time]',
	array(
	'label'    => __( 'Add Opening Time', 'unique-startup' ),
	'section'  => 'section_header',
	'type'     => 'text',
	'priority' => 100,
	)
);

// Setting phone_number
$wp_customize->add_setting( 'theme_options[header_phone_number]',
	array(
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	)
);
$wp_customize->add_control( 'theme_options[header_phone_number]',
	array(
	'label'    => __( 'Add Phone Number', 'unique-startup' ),
	'section'  => 'section_header',
	'type'     => 'text',
	'priority' => 100,
	)
);

// Setting email_address
$wp_customize->add_setting( 'theme_options[header_email_address]',
	array(
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	)
);
$wp_customize->add_control( 'theme_options[header_email_address]',
	array(
	'label'    => __( 'Add Email Address', 'unique-startup' ),
	'section'  => 'section_header',
	'type'     => 'text',
	'priority' => 100,
	)
);

// Setting top_button
$wp_customize->add_setting( 'theme_options[header_top_button]',
	array(
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	)
);
$wp_customize->add_control( 'theme_options[header_top_button]',
	array(
	'label'    => __( 'Add Button Text', 'unique-startup' ),
	'section'  => 'section_header',
	'type'     => 'text',
	'priority' => 100,
	)
);

// Setting top_buttonlink
$wp_customize->add_setting( 'theme_options[header_top_buttonlink]',
	array(
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control( 'theme_options[header_top_buttonlink]',
	array(
	'label'    => __( 'Add Button Link', 'unique-startup' ),
	'section'  => 'section_header',
	'type'     => 'url',
	'priority' => 100,
	)
);

// Social Media Section.
$wp_customize->add_section( 'section_social_media',
	array(
	'title'      => __( 'Social Media Options', 'unique-startup' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	'panel'      => 'theme_option_panel',
	)
);

// Setting facebook_link
$wp_customize->add_setting( 'theme_options[header_facebook_link]',
	array(
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control( 'theme_options[header_facebook_link]',
	array(
	'label'    => __( 'Add facebook link', 'unique-startup' ),
	'section'  => 'section_social_media',
	'type'     => 'url',
	'priority' => 100,
	)
);

// Setting twitter_link
$wp_customize->add_setting( 'theme_options[header_twitter_link]',
	array(
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control( 'theme_options[header_twitter_link]',
	array(
	'label'    => __( 'Add twitter link', 'unique-startup' ),
	'section'  => 'section_social_media',
	'type'     => 'url',
	'priority' => 100,
	)
);

// Setting instagram_link
$wp_customize->add_setting( 'theme_options[header_instagram_link]',
	array(
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control( 'theme_options[header_instagram_link]',
	array(
	'label'    => __( 'Add instagram link', 'unique-startup' ),
	'section'  => 'section_social_media',
	'type'     => 'url',
	'priority' => 100,
	)
);

// Setting youtube_link
$wp_customize->add_setting( 'theme_options[header_youtube_link]',
	array(
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control( 'theme_options[header_youtube_link]',
	array(
	'label'    => __( 'Add youtube link', 'unique-startup' ),
	'section'  => 'section_social_media',
	'type'     => 'url',
	'priority' => 100,
	)
);

// Layout Section.
$wp_customize->add_section( 'section_layout',
	array(
	'title'      => __( 'Layout Options', 'unique-startup' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	'panel'      => 'theme_option_panel',
	)
);

// Setting global_layout.
$wp_customize->add_setting( 'theme_options[global_layout]',
	array(
	'default'           => $default['global_layout'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'unique_startup_sanitize_select',
	)
);
$wp_customize->add_control( 'theme_options[global_layout]',
	array(
	'label'    => __( 'Global Layout', 'unique-startup' ),
	'section'  => 'section_layout',
	'type'     => 'select',
	'choices'  => unique_startup_get_global_layout_options(),
	'priority' => 100,
	)
);

// Setting archive_layout.
$wp_customize->add_setting( 'theme_options[archive_layout]',
	array(
	'default'           => $default['archive_layout'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'unique_startup_sanitize_select',
	)
);
$wp_customize->add_control( 'theme_options[archive_layout]',
	array(
	'label'    => __( 'Archive Layout', 'unique-startup' ),
	'section'  => 'section_layout',
	'type'     => 'select',
	'choices'  => unique_startup_get_archive_layout_options(),
	'priority' => 100,
	)
);
// Setting archive_image.
$wp_customize->add_setting( 'theme_options[archive_image]',
	array(
	'default'           => $default['archive_image'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'unique_startup_sanitize_select',
	)
);
$wp_customize->add_control( 'theme_options[archive_image]',
	array(
	'label'    => __( 'Image in Archive', 'unique-startup' ),
	'section'  => 'section_layout',
	'type'     => 'select',
	'choices'  => unique_startup_get_image_sizes_options( true, array( 'disable', 'thumbnail', 'medium', 'large' ), false ),
	'priority' => 100,
	)
);
// Setting archive_image_alignment.
$wp_customize->add_setting( 'theme_options[archive_image_alignment]',
	array(
	'default'           => $default['archive_image_alignment'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'unique_startup_sanitize_select',
	)
);
$wp_customize->add_control( 'theme_options[archive_image_alignment]',
	array(
	'label'           => __( 'Image Alignment in Archive', 'unique-startup' ),
	'section'         => 'section_layout',
	'type'            => 'select',
	'choices'         => unique_startup_get_image_alignment_options(),
	'priority'        => 100,
	'active_callback' => 'unique_startup_is_image_in_archive_active',
	)
);
// Setting single_image.
$wp_customize->add_setting( 'theme_options[single_image]',
	array(
	'default'           => $default['single_image'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'unique_startup_sanitize_select',
	)
);
$wp_customize->add_control( 'theme_options[single_image]',
	array(
	'label'    => __( 'Image in Single Post/Page', 'unique-startup' ),
	'section'  => 'section_layout',
	'type'     => 'select',
	'choices'  => unique_startup_get_image_sizes_options( true, array( 'disable', 'large' ), false ),
	'priority' => 100,
	)
);

// Footer Section.
$wp_customize->add_section( 'section_footer',
	array(
	'title'      => __( 'Footer Options', 'unique-startup' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	'panel'      => 'theme_option_panel',
	)
);

// Setting copyright_text.
$wp_customize->add_setting( 'theme_options[copyright_text]',
	array(
	'default'           => $default['copyright_text'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'unique_startup_sanitize_textarea_content',
	'transport'         => 'postMessage',
	)
);
$wp_customize->add_control( 'theme_options[copyright_text]',
	array(
	'label'    => __( 'Copyright Text', 'unique-startup' ),
	'section'  => 'section_footer',
	'type'     => 'text',
	'priority' => 100,
	)
);