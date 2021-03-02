<?php

function gsa_admin_style() {
	wp_enqueue_style( 'admin-style', get_template_directory_uri() . '/build/styles/admin.css?t=' . time());
}
add_action('admin_enqueue_scripts', 'gsa_admin_style');

function gsa_after_theme_setup() {
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'editor-styles' );
	add_editor_style( array( 'build/styles/editor.css' ) );
}
add_action( 'after_setup_theme', 'gsa_after_theme_setup' );

function gsa_admin_menu() {
	// remove_menu_page('edit.php'); // posts
	remove_menu_page('edit-comments.php'); // comments

	remove_meta_box( 'commentstatusdiv','post','normal' ); // Comments Status Metabox
	remove_meta_box( 'commentsdiv','post','normal' ); // Comments Metabox
	remove_meta_box( 'trackbacksdiv','post','normal' ); // Trackback Metabox

	// if (get_current_user_id() != 1) {
	// 	remove_menu_page('edit.php?post_type=acf-field-group'); // ACF
	// }
}

add_action('admin_menu', 'gsa_admin_menu');

// function gsa_remove_menus() {
// 	if (get_current_user_id() != 1) {
//     	remove_menu_page('cptui_main_menu');
// 	}
// }
// add_action('admin_init', 'gsa_remove_menus');

// if( function_exists('acf_add_options_page') ) {
// 	acf_add_options_page([
// 	]);
// }

// function remove_textarea() {
// 	remove_post_type_support( 'essay', 'editor' );
// 	remove_post_type_support( 'news', 'editor' );
// }

// add_action('admin_init', 'remove_textarea');

function gsa_remove_revisions_metabox() {
	remove_meta_box( 'revisionsdiv','post','normal' );
	remove_meta_box( 'commentsdiv','post','normal' );

	remove_meta_box( 'revisionsdiv','page','normal' );
	remove_meta_box( 'commentsdiv','page','normal' );
}

add_action('admin_menu','gsa_remove_revisions_metabox');
