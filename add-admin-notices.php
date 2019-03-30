<?php
function rng_admin_notice__error() {
	$class = 'notice notice-error';
	$message = __( 'Irks! An error has occurred.', 'sample-text-domain' );

	printf( '<div class="%1$s"><p>%2$s</p></div>', esc_attr( $class ), esc_html( $message ) ); 
}
add_action( 'admin_notices', 'rng_admin_notice__error' );
