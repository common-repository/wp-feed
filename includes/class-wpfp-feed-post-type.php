<?php

class Wpfp_Feed_Post_Type {

	private $slug = FEED_PLUGIN_FEED_POST_TYPE;

	function __construct() {

		$this->start();

	}

	function start() {

		$this->hooks();

		$this->filters();

	}

	function hooks() {


		add_action( 'init', array( $this, 'register_post_type' ) );

	}

	function filters() {

		add_filter( 'post_updated_messages',
			array( $this, 'custom_update_messages' ) );

		add_filter( 'request', array( $this, 'feed_request' ) );

	}

	function register_post_type() {


		$labels = array(
			'name' => _x( 'Feeds', 'post type general name' ),
			'singular_name' => _x( 'Feed Posts', 'post type singular name' ),
			'add_new' => _x( 'Add New', 'Feed' ),
			'add_new_item' => __( 'Add New Feed Post' ),
			'edit_item' => __( 'Edit Feed Post' ),
			'new_item' => __( 'New Feed Post' ),
			'all_items' => __( 'All Feed Posts' ),
			'view_item' => __( 'View Feed Post' ),
			'search_items' => __( 'Search Feed Post' ),
			'not_found' =>  __( 'No Feed Posts found' ),
			'not_found_in_trash' => __( 'No Feed Posts found in Trash' ),
			'parent_item_colon' => '',
			'menu_name' => __( 'Feeds' )
		);

		$args = array(
			'labels' => $labels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'show_in_menu' => false,
			'query_var' => true,
			'rewrite' => false,
			'capability_type' => 'post',
			'has_archive' => false,
			'hierarchical' => false,
			'menu_position' => null,
			'supports' => array( 'title', 'editor' )
		);

		register_post_type( $this->slug, $args );

	}

	function custom_update_messages( $messages ) {

		global $post;

		$messages[$this->slug] = array(
			0 => '',
			1 =>  __( 'Feed Post updated.' ),
			2 => __( 'Custom field updated.' ),
			3 => __( 'Custom field deleted.' ),
			4 => __( 'Feed Post updated.' ),
			5 => isset( $_GET['revision'] ) ? sprintf( __( 'Feed Post restored to revision from %s' ), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
			6 => __( 'Feed Post created.' ),
			7 => __( 'Feed Post saved.' ),
			8 => '',
			9 => sprintf( __( 'Feed Post scheduled for: <strong>%1$s</strong>.' ),
				date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ) ),
			10 => __( 'Feed Post draft updated.' )
		);

		return $messages;

	}

	function feed_request( $qv ) {

		if ( ! isset( $qv['feed'] ) )
			return $qv;

		if ( empty( $qv['post_type'] ) )
			$qv['post_type'] = array( $this->slug );
		else
			$qv['post_type'][] = array( $this->slug );

		return $qv;

	}

}