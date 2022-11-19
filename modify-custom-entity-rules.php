<?php
function woap_custom_case_studies_permalink_post( $permalink, $post, $leavename ) {
    // Get the categories for the post
    $category = get_the_category($post->ID); 
    if (  !empty($category) && $category[0]->cat_name == "Case Studies" ) {
        $permalink = trailingslashit( home_url('/case-studies/'. $post->post_name . '/' ) );
    }
    return $permalink;
}
add_filter( 'post_link', 'woap_custom_case_studies_permalink_post', 10, 3 );

// Modify the "case studies" category archive permalink
function wore_custom_case_studies_permalink_archive( $permalink, $term, $taxonomy ){
       // Get the category ID 
       $term_id = $term->term_id;
       $slug = $term->slug;
       $permalink = home_url("zone/{$slug}");
       //wp_send_json( func_get_args() ); 
       return $permalink;
}

add_filter( 'term_link', 'wore_custom_case_studies_permalink_archive', 10, 3 );

// Add rewrite rules so that WordPress delivers the correct content
function wore_custom_rewrite_rules( $wp_rewrite ) {
        // This rule will will match the post name in /case-study/%postname%/ structure
       $new_rules['^zone/([^/]+)/?$'] = 'index.php?product_cat=$matches[1]';
       //$new_rules['^zone/?$'] = 'index.php?cat=28';
       $wp_rewrite->rules = $new_rules + $wp_rewrite->rules;
       wp_send_json($wp_rewrite->rules);
       return $wp_rewrite;
}   
//add_action('generate_rewrite_rules', 'wore_custom_rewrite_rules');
