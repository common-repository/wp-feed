<?php

class Wpfp_Settings {

	function __construct() {

		$this->start();

	}

	function start() {

		$this->hooks();
		$this->filters();

	}



	function hooks() {

		//Add the 'WP Feed' admin dashboard menu

		add_action( 'admin_menu', array( $this, 'admin_menu' ) );

	}

	function filters() {

		//No filters yet

	}

	function admin_menu() {

		$page_title = __( 'Feeds', FEED_PLUGIN_PREFIX );
		$menu_title = __( 'WP Feed', FEED_PLUGIN_PREFIX );
		$capability = FEED_PLUGIN_CAPABILITY;
		$menu_slug = 'edit.php?post_type=' . FEED_PLUGIN_FEED_POST_TYPE;

		add_object_page( $page_title, $menu_title, $capability,
			$menu_slug );

	}
	

}