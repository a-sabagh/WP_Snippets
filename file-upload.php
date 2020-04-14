<?php 
require_once(ABSPATH . "wp-admin" . '/includes/image.php');
require_once(ABSPATH . "wp-admin" . '/includes/file.php');
require_once(ABSPATH . "wp-admin" . '/includes/media.php');
if (isset( $_FILES['FILE_NAME'] )) {
    $id = wp_media_handle_upload('FILE_NAME',0);
    if( is_wp_error( $id ) ) {
        $id->get_error_message();
    }else{
        echo $id;
    }
}
