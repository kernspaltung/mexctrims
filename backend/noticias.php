<?php

add_action( 'init', 'register_cpt_noticia' );


function register_cpt_noticia() {
	$labels = array(
		'name'               => _x( 'Noticias', 'post type general name', 'mexctrims' ),
		'singular_name'      => _x( 'Noticia', 'post type singular name', 'mexctrims' ),
		'menu_name'          => _x( 'Noticias', 'admin menu', 'mexctrims' ),
		'name_admin_bar'     => _x( 'Noticia', 'add new on admin bar', 'mexctrims' ),
		'add_new'            => _x( 'Add New', 'noticia', 'mexctrims' ),
		'add_new_item'       => __( 'Add New Noticia', 'mexctrims' ),
		'new_item'           => __( 'New Noticia', 'mexctrims' ),
		'edit_item'          => __( 'Edit Noticia', 'mexctrims' ),
		'view_item'          => __( 'View Noticia', 'mexctrims' ),
		'all_items'          => __( 'All Noticias', 'mexctrims' ),
		'search_items'       => __( 'Search Noticias', 'mexctrims' ),
		'parent_item_colon'  => __( 'Parent Noticias:', 'mexctrims' ),
		'not_found'          => __( 'No Noticias found.', 'mexctrims' ),
		'not_found_in_trash' => __( 'No Noticias found in Trash.', 'mexctrims' )
	);

	$args = array(
		'labels'             => $labels,
      'description'        => __( 'Description.', 'mexctrims' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'noticia' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'author', 'thumbnail', 'editor', 'excerpt', 'comments' ),
		'taxonomies'         => array( 'category' )
	);

	register_post_type( 'noticia', $args );
}







?>
