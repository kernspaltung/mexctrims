<?php

add_action( 'init', 'register_cpt_enlace' );


function register_cpt_enlace() {
	$labels = array(
		'name'               => _x( 'Enlaces', 'post type general name', 'mexctrims' ),
		'singular_name'      => _x( 'Enlace', 'post type singular name', 'mexctrims' ),
		'menu_name'          => _x( 'Enlaces', 'admin menu', 'mexctrims' ),
		'name_admin_bar'     => _x( 'Enlace', 'add new on admin bar', 'mexctrims' ),
		'add_new'            => _x( 'Add New', 'enlace', 'mexctrims' ),
		'add_new_item'       => __( 'Add New Enlace', 'mexctrims' ),
		'new_item'           => __( 'New Enlace', 'mexctrims' ),
		'edit_item'          => __( 'Edit Enlace', 'mexctrims' ),
		'view_item'          => __( 'View Enlace', 'mexctrims' ),
		'all_items'          => __( 'All Enlaces', 'mexctrims' ),
		'search_items'       => __( 'Search Enlaces', 'mexctrims' ),
		'parent_item_colon'  => __( 'Parent Enlaces:', 'mexctrims' ),
		'not_found'          => __( 'No Enlaces found.', 'mexctrims' ),
		'not_found_in_trash' => __( 'No Enlaces found in Trash.', 'mexctrims' )
	);

	$args = array(
		'labels'             => $labels,
      'description'        => __( 'Description.', 'mexctrims' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'enlace' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'enlace', $args );
}





function enlaces_meta_box_markup($object)
{


	wp_nonce_field( basename( __FILE__ ), "link-externo-nonce" );

	?>
	<label for="link-externo">Link Externo</label>
	<input name="link-externo" type="text" value="<?php echo get_post_meta($object->ID, "link-externo", true); ?>">

	<?php
}

function add_enlaces_meta_box()
{
	add_meta_box("enlace-meta-box", "Enlace", "enlaces_meta_box_markup", "enlace", "side", "high", null);
}

add_action("add_meta_boxes", "add_enlaces_meta_box");



function save_enlaces_meta_box($post_id, $post, $update)
{
	if (!isset($_POST["link-externo-nonce"]) || !wp_verify_nonce($_POST["link-externo-nonce"], basename(__FILE__)))
	return $post_id;

	if(!current_user_can("edit_post", $post_id))
	return $post_id;

	if(defined("DOING_AUTOSAVE") && DOING_AUTOSAVE)
	return $post_id;

	$slug = "enlace";
	if($slug != $post->post_type)
	return $post_id;

	$meta_box_link_externo = "";

	if(isset($_POST["link-externo"]))
	{
		$meta_box_link_externo = $_POST["link-externo"];
	}
	update_post_meta($post_id, "link-externo", $meta_box_link_externo );

}

add_action("save_post", "save_enlaces_meta_box", 10, 3);



?>
