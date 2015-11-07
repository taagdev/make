<?php
/**
 * @package Make
 */

// Bail if this isn't being included inside of a MAKE_Customizer_ControlsInterface.
if ( ! isset( $this ) || ! $this instanceof MAKE_Customizer_ControlsInterface ) {
	return;
}

// Panel ID
$panel = $this->prefix . 'layout';

// Global
$this->add_section_definitions( 'layout-global', array(
	'panel'    => $panel,
	'title'    => __( 'Global', 'make' ),
	'controls' => array(
		'general-layout' => array(
			'setting' => true,
			'control' => array(
				'control_type' => 'MAKE_Customizer_Control_Radio',
				'label'        => __( 'Site Layout', 'make' ),
				'type'         => 'radio',
				'mode'         => 'buttonset',
				'choices'      => $this->thememod()->get_choice_set( 'general-layout' ),
			),
		),
	),
) );

// Header
$this->add_section_definitions( 'header', array(
	'panel'    => $panel,
	'title'    => __( 'Header', 'make' ),
	'controls' => array(
		'header-layout-group'        => array(
			'control' => array(
				'control_type' => 'MAKE_Customizer_Control_Misc',
				'label'        => __( 'Layout', 'make' ),
				'type'         => 'group-title',
			),
		),
		'header-layout'              => array(
			'setting' => true,
			'control' => array(
				'label'   => __( 'Header Layout', 'make' ),
				'type'    => 'select',
				'choices' => $this->thememod()->get_choice_set( 'header-layout' ),
			),
		),
		'header-branding-position'   => array(
			'setting' => true,
			'control' => array(
				'control_type' => 'MAKE_Customizer_Control_Radio',
				'label'        => __( 'Show Title/Logo On', 'make' ),
				'type'         => 'radio',
				'mode'         => 'buttonset',
				'choices'      => $this->thememod()->get_choice_set( 'header-branding-position' ),
			),
		),
		'header-bar-content-layout'  => array(
			'setting' => true,
			'control' => array(
				'control_type' => 'MAKE_Customizer_Control_Radio',
				'label'        => __( 'Header Bar Layout', 'make' ),
				'type'         => 'radio',
				'mode'         => 'buttonset',
				'choices'      => $this->thememod()->get_choice_set( 'header-bar-content-layout' ),
			),
		),
		'header-padding-heading'     => array(
			'control' => array(
				'control_type' => 'MAKE_Customizer_Control_Misc',
				'type'         => 'heading',
				'label'        => __( 'Padding', 'make' ),
			),
		),
		'header-hide-padding-bottom' => array(
			'setting' => true,
			'control' => array(
				'label' => __( 'Remove padding beneath header', 'make' ),
				'type'  => 'checkbox',
			),
		),
		'header-options-group'       => array(
			'control' => array(
				'control_type' => 'MAKE_Customizer_Control_Misc',
				'label'        => __( 'Options', 'make' ),
				'type'         => 'group-title',
			),
		),
		'header-text'                => array(
			'setting' => true,
			'control' => array(
				'label'       => __( 'Header Bar Text', 'make' ),
				'description' => __( 'This text only appears if a custom menu has not been assigned to the Header Bar Menu location in the Navigation section.', 'make' ),
				'type'        => 'text',
			),
		),
		'header-options-heading'     => array(
			'control' => array(
				'control_type' => 'MAKE_Customizer_Control_Misc',
				'type'         => 'heading',
				'label'        => __( 'Optional Header Elements', 'make' ),
			),
		),
		'header-show-search'         => array(
			'setting' => true,
			'control' => array(
				'label' => __( 'Show search field', 'make' ),
				'type'  => 'checkbox',
			),
		),
		'header-show-social'         => array(
			'setting' => true,
			'control' => array(
				'label' => __( 'Show social icons', 'make' ),
				'type'  => 'checkbox',
			),
		),
		'font-size-header-bar-icon'  => array(
			'setting' => true,
			'control' => array(
				'control_type' => 'MAKE_Customizer_Control_Range',
				'label'        => __( 'Icon Size (px)', 'make' ),
				'type'         => 'range',
				'input_attrs'  => array(
					'min'  => 6,
					'max'  => 100,
					'step' => 1,
				),
			),
		),
	),
) );

