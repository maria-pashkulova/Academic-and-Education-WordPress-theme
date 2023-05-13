<?php 
//feautured image
add_theme_support( 'post-thumbnails' );

//main menu

register_nav_menu('top-menu', 'Menu Top');

//custom logo
add_theme_support('custom-logo');


//widgets option
register_sidebar(array(
	'name' => __( 'Right Sidebar' ),
	'id' => 'right-sidebar',
	'description' => __( 'Widgets in this area will be shown on the right-hand side.' ),
	'before_widget' => '<div class="skills-box"><div class="skills-form">',
	'after_widget'  => '</div></div>',
	'before_title'  => '<span>',
	'after_title'   => '</span>'
));

register_sidebar(array(
	'name' => __( 'Bottom Widget' ),
	'id' => 'bottom-widget',
	'description' => __( 'Widgets in this area will be shown on the bottom.' ),
	'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '',
	'after_title'   => ''
));


//custom function
function get_category_id( $cat_name ) { 
	$cat = get_term_by( 'name', $cat_name, 'category' );
	if ( $cat ) {
		return $cat->term_id;
	}
	return 0;
}

