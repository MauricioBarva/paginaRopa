<?php

register_nav_menus( array(
	'menu-top' => 'Menu Principal',
	'menu-footer' => 'Menu Footer'
));

add_theme_support('post-thumbnails');

add_image_size('homepage-thumb',745,342,true);

register_sidebar(array(
	'name' => 'Destacados',
	'before_widget' => '<div class="articulos">',
	'after_widget' => '</div>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
 ));

?>