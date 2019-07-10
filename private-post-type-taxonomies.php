<?php

function register_resources() {
    register_illness_cat();
    register_illness_tag();
    register_illness();
}

function register_illness() {

    $labels = array();

    $args = array(
        'public' => false,
        'label' => 'پرسش و پاسخ',
        'labels' => $labels,
        'show_in_menu' => true,
        'show_in_admin_bar' => true,
        'show_ui' => true,
        'show_in_nav_menus' => false,
        'exclude_from_search' => true,
        'menu_position' => 5,
        'has_archive' => false,
        'supports' => array('title', 'editor', 'thumbnail'),
        'taxonomies' => array('ddr_qa_tag', 'ddr_qa_cat'),
        'hierarchical' => true,
        'rewrite' => array('slug' => 'illness')
    );
    register_post_type('ddr_qa', $args);
}

function register_illness_tag() {
    $labels = array();

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => false,
        'hierarchical' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => false,
        'show_tagcloud' => false,
        'show_in_quick_edit' => true,
        'show_admin_column' => true,
        'rewrite' => array('slug' => 'qa-tag'),
    );

    register_taxonomy('ddr_qa_tag', array(), $args);
}

function register_illness_cat() {
    $labels = array();
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => false,
        'hierarchical' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => false,
        'show_tagcloud' => false,
        'show_in_quick_edit' => true,
        'show_admin_column' => true,
        'rewrite' => array('slug' => 'qa-cat'),
    );

    register_taxonomy('ddr_qa_cat', array(), $args);
}

add_action("init", "register_resources");
