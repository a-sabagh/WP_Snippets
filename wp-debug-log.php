<?php
#log errors in ./wp-content/debug.log and never show errors on the front end.
define('WP_DEBUG',true);
define('WP_DEBUG_LOG',true);
define('WP_DEBUG_DISPLAY',false);
@ini_set('display_errors',false);
