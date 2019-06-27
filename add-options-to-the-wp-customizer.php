<?php

function RNG_customizer_settings($wp_customize) {
    // add a setting for the site logo
    $wp_customize->add_setting('RNG_papular_product');
    // Add a control to set papular product
    $wp_customize->add_control(
            'RNG_papular_product', array(
        'type' => 'text',
        'priority' => 10,
        'section' => 'static_front_page',
        'label' => __('شناسه محصولات منتخب را وارد کنید', 'RNG'),
        'description' => __('شناسه ها را با , جدا کنی', 'RNG'),
        'input_attrs' => array(
            'style' => 'width: 100%;text-align:left;direction:ltr;margin-top: 10px;',
            'placeholder' => __('ID,ID,ID,ID,ID')
        )
            )
    );
}

add_action('customize_register', 'RNG_customizer_settings');
