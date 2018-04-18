<?php
add_action('admin_menu', 'my_remove_sub_menus');
function my_remove_sub_menus() {
    remove_submenu_page('edit.php', 'edit-tags.php?taxonomy=category');
    remove_submenu_page('edit.php', 'edit-tags.php?taxonomy=post_tag');
}

function rng_remove_metaboxes() {
    remove_meta_box( 'categorydiv' , 'post' , 'normal' ); 
    remove_meta_box( 'tagsdiv-post_tag' , 'post' , 'normal' ); 
}
add_action( 'admin_menu' , 'rng_remove_metaboxes' );