<?php
function RNG_new_customizer_settings($wp_customize) {
	// add a setting for the site logo
	$wp_customize->add_setting('RNG_home_categories');
	// Add a control to upload the logo
	$wp_customize->add_control
		(
			'RNG_home_categories',
			array(
				'type' => 'text',
				'priority' => 10,
				'section' => 'static_front_page',
				'label' => __('LABEL'),
				'description' => __('DESCRIPTION'),
				'input_attrs' => array(
					'style' => 'width: 100%;text-align:left;direction:ltr;margin-top: 10px;',
					'placeholder' => __('ID,ID,ID,ID,ID')
				)
			)
		);
}

add_action('customize_register', 'RNG_new_customizer_settings');
