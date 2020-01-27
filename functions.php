<?php
//widget Location
add_action( 'widgets_init', 'my_awesome_sidebar' );
function my_awesome_sidebar() {

	$my_sidebars = array(
		[
			'name'          => 'Sidebar',
			'id'            => 'sidebar',
			'before_widget' => '<div  class="sidebar-module sidebar-module-inset">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>'
		],
		[
			'name'          => 'Box1',
			'id'            => 'box1',
			'before_widget' => '<div  class="box">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>'
		],
		[
			'name'          => 'Box2',
			'id'            => 'box2',
			'before_widget' => '<div  class="box">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>'
		],
		[
			'name'          => 'Box3',
			'id'            => 'box3',
			'before_widget' => '<div  class="box">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>'
		]
	);


	foreach ( $my_sidebars as $sidebar ) {
		$args = wp_parse_args( $sidebar );
		register_sidebar( $args );
	}

}

/**
 * Register Custom Navigation Walker
 */

function register_navwalker() {
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

register_nav_menus( array(
	'primary' => __( 'Primary Menu' ),
) );
add_action( 'after_setup_theme', 'register_navwalker' );
/**end navWalker*/

/**Post formats*/
add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );


/**show shot posts in index */
add_filter( 'excerpt_length', function () {
	return 40;
} );

/**Theme support*/

add_theme_support( 'post-thumbnails' );
add_image_size( 'featuredImageCropped', 700, 500, true );

//Customizer file
require get_template_directory().'/inc/customizer.php';