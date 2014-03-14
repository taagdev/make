<?php
/**
 * @package ttf-one
 */

if ( ! function_exists( 'ttf_one_customizer_footer' ) ) :
/**
 * Configure settings and controls for the Footer section
 *
 * @since 1.0
 *
 * @param object $wp_customize
 * @param string $section
 */
function ttf_one_customizer_footer( $wp_customize, $section ) {
	$priority = new TTF_One_Prioritizer();
	$prefix = 'ttf-one_';

	// Background color
	$setting_id = 'footer-background-color';
	$wp_customize->add_setting(
		$setting_id,
		array(
			'default'           => '#ffffff',
			'type'              => 'theme_mod',
			'sanitize_callback' => 'maybe_hash_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			$prefix . $setting_id,
			array(
				'settings' => $setting_id,
				'section'  => $section,
				'label'    => __( 'Background Color', 'ttf-one' ),
				'priority' => $priority->add()
			)
		)
	);

	// Background Image
	$setting_id = 'footer-background-image';
	$wp_customize->add_setting(
		$setting_id,
		array(
			'default'           => '',
			'type'              => 'theme_mod',
			'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		new TTF_One_Customize_Image_Control(
			$wp_customize,
			$prefix . $setting_id,
			array(
				'settings' => $setting_id,
				'section'  => $section,
				'label'    => __( 'Background Image', 'ttf-one' ),
				'priority' => $priority->add(),
				'context'  => $prefix . $setting_id
			)
		)
	);

	// Background Repeat
	$setting_id = 'footer-background-repeat';
	$wp_customize->add_setting(
		$setting_id,
		array(
			'default'           => 'repeat',
			'type'              => 'theme_mod',
			'sanitize_callback' => 'ttf_one_sanitize_choice',
		)
	);
	$wp_customize->add_control(
		$prefix . $setting_id,
		array(
			'settings' => $setting_id,
			'section'  => $section,
			'label'    => __( 'Background Repeat', 'ttf-one' ),
			'type'     => 'radio',
			'choices'  => array(
				'no-repeat' => __( 'No Repeat', 'ttf-one' ),
				'repeat'    => __( 'Tile', 'ttf-one' ),
				'repeat-x'  => __( 'Tile Horizontally', 'ttf-one' ),
				'repeat-y'  => __( 'Tile Vertically', 'ttf-one' )
			),
			'priority' => $priority->add()
		)
	);

	// Background Position
	$setting_id = 'footer-background-position';
	$wp_customize->add_setting(
		$setting_id,
		array(
			'default'           => 'center',
			'type'              => 'theme_mod',
			'sanitize_callback' => 'ttf_one_sanitize_choice',
		)
	);
	$wp_customize->add_control(
		$prefix . $setting_id,
		array(
			'settings' => $setting_id,
			'section'  => $section,
			'label'    => __( 'Background Position', 'ttf-one' ),
			'type'     => 'radio',
			'choices'  => array(
				'left'   => __( 'Left', 'ttf-one' ),
				'center' => __( 'Center', 'ttf-one' ),
				'right'  => __( 'Right', 'ttf-one' )
			),
			'priority' => $priority->add()
		)
	);

	// Background Size
	$setting_id = 'footer-background-size';
	$wp_customize->add_setting(
		$setting_id,
		array(
			'default'           => 'auto',
			'type'              => 'theme_mod',
			'sanitize_callback' => 'ttf_one_sanitize_choice',
		)
	);
	$wp_customize->add_control(
		$prefix . $setting_id,
		array(
			'settings' => $setting_id,
			'section'  => $section,
			'label'    => __( 'Background Size', 'ttf-one' ),
			'type'     => 'radio',
			'choices'  => array(
				'auto'  => __( 'Auto', 'ttf-one' ),
				'cover'   => __( 'Cover', 'ttf-one' ),
				'contain' => __( 'Contain', 'ttf-one' )
			),
			'priority' => $priority->add()
		)
	);

	// Footer text
	$setting_id = 'footer-text';
	$wp_customize->add_setting(
		$setting_id,
		array(
			'default'           => '',
			'type'              => 'theme_mod',
			'sanitize_callback' => 'ttf_one_sanitize_text',
		)
	);
	$wp_customize->add_control(
		$prefix . $setting_id,
		array(
			'settings' => $setting_id,
			'section'  => $section,
			'label'    => __( 'Footer Text', 'ttf-one' ),
			'type'     => 'text',
			'priority' => $priority->add()
		)
	);

	// Footer layout
	$setting_id = 'footer-layout';
	$wp_customize->add_setting(
		$setting_id,
		array(
			'default'           => 'footer-layout-1',
			'type'              => 'theme_mod',
			'sanitize_callback' => 'ttf_one_sanitize_choice',
		)
	);
	$wp_customize->add_control(
		$prefix . $setting_id,
		array(
			'settings' => $setting_id,
			'section'  => $section,
			'label'    => __( 'Layout', 'ttf-one' ),
			'type'     => 'select',
			'choices'  => array(
				'footer-layout-1'  => __( 'Layout 1', 'ttf-one' ),
				'footer-layout-2'  => __( 'Layout 2', 'ttf-one' ),
				'footer-layout-3'  => __( 'Layout 3', 'ttf-one' ),
				'footer-layout-4'  => __( 'Layout 4', 'ttf-one' )
			),
			'priority' => $priority->add()
		)
	);

	// Hide social icons
	$setting_id = 'footer-hide-social';
	$wp_customize->add_setting(
		$setting_id,
		array(
			'default'           => 1,
			'type'              => 'theme_mod',
			'sanitize_callback' => 'absint',
		)
	);
	$wp_customize->add_control(
		$prefix . $setting_id,
		array(
			'settings' => $setting_id,
			'section'  => $section,
			'label'    => __( 'Show Social Icons', 'ttf-one' ),
			'type'     => 'checkbox',
			'priority' => $priority->add()
		)
	);

	// Hide credit line
	$setting_id = 'footer-hide-credit';
	$wp_customize->add_setting(
		$setting_id,
		array(
			'default'           => 1,
			'type'              => 'theme_mod',
			'sanitize_callback' => 'absint',
		)
	);
	$wp_customize->add_control(
		$prefix . $setting_id,
		array(
			'settings' => $setting_id,
			'section'  => $section,
			'label'    => __( 'Show Credit Line', 'ttf-one' ),
			'type'     => 'checkbox',
			'priority' => $priority->add()
		)
	);
}
endif;