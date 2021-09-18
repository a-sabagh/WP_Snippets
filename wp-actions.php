<?php

add_action ( 'shutdown', function() use ( &$wp_actions ) {
    print_r( $wp_actions );  
    #print_r( $GLOBALS['wp_actions'] );
} );

/*
[mu_plugin_loaded] => 1
[muplugins_loaded] => 1
[registered_taxonomy] => 10
[registered_post_type] => 20
[plugins_loaded] => 1
[sanitize_comment_cookies] => 1
[wp_roles_init] => 1
[setup_theme] => 1
[unload_textdomain] => 1
[load_textdomain] => 3
[after_setup_theme] => 1
[auth_cookie_malformed] => 1
[set_current_user] => 1
[init] => 1
[widgets_init] => 1
[register_sidebar] => 3
[wp_register_sidebar_widget] => 45
[wp_default_scripts] => 1
[wp_sitemaps_init] => 1
[wp_loaded] => 1
[parse_request] => 1
[send_headers] => 1
[parse_tax_query] => 9
[parse_query] => 5
[pre_get_posts] => 5
[posts_selection] => 5
[wp] => 1
[template_redirect] => 1
[get_header] => 1
[wp_head] => 1
[wp_enqueue_scripts] => 1
[wp_default_styles] => 1
[enqueue_block_assets] => 1
[wp_print_styles] => 1
[wp_print_scripts] => 1
[wp_body_open] => 1
[parse_term_query] => 1
[pre_get_terms] => 1
[loop_start] => 1
[the_post] => 1
[get_template_part_content] => 1
[get_template_part] => 1
[parse_comment_query] => 2
[pre_get_comments] => 2
[comment_form_comments_closed] => 1
[loop_end] => 1
[get_sidebar] => 1
[dynamic_sidebar_before] => 1
[dynamic_sidebar] => 1
[dynamic_sidebar_after] => 1
[get_footer] => 1
[twentytwelve_credits] => 1
[wp_footer] => 1
[wp_print_footer_scripts] => 1
[shutdown] => 1
*/
