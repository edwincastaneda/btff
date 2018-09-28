<?php 
function btff_scripts() {
	wp_enqueue_style( 'btff-styles', get_template_directory_uri()."/assets/css/styles.min.css" );
	wp_enqueue_script( 'btff-script', get_template_directory_uri() . '/assets/js/script.min.js', array('jquery'), '20151215', true );

}
add_action( 'wp_enqueue_scripts', 'btff_scripts' );
