<?php

add_action( 'init', 'register_cpt_articulo' );


function register_cpt_articulo() {
	$labels = array(
		'name'               => _x( 'Artículos', 'post type general name', 'mexctrims' ),
		'singular_name'      => _x( 'Artículo', 'post type singular name', 'mexctrims' ),
		'menu_name'          => _x( 'Artículos', 'admin menu', 'mexctrims' ),
		'name_admin_bar'     => _x( 'Artículo', 'add new on admin bar', 'mexctrims' ),
		'add_new'            => _x( 'Add New', 'articulo', 'mexctrims' ),
		'add_new_item'       => __( 'Add New Artículo', 'mexctrims' ),
		'new_item'           => __( 'New Artículo', 'mexctrims' ),
		'edit_item'          => __( 'Edit Artículo', 'mexctrims' ),
		'view_item'          => __( 'View Artículo', 'mexctrims' ),
		'all_items'          => __( 'All Artículos', 'mexctrims' ),
		'search_items'       => __( 'Search Artículos', 'mexctrims' ),
		'parent_item_colon'  => __( 'Parent Artículos:', 'mexctrims' ),
		'not_found'          => __( 'No Artículos found.', 'mexctrims' ),
		'not_found_in_trash' => __( 'No Artículos found in Trash.', 'mexctrims' )
	);

	$args = array(
		'labels'             => $labels,
      'description'        => __( 'Description.', 'mexctrims' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'articulo' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'author', 'thumbnail', 'editor', 'excerpt', 'comments' ),
		'taxonomies'         => array( 'category' )
	);

	register_post_type( 'articulo', $args );
}




function update_edit_form() {
    echo ' enctype="multipart/form-data"';
} // end update_edit_form
add_action('post_edit_form_tag', 'update_edit_form');


function add_articulo_meta_boxes() {

    // Define the articulo attachment for posts
    add_meta_box(
        'articulo_archivo',
        'Archivo',
        'articulo_archivo',
        'articulo',
        'side'
    );



} // end add_articulo_meta_boxes
add_action('add_meta_boxes', 'add_articulo_meta_boxes');




function articulo_archivo() {

    wp_nonce_field(plugin_basename(__FILE__), 'articulo_archivo_nonce');
	 $archivo = get_post_meta(get_the_ID(),'articulo_archivo',true);

	 if( $archivo ) {

		?>
			<div>
				<b>Nombre:</b> <?php echo basename( $archivo['file'] ); ?>
			</div>
			<div>
				<b>Tipo:</b> <?php echo basename( $archivo['type'] ); ?>
			</div>
			<a href="<?php echo $archivo['url']; ?>">
				Descarga el archivo.
			</a>
		<?php
	 }

    $html = '<p class="description">';
        $html .= 'Sube tu archivo.';
    $html .= '</p>';
    $html .= '<input type="file" id="articulo_archivo" name="articulo_archivo" value="" size="25" />';

    echo $html;

}





function save_articulo_meta_data($id) {

    /* --- security verification --- */
    if(!wp_verify_nonce($_POST['articulo_archivo_nonce'], plugin_basename(__FILE__))) {
      return $id;
    } // end if

    if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
      return $id;
    } // end if

    if('articulo' == $_POST['post_type']) {
      if(!current_user_can('edit_page', $id)) {
        return $id;
      } // end if
    } else {
        if(!current_user_can('edit_page', $id)) {
            return $id;
        } // end if
    } // end if
    /* - end security verification - */

    // Make sure the file array isn't empty
    if(!empty($_FILES['articulo_archivo']['name'])) {

        // Setup the array of supported file types. In this case, it's just PDF.
        $supported_types = array('application/pdf');

        // Get the file type of the upload
        $arr_file_type = wp_check_filetype(basename($_FILES['articulo_archivo']['name']));
        $uploaded_type = $arr_file_type['type'];

        // Check if the type is supported. If not, throw an error.
        if(in_array($uploaded_type, $supported_types)) {

            // Use the WordPress API to upload the file
            $upload = wp_upload_bits($_FILES['articulo_archivo']['name'], null, file_get_contents($_FILES['articulo_archivo']['tmp_name']));

            if(isset($upload['error']) && $upload['error'] != 0) {
                wp_die('There was an error uploading your file. The error is: ' . $upload['error']);
            } else {
                add_post_meta($id, 'articulo_archivo', $upload);
                update_post_meta($id, 'articulo_archivo', $upload);
            } // end if/else

        } else {
            wp_die("El archivo cargado no es un PDF.");
        } // end if/else

    } // end if

} // end save_articulo_meta_data
add_action('save_post', 'save_articulo_meta_data');



?>
