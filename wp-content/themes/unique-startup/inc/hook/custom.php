<?php
/**
 * Custom theme functions.
 *
 * This file contains hook functions attached to theme hooks.
 *
 * @package unique_startup
 */

if ( ! function_exists( 'unique_startup_skip_to_content' ) ) :
	/**
	 * Add Skip to content.
	 *
	 * @since 1.0.0
	 */
	function unique_startup_skip_to_content() {
	?><a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'unique-startup' ); ?></a><?php
	}
endif;

add_action( 'unique_startup_action_before', 'unique_startup_skip_to_content', 15 );

// Middle Header

if ( ! function_exists( 'unique_startup_site_branding' ) ) :

	/**
	 * Site branding.
	 *
	 * @since 1.0.0
	 */
	function unique_startup_site_branding() {
		$header_top_button = unique_startup_get_option( 'header_top_button' );
		$header_top_buttonlink = unique_startup_get_option( 'header_top_buttonlink' );

		$header_opening_time = unique_startup_get_option( 'header_opening_time' );
		$header_phone_number = unique_startup_get_option( 'header_phone_number' );
		$header_email_address = unique_startup_get_option( 'header_email_address' );

		$header_facebook_link = unique_startup_get_option( 'header_facebook_link' );
		$header_twitter_link = unique_startup_get_option( 'header_twitter_link' );
		$header_instagram_link = unique_startup_get_option( 'header_instagram_link' );
		$header_youtube_link = unique_startup_get_option( 'header_youtube_link' );

		?>

		<div id="top-header" class="text-center">
			<div class="container">
				<div class="row">
					<div class="col-xl-4 col-lg-4 col-md-4 text-md-start">
						<?php if( !empty($header_opening_time) ):?>
						    <p class="mb-0"><span class="dashicons dashicons-clock"></span> <?php echo esc_html($header_opening_time);?></p>
						<?php endif;?>
					</div>
					<div class="col-xl-2 col-lg-3 col-md-3 text-center">
						<?php if( !empty($header_phone_number) ):?>
						    <p class="mb-0"><span class="dashicons dashicons-phone"></span> <?php echo esc_html($header_phone_number);?></p>
						<?php endif;?>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-3 text-center">
						<?php if( !empty($header_email_address) ):?>
						    <p class="mb-0"><span class="dashicons dashicons-email"></span> <?php echo esc_html($header_email_address);?></p>
						<?php endif;?>
					</div>
					<div class="col-xl-3 col-lg-2 col-md-2 text-md-end">
						<?php if( !empty($header_facebook_link) || !empty($header_twitter_link) || !empty($header_instagram_link) || !empty($header_youtube_link) ):?>
							<span><?php esc_html_e('Connect With Us-','unique-startup'); ?></span>
							<?php if( !empty($header_facebook_link) ):?>
							    <a href="<?php echo esc_url($header_facebook_link);?>" class="mb-0"><span class="dashicons dashicons-facebook-alt"></span></a>
							<?php endif;?>
							<?php if( !empty($header_twitter_link) ):?>
							    <a href="<?php echo esc_url($header_twitter_link);?>" class="mb-0"><span class="dashicons dashicons-twitter"></span></a>
							<?php endif;?>
							<?php if( !empty($header_instagram_link) ):?>
							    <a href="<?php echo esc_url($header_instagram_link);?>" class="mb-0"><span class="dashicons dashicons-instagram"></span></a>
							<?php endif;?>
							<?php if( !empty($header_youtube_link) ):?>
							    <a href="<?php echo esc_url($header_youtube_link);?>" class="mb-0"><span class="dashicons dashicons-youtube"></span></a>
							<?php endif;?>
						<?php endif;?>
					</div>
				</div>
			</div>
		</div>

		<!-- responsive menu -->
		<div id="middle-header">
			<div class="container">
				<div class="row">
				    <div class="col-xl-3 col-lg-12 col-md-4 align-self-center">
					    <div class="site-branding mb-3 mb-lg-0">
							<?php unique_startup_the_custom_logo(); ?>
							<?php $show_title = unique_startup_get_option( 'show_title' ); ?>
							<?php $show_tagline = unique_startup_get_option( 'show_tagline' ); ?>
							<?php if ( true === $show_title || true === $show_tagline ) :  ?>
								<div id="site-identity">
									<?php if ( true === $show_title ) :  ?>
										<?php if ( is_front_page() ) : ?>
											<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
										<?php else : ?>
											<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
										<?php endif; ?>
									<?php endif; ?>
									<?php if ( true === $show_tagline ) :  ?>
										<p class="site-description"><?php bloginfo( 'description' ); ?></p>
									<?php endif; ?>
								</div>
							<?php endif; ?>
					    </div>
					</div>

					<!-- right menu -->
					<div class="col-lg-6 col-md-6 col-6 align-self-center">
						<?php if(has_nav_menu('primary-menu')){?>
							<div class="toggle-menu gb_menu text-md-start">
								<button onclick="unique_startup_gb_Menu_open()" class="gb_toggle p-2"><?php esc_html_e('Menu','unique-startup'); ?></button>
							</div>
						<?php }?>
						<div id="gb_responsive" class="nav side_gb_nav">
							<nav id="top_gb_menu" class="gb_nav_menu" role="navigation" aria-label="<?php esc_attr_e( 'Menu', 'unique-startup' ); ?>">
								<?php 
								    wp_nav_menu( array( 
										'theme_location' => 'primary-menu',
										'container_class' => 'gb_navigation clearfix' ,
										'menu_class' => 'clearfix',
										'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav mb-0 px-0">%3$s</ul>',
										'fallback_cb' => 'wp_page_menu',
								    ) ); 
								?>
								<a href="javascript:void(0)" class="closebtn gb_menu" onclick="unique_startup_gb_Menu_close()">x<span class="screen-reader-text"><?php esc_html_e('Close Menu','unique-startup'); ?></span></a>
							</nav>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 col-6 align-self-center text-md-end text-center ">
						<?php if( !empty($header_top_button) || !empty($header_top_buttonlink) ):?>
						    <p class="header-button mb-0">
						    	<a href="<?php echo esc_url($header_top_buttonlink);?>"><?php echo esc_html($header_top_button);?></a>
						   	</p>
						<?php endif;?>
					</div>
				</div>
			</div>
		</div>

	    <?php
	}

