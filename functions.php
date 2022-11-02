<?php
/**
 *
 * @package [Parent Theme]
 * @author  gaviasthemes <gaviasthemes@gmail.com>
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU Public License
 * 
 */

function enzio_child_scripts() {
   wp_enqueue_style( 'enzio-parent-style', get_template_directory_uri(). '/style.css');
   wp_enqueue_style( 'enzio-child-style', get_stylesheet_uri());
}
add_action( 'wp_enqueue_scripts', 'enzio_child_scripts', 9999 );

add_theme_support( 'post-thumbnails' );

// custom Code

function wporg_custom_post_type() {
	
	register_post_type('case_study', array(
		'public'    =>  true,
		'has_archive'  =>  true,        
		'supports'  =>  array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields'),
					'show_in_rest'  =>  true,
		'rewrite'   =>  array('slug' => 'case-studies'),
		'labels'    =>  array(
		'name'  =>  'Case Studies',
		'add_new_item'  =>  'Add New Case Study',
		'edit_item' =>  'Edit Case Study',
		'all_items' =>  'All Case Studies',
		'sinuglar_name' =>  'Case Study'
		),
		'menu_icon' =>  'dashicons-networking',
	));

   // Session Custom Post Registration

   register_post_type('custom_programs', array(
		'public'    =>  true,
		'has_archive'  =>  true,        
		'supports'  =>  array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields'),
					'show_in_rest'  =>  true,
		'rewrite'   =>  array('slug' => 'Programs'),
		'labels'    =>  array(
		'name'  =>  'Programs',
		'add_new_item'  =>  'Add New Program',
		'edit_item' =>  'Edit Program',
		'all_items' =>  'All Programs',
		'singular_name' =>  'program'
		),
		'menu_icon' =>  'dashicons-calendar',
));


// Success Stories
   register_post_type('success_stories', array(
		'public'    =>  true,
		'has_archive'  =>  true,        
		'supports'  =>  array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields'),
					'show_in_rest'  =>  true,
		'rewrite'   =>  array('slug' => 'success-stories'),
		'labels'    =>  array(
		'name'  =>  'Success Stories',
		'add_new_item'  =>  'Add New Success Story',
		'edit_item' =>  'Edit Success Story',
		'all_items' =>  'All Success Story',
		'singular_name' =>  'Success Story'
		),
		'menu_icon' =>  'dashicons-format-quote',
));

}


// include custom shortcodes

include('custom-shortcodes.php');






add_action('init', 'wporg_custom_post_type');