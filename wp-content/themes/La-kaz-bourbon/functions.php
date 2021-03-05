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



/* CPTS */
// Register Custom Post Type
function Banner() {

	$labels = array(
		'name'                  => _x( 'Banners', 'Banner General Name', 'La kaz bourbon' ),
		'singular_name'         => _x( 'Banner', 'Banner Singular Name', 'La kaz bourbon' ),
		'menu_name'             => __( 'Banners', 'La kaz bourbon' ),
		'name_admin_bar'        => __( 'Banner', 'La kaz bourbon' ),
		'archives'              => __( 'Item Archives', 'La kaz bourbon' ),
		'attributes'            => __( 'Item Attributes', 'La kaz bourbon' ),
		'parent_item_colon'     => __( 'Parent Item:', 'La kaz bourbon' ),
		'all_items'             => __( 'All Items', 'La kaz bourbon' ),
		'add_new_item'          => __( 'Add New Item', 'La kaz bourbon' ),
		'add_new'               => __( 'Add New', 'La kaz bourbon' ),
		'new_item'              => __( 'New Item', 'La kaz bourbon' ),
		'edit_item'             => __( 'Edit Item', 'La kaz bourbon' ),
		'update_item'           => __( 'Update Item', 'La kaz bourbon' ),
		'view_item'             => __( 'View Item', 'La kaz bourbon' ),
		'view_items'            => __( 'View Items', 'La kaz bourbon' ),
		'search_items'          => __( 'Search Item', 'La kaz bourbon' ),
		'not_found'             => __( 'Not found', 'La kaz bourbon' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'La kaz bourbon' ),
		'featured_image'        => __( 'Featured Image', 'La kaz bourbon' ),
		'set_featured_image'    => __( 'Set featured image', 'La kaz bourbon' ),
		'remove_featured_image' => __( 'Remove featured image', 'La kaz bourbon' ),
		'use_featured_image'    => __( 'Use as featured image', 'La kaz bourbon' ),
		'insert_into_item'      => __( 'Insert into item', 'La kaz bourbon' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'La kaz bourbon' ),
		'items_list'            => __( 'Items list', 'La kaz bourbon' ),
		'items_list_navigation' => __( 'Items list navigation', 'La kaz bourbon' ),
		'filter_items_list'     => __( 'Filter items list', 'La kaz bourbon' ),
	);
	$args = array(
		'label'                 => __( 'Banner', 'La kaz bourbon' ),
		'description'           => __( 'Banner Description', 'La kaz bourbon' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
    'menu_icon'             => 'dashicons-format-gallery',
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Banner', $args );

}
add_action( 'init', 'Banner', 0 );


// Register Proyectos Custom Taxonomy
function banner_view_taxonomy() {

	$labels = array(
		'name'                       => _x( '<span class="name_none">Select view</span>', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Select view', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Select view', 'text_domain' ),
		'all_items'                  => __( 'All Views', 'text_domain' ),
		'parent_item'                => __( 'Parent View', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent View', 'text_domain' ),
		'new_item_name'              => __( 'New View', 'text_domain' ),
		'add_new_item'               => __( 'Add New View', 'text_domain' ),
		'edit_item'                  => __( 'Edit View', 'text_domain' ),
		'update_item'                => __( 'Update View', 'text_domain' ),
		'view_item'                  => __( 'See Item', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used items', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Search View', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		
	);
	register_taxonomy( 'banner_view', array( 'banner' ), $args );
}
add_action( 'init', 'banner_view_taxonomy', 0 );
