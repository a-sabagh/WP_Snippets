<?php 
if ( ! function_exists('rng_create_post_type') ) {

// Register Custom Post Type
function rng_create_post_type() {

	$labels = array(
		'name'                  => _x( 'Post Types Plural', 'Post Type General Name', 'translate_name' ),
		'singular_name'         => _x( 'Post Type Singular', 'Post Type Singular Name', 'translate_name' ),
		'menu_name'             => __( 'Post Types', 'translate_name' ),
		'name_admin_bar'        => __( 'Post Type', 'translate_name' ),
		'archives'              => __( 'Item Archives', 'translate_name' ),
		'attributes'            => __( 'Item Attributes', 'translate_name' ),
		'parent_item_colon'     => __( 'Parent Item:', 'translate_name' ),
		'all_items'             => __( 'All Items', 'translate_name' ),
		'add_new_item'          => __( 'Add New Item', 'translate_name' ),
		'add_new'               => __( 'Add New', 'translate_name' ),
		'new_item'              => __( 'New Item', 'translate_name' ),
		'edit_item'             => __( 'Edit Item', 'translate_name' ),
		'update_item'           => __( 'Update Item', 'translate_name' ),
		'view_item'             => __( 'View Item', 'translate_name' ),
		'view_items'            => __( 'View Items', 'translate_name' ),
		'search_items'          => __( 'Search Item', 'translate_name' ),
		'not_found'             => __( 'Not found', 'translate_name' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'translate_name' ),
		'featured_image'        => __( 'Featured Image', 'translate_name' ),
		'set_featured_image'    => __( 'Set featured image', 'translate_name' ),
		'remove_featured_image' => __( 'Remove featured image', 'translate_name' ),
		'use_featured_image'    => __( 'Use as featured image', 'translate_name' ),
		'insert_into_item'      => __( 'Insert into item', 'translate_name' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'translate_name' ),
		'items_list'            => __( 'Items list', 'translate_name' ),
		'items_list_navigation' => __( 'Items list navigation', 'translate_name' ),
		'filter_items_list'     => __( 'Filter items list', 'translate_name' ),
	);
	$args = array(
        'public'                => true,
		'label'                 => __( 'Post Type Singular', 'translate_name' ),
		'description'           => __( 'Post Type Description', 'translate_name' ),
        'labels'                => $labels,
        'exclude_from_search'   => true,
        'publicly_queryable'    => true,
        'show_ui'               => true,
		'show_in_nav_menus'     => true,
		'show_in_menu'			=> true,
		'show_in_admin_bar'		=> true,
		'menu_position'			=> 5,
		// 'menu_icon' 			=> get_bloginfo('template_directory') . '/images/portfolio-icon.png',
		'menu_icon'				=> 'dashicon-groups',
		'has_archive'			=> true,
		'capability_type'		=> array('book','books'),
		'capabilities' 			=> array(
			'edit_post'          => 'edit_book', 
			'read_post'          => 'read_book', 
			'delete_post'        => 'delete_book', 
			'edit_posts'         => 'edit_books', 
			'edit_others_posts'  => 'edit_others_books', 
			'publish_posts'      => 'publish_books',       
			'read_private_posts' => 'read_private_books', 
			'create_posts'       => 'edit_books', 
		),
		'supports'              => array( 'title', 'editor', 'thumbnail', 'page-attributes', 'post-formats' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => true,
	);
	register_post_type( 'book', $args );

}
add_action( 'init', 'rng_create_post_type', 0 );

}