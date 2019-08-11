<?php
function rng_register_private_taxonomy() {
    $args = array(
        'label'        => __( 'Genre', 'textdomain' ),
        'public'       => false,
        'rewrite'      => false,
        'hierarchical' => true
    );
     
    register_taxonomy( 'genre', 'book', $args );
}
add_action( 'init', 'rng_register_private_taxonomy', 0 );
