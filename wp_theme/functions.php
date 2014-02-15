<?php
register_nav_menus(array(
		'main_menu' => 'Main Menu'
	));

register_sidebar( array (
	'name' => 'Main Sidebar',
	'id' => 'main_sidebar',
	'before_widget' => '<div id="%1$s" class="widget-container well %2$s">',
	'after_widget' => "</div>",
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
));


function is_sidebar_active( $index ) {
	global $wp_registered_sidebars;

	$widgetcolums = wp_get_sidebars_widgets();

	if ($widgetcolums[$index]) return true;
	return false;
} // end is_sidebar_active
?>