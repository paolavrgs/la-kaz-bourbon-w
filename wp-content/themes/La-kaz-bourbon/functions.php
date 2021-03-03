<?php
/* Imagenes */
the_post_thumbnail();
the_post_thumbnail('thumbnail');       // Thumbnail (por defecto 150px x 150px max)
the_post_thumbnail('medium');          // Media resolución (por defecto 300px x 300px max)
the_post_thumbnail('large');           // Alta resolución (por defecto 640px x 640px max)
the_post_thumbnail('full');            // Resolución original de la imagen (sin modificar)

the_post_thumbnail(array(100, 100));

add_theme_support('post-thumbnails');


/* Widgets */

function apk_register_sidebar()
{
	register_sidebar(array(
		'name'             => __('Sidebar principal', 'apk'),
		'id'               => 'main_sidebar',
		'description'      => __('Este es el Sidebar principal', 'apk'),
		'before_widget'    => '<div id="%1$s" class="nav-item">',
		'after_widget'     => '</div>',
		'before_title'     => '	<a class="nav-link idioma">',
		'after_title'      => '</a>',
	));
}
add_action('widgets_init', 'apk_register_sidebar');

/* Menu header */
function wpb_custom_new_menu()
{
	register_nav_menu('my-custom-menu', __('Main Menu'));
	register_nav_menu('my-custom-menufooter', __('Footer Menu'));
}
add_action('init', 'wpb_custom_new_menu');



/*  */