// Footer
$this->add_section_definitions( 'footer', array(
	'panel'    => $panel,
	'title'    => __( 'Footer', 'make' ),
	'controls' => array(
		'footer-widgets-group'    => array(
			'control' => array(
				'control_type' => 'MAKE_Customizer_Control_Misc',
				'label'        => __( 'Widgets', 'make' ),
				'type'         => 'group-title',
			),
		),
		'footer-widget-areas'     => array(
			'setting' => true,
			'control' => array(
				'control_type' => 'MAKE_Customizer_Control_Radio',
				'label'        => __( 'Number of Widget Areas', 'make' ),
				'type'         => 'radio',
				'mode'         => 'buttonset',
				'choices'      => $this->thememod()->get_choice_set( 'footer-widget-areas' ),
			),
		),
		'footer-layout-group'     => array(
			'control' => array(
				'control_type' => 'MAKE_Customizer_Control_Misc',
				'label'        => __( 'Layout', 'make' ),
				'type'         => 'group-title',
			),
		),
		'footer-layout'           => array(
			'setting' => true,
			'control' => array(
				'label'   => __( 'Footer Layout', 'make' ),
				'type'    => 'select',
				'choices' => $this->thememod()->get_choice_set( 'footer-layout' ),
			),
		),
		'footer-padding-heading'  => array(
			'control' => array(
				'control_type' => 'MAKE_Customizer_Control_Misc',
				'type'         => 'heading',
				'label'        => __( 'Padding', 'make' ),
			),
		),
		'footer-hide-padding-top' => array(
			'setting' => true,
			'control' => array(
				'label' => __( 'Remove padding above footer', 'make' ),
				'type'  => 'checkbox',
			),
		),
		'footer-options-group'    => array(
			'control' => array(
				'control_type' => 'MAKE_Customizer_Control_Misc',
				'label'        => __( 'Options', 'make' ),
				'type'         => 'group-title',
			),
		),
		'footer-text'             => array(
			'setting' => true,
			'control' => array(
				'label' => __( 'Footer Text', 'make' ),
				'type'  => 'text',
			),
		),
		'footer-options-heading'  => array(
			'control' => array(
				'control_type' => 'MAKE_Customizer_Control_Misc',
				'type'         => 'heading',
				'label'        => __( 'Optional Footer Elements', 'make' ),
			),
		),
		'footer-show-social'      => array(
			'setting' => true,
			'control' => array(
				'label' => __( 'Show social icons', 'make' ),
				'type'  => 'checkbox',
			),
		),
		'font-size-footer-icon'   => array(
			'setting' => true,
			'control' => array(
				'control_type' => 'MAKE_Customizer_Control_Range',
				'label'        => __( 'Icon Size (px)', 'make' ),
				'type'         => 'range',
				'input_attrs'  => array(
					'min'  => 6,
					'max'  => 100,
					'step' => 1,
				),
			),
		),
	),
) );

// Views
$views = array(
	'blog'    => __( 'Blog (Posts Page)', 'make' ),
	'archive' => __( 'Archives', 'make' ),
	'search'  => __( 'Search Results', 'make' ),
	'post'    => __( 'Posts', 'make' ),
	'page'    => __( 'Pages', 'make' ),
);

