<?php
if (!function_exists("RNG_add_col")) {

    function RNG_add_col($columns) {
        return $columns + array('tax_id' => 'ID');
    }

}
if (!function_exists("RNG_show_id")) {

    function RNG_show_id($v, $name, $id) {
        return 'tax_id' === $name ? $id : $v;
    }

}

add_action("manage_edit-category_columns", 'RNG_add_col');
add_filter("manage_edit-category_sortable_columns", 'RNG_add_col');
add_filter("manage_category_custom_column", 'RNG_show_id', 10, 3);

/*
## You can add to all taxonomies with this code: ##
foreach ( get_taxonomies() as $taxonomy ) {
    add_action( "manage_edit-${taxonomy}_columns",          'RNG_show_id' );
    add_filter( "manage_edit-${taxonomy}_sortable_columns", 'RNG_show_id' );
    add_filter( "manage_${taxonomy}_custom_column",         'RNG_show_id', 10, 3 );
}
*/
