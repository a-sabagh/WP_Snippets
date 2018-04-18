    <?php
    add_action('do_meta_boxes', 'replace_featured_image_box');  
    function replace_featured_image_box()  
    {  
        remove_meta_box( 'postimagediv', 'page', 'side' );  
        add_meta_box('postimagediv', __('Page Background Image'), 'post_thumbnail_meta_box', 'page', 'side', 'low');  
    }