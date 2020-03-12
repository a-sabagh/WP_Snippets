<?php 
add_filter( 'site_transient_update_plugins', function(){
      if ( isset($value) && is_object($value) ) {
    if ( isset( $value->response['plugin-folder/plugin.php'] ) ) {
      unset( $value->response['plugin-folder/plugin.php'] );
    }
  }
  return $value;
} );