endif;

add_action( 'unique_startup_action_header', 'unique_startup_site_branding' );


/////////////////////////////////// copyright start /////////////////////////////

if ( ! function_exists( 'unique_startup_footer_copyright' ) ) :

	/**
	 * Footer copyright
	 *
	 * @since 1.0.0
	 */
	function unique_startup_footer_copyright() {

		// Check if footer is disabled.
		$footer_status = apply_filters( 'unique_startup_filter_footer_status', true );
		if ( true !== $footer_status ) {
			return;
		}

		// Copyright content.
		$copyright_text = unique_startup_get_option( 'copyright_text' );
		$copyright_text = apply_filters( 'unique_startup_filter_copyright_text', $copyright_text );
		if ( ! empty( $copyright_text ) ) {
			$copyright_text = wp_kses_data( $copyright_text );
		}

		// Powered by content.
		$powered_by_text = sprintf( __( 'Unique Startup by %s', 'unique-startup' ), '<span>' . __( 'Mizan Themes', 'unique-startup' ) . '</span>' );
		?>

		<div class="colophon-inner">
		    <?php if ( ! empty( $copyright_text ) ) : ?>
			    <div class="colophon-column">
			    	<div class="copyright">
			    		<?php echo $copyright_text; ?>
			    	</div><!-- .copyright -->
			    </div><!-- .colophon-column -->
		    <?php endif; ?>

		    <?php if ( ! empty( $powered_by_text ) ) : ?>
			    <div class="colophon-column">
			    	<div class="site-info">
			    		<?php echo $powered_by_text; ?>
			    	</div><!-- .site-info -->
			    </div><!-- .colophon-column -->
		    <?php endif; ?>

		</div><!-- .colophon-inner -->

	    <?php
	}

endif;

add_action( 'unique_startup_action_footer', 'unique_startup_footer_copyright', 10 );

// /////////////////////////////////sidebar//////////////////


if ( ! function_exists( 'unique_startup_add_sidebar' ) ) :

	/**
	 * Add sidebar.
	 *
	 * @since 1.0.0
	 */
	function unique_startup_add_sidebar() {

		global $post;

		$global_layout = unique_startup_get_option( 'global_layout' );
		$global_layout = apply_filters( 'unique_startup_filter_theme_global_layout', $global_layout );

		// Check if single.
		if ( $post && is_singular() ) {
			$post_options = get_post_meta( $post->ID, 'unique_startup_theme_settings', true );
			if ( isset( $post_options['post_layout'] ) && ! empty( $post_options['post_layout'] ) ) {
				$global_layout = $post_options['post_layout'];
			}
		}

		// Include primary sidebar.
		if ( 'no-sidebar' !== $global_layout ) {
			get_sidebar();
		}
		// Include Secondary sidebar.
		switch ( $global_layout ) {
			case 'three-columns':
			get_sidebar( 'secondary' );
			break;

			default:
			break;
		}

	}

endif;

add_action( 'unique_startup_action_sidebar', 'unique_startup_add_sidebar' );

//////////////////////////////////////// single page


if ( ! function_exists( 'unique_startup_add_image_in_single_display' ) ) :

	/**
	 * Add image in single post.
	 *
	 * @since 1.0.0
	 */
	function unique_startup_add_image_in_single_display() {

		global $post;

		if ( has_post_thumbnail() ) {

			$values = get_post_meta( $post->ID, 'unique_startup_theme_settings', true );
			$unique_startup_theme_settings_single_image = isset( $values['single_image'] ) ? esc_attr( $values['single_image'] ) : '';

			if ( ! $unique_startup_theme_settings_single_image ) {
				$unique_startup_theme_settings_single_image = unique_startup_get_option( 'single_image' );
			}

			if ( 'disable' !== $unique_startup_theme_settings_single_image ) {
				$args = array(
					'class' => 'aligncenter',
				);
				the_post_thumbnail( esc_attr( $unique_startup_theme_settings_single_image ), $args );
			}
		}

	}

endif;

add_action( 'unique_startup_single_image', 'unique_startup_add_image_in_single_display' );

if ( ! function_exists( 'unique_startup_footer_goto_top' ) ) :

	/**
	 * Go to top.
	 *
	 * @since 1.0.0
	 */
	function unique_startup_footer_goto_top() {

		echo '<a href="#page" class="scrollup" id="btn-scrollup"><i class="fa fa-angle-up"><span class="screen-reader-text">' . esc_html__( 'Scroll Up', 'unique-startup' ) . '</span></i></a>';

	}

endif;

add_action( 'unique_startup_action_after', 'unique_startup_footer_goto_top', 20 );