foreach ( $views as $view => $label ) {
	$prefix = "layout-$view-";
	$controls = array();

	// Header, footer, sidebars
	$controls = array_merge( $controls, array(
		$prefix . 'sidebars-heading'          => array(
			'control' => array(
				'control_type' => 'MAKE_Customizer_Control_Misc',
				'type'         => 'group-title',
				'label'        => __( 'Header, Footer, Sidebars', 'make' ),
			),
		),
		$prefix . 'hide-header'               => array(
			'setting' => true,
			'control' => array(
				'label' => __( 'Hide site header', 'make' ),
				'type'  => 'checkbox',
			),
		),
		$prefix . 'hide-footer'               => array(
			'setting' => true,
			'control' => array(
				'label' => __( 'Hide site footer', 'make' ),
				'type'  => 'checkbox',
			),
		),
		$prefix . 'sidebar-left'              => array(
			'setting' => true,
			'control' => array(
				'label' => __( 'Show left sidebar', 'make' ),
				'type'  => 'checkbox',
			),
		),
		$prefix . 'sidebar-right'             => array(
			'setting' => true,
			'control' => array(
				'label' => __( 'Show right sidebar', 'make' ),
				'type'  => 'checkbox',
			),
		),
	) );

	// Note about sidebars for pages
	if ( 'page' === $view ) {
		$controls = array_merge( $controls, array(
			$prefix . 'sidebars-text' => array(
				'control' => array(
					'control_type' => 'MAKE_Customizer_Control_Misc',
					'type'         => 'text',
					'description'  => __( 'Sidebars are not available on pages using the Builder Template.', 'make' ),
				),
			),
		) );
	}

	// Featured images, post date, post author
	$controls = array_merge( $controls, array(
		'featured-images-group-' . $view      => array(
			'control' => array(
				'control_type' => 'MAKE_Customizer_Control_Misc',
				'label'        => __( 'Featured Images', 'make' ),
				'type'         => 'group-title',
			),
		),
		$prefix . 'featured-images'           => array(
			'setting' => true,
			'control' => array(
				'label'   => __( 'Location', 'make' ),
				'type'    => 'select',
				'choices' => $this->thememod()->get_choice_set( $prefix . 'featured-images' ),
			),
		),
		$prefix . 'featured-images-alignment' => array(
			'setting' => true,
			'control' => array(
				'control_type' => 'MAKE_Customizer_Control_Radio',
				'label'        => __( 'Alignment', 'make' ),
				'type'         => 'radio',
				'mode'         => 'buttonset',
				'choices'      => $this->thememod()->get_choice_set( $prefix . 'featured-images-alignment' ),
			),
		),
		'post-date-group-' . $view            => array(
			'control' => array(
				'control_type' => 'MAKE_Customizer_Control_Misc',
				'label'        => __( 'Post Date', 'make' ),
				'type'         => 'group-title',
			),
		),
		$prefix . 'post-date'                 => array(
			'setting' => true,
			'control' => array(
				'label'   => __( 'Style', 'make' ),
				'type'    => 'select',
				'choices' => $this->thememod()->get_choice_set( $prefix . 'post-date' ),
			),
		),
		$prefix . 'post-date-location'        => array(
			'setting' => true,
			'control' => array(
				'control_type' => 'MAKE_Customizer_Control_Radio',
				'label'        => __( 'Location', 'make' ),
				'type'         => 'radio',
				'mode'         => 'buttonset',
				'choices'      => $this->thememod()->get_choice_set( $prefix . 'post-date-location' ),
			),
		),
		'post-author-group-' . $view          => array(
			'control' => array(
				'control_type' => 'MAKE_Customizer_Control_Misc',
				'label'        => __( 'Post Author', 'make' ),
				'type'         => 'group-title',
			),
		),
		$prefix . 'post-author'               => array(
			'setting' => true,
			'control' => array(
				'label'   => __( 'Style', 'make' ),
				'type'    => 'select',
				'choices' => $this->thememod()->get_choice_set( $prefix . 'post-author' ),
			),
		),
		$prefix . 'post-author-location'      => array(
			'setting' => true,
			'control' => array(
				'control_type' => 'MAKE_Customizer_Control_Radio',
				'label'        => __( 'Location', 'make' ),
				'type'         => 'radio',
				'mode'         => 'buttonset',
				'choices'      => $this->thememod()->get_choice_set( $prefix . 'post-author-location' ),
			),
		),
	) );

	// Content
	if ( in_array( $view, array( 'blog', 'archive', 'search' ) ) ) {
		$controls = array_merge( $controls, array(
			'content-group-' . $view => array(
				'control' => array(
					'control_type' => 'MAKE_Customizer_Control_Misc',
					'label'        => __( 'Content', 'make' ),
					'type'         => 'group-title',
				),
			),
			$prefix . 'auto-excerpt' => array(
				'setting' => true,
				'control' => array(
					'label' => __( 'Generate excerpts automatically', 'make' ),
					'type'  => 'checkbox',
				),
			),
		) );
	}

	// Post meta
	if ( in_array( $view, array( 'blog', 'archive', 'search', 'post' ) ) ) {
		$controls = array_merge( $controls, array(
			'post-meta-group-' . $view  => array(
				'control' => array(
					'control_type' => 'MAKE_Customizer_Control_Misc',
					'label'        => __( 'Post Meta', 'make' ),
					'type'         => 'group-title',
				),
			),
			$prefix . 'show-categories' => array(
				'setting' => true,
				'control' => array(
					'label' => __( 'Show categories', 'make' ),
					'type'  => 'checkbox',
				),
			),
			$prefix . 'show-tags'       => array(
				'setting' => true,
				'control' => array(
					'label' => __( 'Show tags', 'make' ),
					'type'  => 'checkbox',
				),
			),
		) );
	}

	// Comment count
	$controls = array_merge( $controls, array(
		'comment-count-group-' . $view     => array(
			'control' => array(
				'control_type' => 'MAKE_Customizer_Control_Misc',
				'label'        => __( 'Comment Count', 'make' ),
				'type'         => 'group-title',
			),
		),
		$prefix . 'comment-count'          => array(
			'setting' => true,
			'control' => array(
				'label'   => __( 'Style', 'make' ),
				'type'    => 'select',
				'choices' => $this->thememod()->get_choice_set( $prefix . 'comment-count' ),
			),
		),
		$prefix . 'comment-count-location' => array(
			'setting' => true,
			'control' => array(
				'control_type' => 'MAKE_Customizer_Control_Radio',
				'label'        => __( 'Location', 'make' ),
				'type'         => 'radio',
				'mode'         => 'buttonset',
				'choices'      => $this->thememod()->get_choice_set( $prefix . 'comment-count-location' ),
			),
		),
	) );

	// Page title
	if ( 'page' === $view ) {
		$controls = array_merge( $controls, array(
			$prefix . 'pagetitle-heading' => array(
				'control' => array(
					'control_type' => 'MAKE_Customizer_Control_Misc',
					'type'         => 'group-title',
					'label'        => __( 'Page Title', 'make' ),
				),
			),
			$prefix . 'hide-title'        => array(
				'setting' => true,
				'control' => array(
					'label' => __( 'Hide title', 'make' ),
					'type'  => 'checkbox',
				),
			),
		) );
	}

	// Breadcrumbs
	if ( function_exists( 'yoast_breadcrumb' ) && in_array( $view, array( 'archive', 'search', 'post', 'page' ) ) ) {
		$controls = array_merge( $controls, array(
			'breadcrumb-group-' . $view  => array(
				'control' => array(
					'control_type' => 'MAKE_Customizer_Control_Misc',
					'label'        => __( 'Breadcrumbs', 'make' ),
					'description'  => esc_html__( 'The Yoast SEO plugin enables this option.', 'make' ),
					'type'         => 'group-title',
				),
			),
			$prefix . 'yoast-breadcrumb' => array(
				'setting' => true,
				'control' => array(
					'label' => __( 'Show breadcrumbs', 'make' ),
					'type'  => 'checkbox',
				),
			),
		) );
	}

	// Add the definitions
	$this->add_section_definitions( 'layout-' . $view, array(
		'panel'   => $panel,
		'title'   => $label,
		'controls' => $controls,
	) );
}

// Check for deprecated filters
foreach ( array( 'make_customizer_contentlayout_sections', 'make_customizer_header_sections', 'make_customizer_footer_sections' ) as $filter ) {
	if ( has_filter( $filter ) ) {
		$this->compatibility->deprecated_hook(
			$filter,
			'1.7.0',
			__( 'To add or modify Customizer sections and controls, use the make_customizer_sections hook instead, or the core $wp_customize methods.', 'make' )
		);
	}
}