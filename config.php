<?php

define( 'FEED_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );

define( 'FEED_PLUGIN_DIR_NAME', dirname( plugin_basename( __FILE__ ) ) );

define( 'FEED_PLUGIN_PREFIX', 'wpfp' ); //WordPress Feed Plugin

define( 'FEED_PLUGIN_FEED_POST_TYPE', FEED_PLUGIN_PREFIX . '_feed' );

if ( ! defined( 'FEED_PLUGIN_LINK_FEED_SHORTCODE' ) )
	define( 'FEED_PLUGIN_LINK_FEED_SHORTCODE', 'feed_content' );

if ( ! defined( 'FEED_PLUGIN_CAPABILITY' ) )
	define( 'FEED_PLUGIN_CAPABILITY', 'manage_options' );

define( 'FEED_PLUGIN_INCLUDE_DIRECTORY_NAME', 'includes' );

define( 'FEED_PLUGIN_VIEW_DIRECTORY_NAME', 'views' );

define( 'FEED_PLUGIN_INCLUDE_DIRECTORY', FEED_PLUGIN_PATH .
									  	FEED_PLUGIN_INCLUDE_DIRECTORY_NAME
							 		  	. DIRECTORY_SEPARATOR );

define( 'FEED_PLUGIN_VIEW_DIRECTORY', FEED_PLUGIN_PATH .
									  	FEED_PLUGIN_VIEW_DIRECTORY_NAME
							 		  	. DIRECTORY_SEPARATOR );

define( 'FEED_PLUGIN_MAIN_FILE', FEED_PLUGIN_PATH . 'wp-feed.php' );

define( 'FEED_PLUGIN_VERSION', '0.1' );