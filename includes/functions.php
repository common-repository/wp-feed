<?php

function load_wpfp() {


	load_wpfp_classes();

	do_action( 'wpfp_loaded' );
	
}

function load_wpfp_classes() {

	wpfp_include( 'class-wpfp-feed-post-type.php' );
	wpfp_include( 'class-wpfp-settings.php' );

	new Wpfp_Feed_Post_Type();
	new Wpfp_Settings();

}

function wpfp_include( $file_name, $require = true ) {

	if ( $require )
		require FEED_PLUGIN_INCLUDE_DIRECTORY . $file_name;
	else
		include FEED_PLUGIN_INCLUDE_DIRECTORY . $file_name;

}

function wpfp_view_path( $view_name, $is_php = true ) {

	if ( strpos( $view_name, '.php' ) === FALSE && $is_php )
		return FEED_PLUGIN_VIEW_DIRECTORY . $view_name . '.php';

	return FEED_PLUGIN_VIEW_DIRECTORY . $view_name;

}