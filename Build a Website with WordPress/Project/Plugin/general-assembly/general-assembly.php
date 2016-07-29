<?php

/**
 * Plugin Name:       General Assembly
 * Plugin URI:        http://generalassemb.ly/
 * Description:       Let's build a plugin! 😸
 * Author:            Tracy Rotton
 * Author URI:        https://taupecat.com
 */

/**
 * If this file is called directly, abort.
 */
// if ( ! defined( 'WPINC' ) ) {
// 	die;
// }

/**
 * Build a shortcode
 */

// add_shortcode( 'last_modified', 'ga_last_modified' );

// function ga_last_modified() {
// 	global $post;

// 	$last_modified = $post->post_modified;

// 	$last_modified = mktime( $last_modified );

// 	$last_modified = 'Last modified: ' . date( 'F j, Y - g:i A', $last_modified );

// 	$last_modified = apply_filters( 'the_content', $last_modified );

// 	return $last_modified;
// }

/**
 * Build a custom post type
 */

// add_action( 'init', 'ga_album_cpt' );

// function ga_album_cpt() {

// 	$labels = array(
// 		'name'				=> __( 'Albums' ),
// 		'singular_name'		=> __( 'Album' )
// 	);

// 	$args = array(
// 		'labels'			=> $labels,
// 		'public'			=> true,
// 		'has_archive'		=> true,
// 		'supports'			=> array( 'title', 'thumbnail' )
// 	);

// 	register_post_type( 'albums', $args );
// }
