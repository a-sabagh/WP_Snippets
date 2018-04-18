<?php

function rng_METANAME_metabox_input($post) {
    wp_nonce_field(basename(__FILE__), 'rng_nonce_METANAME');
    ?><?php
}

function rng_METANAME_metabox_save($post_id) {
    $is_autosave = wp_is_post_autosave($post_id);
    $is_revision = wp_is_post_revision($post_id);
    $is_valid_nonce = (isset($_POST['rng_nonce_METANAME']) && wp_verify_nonce($_POST['rng_nonce_METANAME'], basename(__FILE__))) ? TRUE : FALSE;
    if ($is_autosave || $is_revision || !$is_valid_nonce) {
        return;
    } else {
        //update_post_meta( $post_id, $meta_key, $meta_value, $prev_value );
    }
}

add_action('save_post', 'rng_METANAME_metabox_save');

function rng_METANAME_metabox_init() {
    //add_meta_box($id, $title, $callback, $screen , $context , $priority , $callback_args );
}

add_action('add_meta_boxes', 'rng_METANAME_metabox_init');
