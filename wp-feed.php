<?php
/**
Plugin Name: WP Feed Plugin
Plugin URI: http://muneeb.me/wordpress-feed-plugin/
Description: Control what content will be seen by your feed readers. Send unique content to your feed readers by using this plugin.
Author: Muneeb
Author URI: http://muneeb.me/wordpress-feed-plugin/
Version: 0.1
Copyright: 2013 Muneeb ur Rehman http://muneeb.me
**/

require plugin_dir_path( __FILE__ ) . 'config.php';

require FEED_PLUGIN_INCLUDE_DIRECTORY . 'functions.php';

load_wpfp();