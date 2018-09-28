<?php 
// Register Custom Post Type Themes
// Post Type Key: themes
function create_themes_cpt() {

	$labels = array(
		'name' => __( 'Themes', 'Post Type General Name', 'btff' ),
		'singular_name' => __( 'Theme', 'Post Type Singular Name', 'btff' ),
		'menu_name' => __( 'Themes', 'btff' ),
		'name_admin_bar' => __( 'Themes', 'btff' ),
		'archives' => __( 'Archivos Themes', 'btff' ),
		'attributes' => __( 'Atributos Themes', 'btff' ),
		'parent_item_colon' => __( 'Padres Themes:', 'btff' ),
		'all_items' => __( 'Todos Themes', 'btff' ),
		'add_new_item' => __( 'Añadir nuevo Theme', 'btff' ),
		'add_new' => __( 'Añadir nuevo', 'btff' ),
		'new_item' => __( 'Nuevo Theme', 'btff' ),
		'edit_item' => __( 'Editar Theme', 'btff' ),
		'update_item' => __( 'Actualizar Theme', 'btff' ),
		'view_item' => __( 'Ver Theme', 'btff' ),
		'view_items' => __( 'Ver Themes', 'btff' ),
		'search_items' => __( 'Buscar Theme', 'btff' ),
		'not_found' => __( 'No se encontraron Themes.', 'btff' ),
		'not_found_in_trash' => __( 'Ningún Theme encontrado en papelera.', 'btff' ),
		'featured_image' => __( 'Imagen destacada', 'btff' ),
		'set_featured_image' => __( 'Establecer imagen destacada', 'btff' ),
		'remove_featured_image' => __( 'Borrar imagen destacada', 'btff' ),
		'use_featured_image' => __( 'Usar como imagen destacada', 'btff' ),
		'insert_into_item' => __( 'Insertar en Theme', 'btff' ),
		'uploaded_to_this_item' => __( 'Subido a este Themes', 'btff' ),
		'items_list' => __( 'Lista de Themes', 'btff' ),
		'items_list_navigation' => __( 'Navegación por el listado de Themes', 'btff' ),
		'filter_items_list' => __( 'Lista de Themes filtrados', 'btff' ),
	);
	$args = array(
		'label' => __( 'Themes', 'btff' ),
		'description' => __( '', 'btff' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-layout',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'comments', ),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => false,
		'can_export' => true,
		'has_archive' => false,
		'hierarchical' => false,
		'exclude_from_search' => true,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'themes', $args );

}
add_action( 'init', 'create_themes_cpt', 0 );