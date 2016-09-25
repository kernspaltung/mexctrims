<?php

include_once 'backend/enlaces.php';
include_once 'backend/descargables.php';

add_theme_support( 'post-thumbnails' );


add_action( 'init', 'add_excerpts_to_pages' );
function add_excerpts_to_pages() {
    add_post_type_support( 'page', 'excerpt' );
}


global $themeDir;

$themeDir = get_stylesheet_directory_uri() . "/";

function styles() {

	global $themeDir;

	wp_enqueue_style("font-awesome", $themeDir . "bower_components/font-awesome/css/font-awesome.min.css",array());
	wp_enqueue_style("google-fonts", 'https://fonts.googleapis.com/css?family=Lato:100,300|Montserrat');
	wp_enqueue_style("app", $themeDir . "css/app.css",array());

}

add_action('wp_enqueue_scripts','scripts');add_action('wp_enqueue_scripts','styles');

function scripts() {

	global $themeDir;

	wp_enqueue_script("jquery", $themeDir . "bower_components/jquery/dist/jquery.js",array());
	// wp_enqueue_script("what-input", $themeDir . "bower_components/what-input/what-input.js",array());
	wp_enqueue_script("foundation", $themeDir . "bower_components/foundation-sites/dist/foundation.js",array());
	wp_enqueue_script("imgLiquid", $themeDir . "bower_components/imgLiquid/js/imgLiquid-min.js",array('jquery'));

	wp_enqueue_script("frontendutils", $themeDir . "js/frontendutils.js",array('jquery'));
	wp_enqueue_script("app", $themeDir . "js/app.js");

	if( is_page() ) {
		wp_enqueue_script("page-index", $themeDir . "js/page-index.js");
	}
}

add_action('wp_enqueue_scripts','scripts');






add_role( "medico_pendiente", "Médico por Aprobar", array() );

add_role( "medico", "Médico", array( 'edit_posts','read' ) );

// user registration login form
function mexctrims_registration_form() {

	// only show the registration form to non-logged-in members
//	if(!is_user_logged_in()) {

		global $mexctrims_load_css;

		// set this to true so the CSS is loaded
		$mexctrims_load_css = true;

		// check to make sure user registration is enabled
		$registration_enabled = get_option('users_can_register');

		// only show the registration form if allowed
		if($registration_enabled) {
			$output = mexctrims_registration_form_fields();
		} else {
			$output = __('User registration is not enabled');
		}
		return $output;
//	}
}
add_shortcode('register_form', 'mexctrims_registration_form');




function mexctrims_login_form() {

	if(!is_user_logged_in()) {

		global $mexctrims_load_css;

		// set this to true so the CSS is loaded
		$mexctrims_load_css = true;

		$output = mexctrims_login_form_fields();
	} else {
		// could show some logged in user info here
		// $output = 'user info here';
	}
	return $output;
}
add_shortcode('login_form', 'mexctrims_login_form');







// registration form fields
function mexctrims_registration_form_fields() {

	ob_start(); ?>
		<?php
		// show any error messages after form submission
		mexctrims_show_error_messages(); ?>

		<form id="mexctrims_registration_form" class="mexctrims_form" action="" method="POST">
			<fieldset>
				<p>
					<label for="mexctrims_usuario_nombre_usuario">Nombre de Usuario</label>
					<input name="mexctrims_usuario_nombre_usuario" id="mexctrims_usuario_nombre-usuario" class="required" type="text"/>
				</p>
				<p>
					<label for="mexctrims_usuario_email">E-mail</label>
					<input name="mexctrims_usuario_email" id="mexctrims_usuario_email" class="required" type="email"/>
				</p>
				<p>
					<label for="mexctrims_usuario_nombre">Nombre</label>
					<input name="mexctrims_usuario_nombre" id="mexctrims_usuario_nombre" type="text"/>
				</p>
				<p>
					<label for="mexctrims_usuario_apellido">Apellido</label>
					<input name="mexctrims_usuario_apellido" id="mexctrims_usuario_last" type="text"/>
				</p>
				<p>
					<label for="mexctrims_usuario_clave_medico">Clave Médico</label>
					<input name="mexctrims_usuario_clave_medico" id="mexctrims_usuario_clave_medico" type="text"/>
				</p>
				<p>
					<label for="password">Contraseña</label>
					<input name="mexctrims_usuario_contrasenna" id="password" class="required" type="password"/>
				</p>
				<p>
					<label for="password_again">Repita su contraseña</label>
					<input name="mexctrims_usuario_contrasenna_repetir" id="password_again" class="required" type="password"/>
				</p>
				<p>
					<input type="hidden" name="mexctrims_register_nonce" value="<?php echo wp_create_nonce('mexctrims-register-nonce'); ?>"/>
					<input type="submit" value="Crea tu cuenta"/>
				</p>
			</fieldset>
		</form>
	<?php
	return ob_get_clean();
}





// login form fields
function mexctrims_login_form_fields() {

	ob_start(); ?>

		<?php
		// show any error messages after form submission
		mexctrims_show_error_messages(); ?>

		<form id="mexctrims_login_form"  class="mexctrims_form" action="" method="post">
			<fieldset>
				<p>
					<label for="mexctrims_usuario_nombre_usuario">Nombre de usuario</label>
					<input name="mexctrims_usuario_nombre_usuario" id="mexctrims_usuario_nombre_usuario" class="required" type="text"/>
				</p>
				<p>
					<label for="mexctrims_usuario_contrasenna">Contraseña</label>
					<input name="mexctrims_usuario_contrasenna" id="mexctrims_usuario_contrasenna" class="required" type="password"/>
				</p>
				<p>
					<input type="hidden" name="mexctrims_login_nonce" value="<?php echo wp_create_nonce('mexctrims-login-nonce'); ?>"/>
					<input id="mexctrims_login_submit" type="submit" value="Login"/>
				</p>
			</fieldset>
		</form>
	<?php
	return ob_get_clean();
}
// logs a member in after submitting a form
function mexctrims_login_member() {

	if(isset($_POST['mexctrims_usuario_nombre_usuario']) && wp_verify_nonce($_POST['mexctrims_login_nonce'], 'mexctrims-login-nonce')) {

		// this returns the user ID and other info from the user name
		$user = get_userdatabylogin($_POST['mexctrims_usuario_nombre_usuario']);

		if(!$user) {
			// if the user name doesn't exist
			mexctrims_errors()->add('empty_username', __('Nombre de usuario inválido'));
		}

		if(!isset($_POST['mexctrims_usuario_contrasenna']) || $_POST['mexctrims_usuario_contrasenna'] == '') {
			// if no password was entered
			mexctrims_errors()->add('empty_password', __('Por favor ingrese una contraseña'));
		}

		// check the user's login with their password
		if(!wp_check_password($_POST['mexctrims_usuario_contrasenna'], $user->user_pass, $user->ID)) {
			// if the password is incorrect for the specified user
			mexctrims_errors()->add('empty_password', __('Contraseña incorrecta'));
		}

		// retrieve all error messages
		$errors = mexctrims_errors()->get_error_messages();

		// only log the user in if there are no errors
		if(empty($errors)) {

			wp_setcookie($_POST['mexctrims_usuario_nombre_usuario'], $_POST['mexctrims_usuario_contrasenna'], true);
			wp_set_current_user($user->ID, $_POST['mexctrims_usuario_nombre_usuario']);
			do_action('wp_login', $_POST['mexctrims_usuario_nombre_usuario']);

			wp_redirect( get_the_permalink(get_page_by_title("Médicos")->ID) ); exit;
		}
	}
}
add_action('init', 'mexctrims_login_member');








// register a new user
function mexctrims_add_new_member() {
  	if (isset( $_POST["mexctrims_usuario_nombre_usuario"] ) && wp_verify_nonce($_POST['mexctrims_register_nonce'], 'mexctrims-register-nonce')) {
		$user_login		= $_POST["mexctrims_usuario_nombre_usuario"];
		$user_email		= $_POST["mexctrims_usuario_email"];
		$user_first 	= $_POST["mexctrims_usuario_nombre"];
		$user_last	 	= $_POST["mexctrims_usuario_apellido"];
		$user_pass		= $_POST["mexctrims_usuario_contrasenna"];
		$pass_confirm 	= $_POST["mexctrims_usuario_contrasenna_repetir"];
		$clave_medico 	= $_POST["mexctrims_usuario_clave_medico"];

		// this is required for username checks
		require_once(ABSPATH . WPINC . '/registration.php');

		if(username_exists($user_login)) {
			// Username already registered
			mexctrims_errors()->add('username_unavailable', __('El nombre de usuario ya ha sido registrado antes.'));
		}
		if(!validate_username($user_login)) {
			// invalid username
			mexctrims_errors()->add('username_invalid', __('Nombre de usuario inválido'));
		}
		if($user_login == '') {
			// empty username
			mexctrims_errors()->add('username_empty', __('Por favor ingrese un Nombre de usuario'));
		}
		if(!is_email($user_email)) {
			//invalid email
			mexctrims_errors()->add('email_invalid', __('E-mail inválido'));
		}
		if(email_exists($user_email)) {
			//Email address already registered
			mexctrims_errors()->add('email_used', __('El e-mail ya había sido registrado antes.'));
		}
		if($user_pass == '') {
			// passwords do not match
			mexctrims_errors()->add('password_empty', __('Por favor ingrese una contraseña'));
		}
		if($user_pass != $pass_confirm) {
			// passwords do not match
			mexctrims_errors()->add('password_mismatch', __('Las contraseñas no coinciden'));
		}


		$errors = mexctrims_errors()->get_error_messages();

		// only create the user in if there are no errors
		if(empty($errors)) {

			$new_usuario_id = wp_insert_user(array(
					'user_login'		=> $user_login,
					'user_pass'	 		=> $user_pass,
					'user_email'		=> $user_email,
					'first_name'		=> $user_first,
					'last_name'			=> $user_last,
					'user_registered'	=> date('Y-m-d H:i:s'),
					'role'				=> 'medico_pendiente'
				)
			);


			if($new_usuario_id) {

				add_user_meta( $new_usuario_id, "clave_medico", $clave_medico, true );

				// send an email to the admin alerting them of the registration
				wp_new_user_notification($new_usuario_id);

				// log the new user in
				// wp_setcookie($user_login, $user_pass, true);
				// wp_set_current_user($new_usuario_id, $user_login);
				// do_action('wp_login', $user_login);

				// send the newly created user to the home page after logging them in
				wp_redirect( get_the_permalink(get_page_by_title("Registro por Verificar")->ID) ); exit;
			}

		}

	}
}
add_action('init', 'mexctrims_add_new_member');





// used for tracking error messages
function mexctrims_errors(){
    static $wp_error; // Will hold global variable safely
    return isset($wp_error) ? $wp_error : ($wp_error = new WP_Error(null, null, null));
}




// displays error messages from form submissions
function mexctrims_show_error_messages() {
	if($codes = mexctrims_errors()->get_error_codes()) {
		echo '<div class="mexctrims_errors">';
		    // Loop error codes and display errors
		   foreach($codes as $code){
		        $message = mexctrims_errors()->get_error_message($code);
		        echo '<span class="error"><strong>' . __('Error') . '</strong>: ' . $message . '</span><br/>';
		    }
		echo '</div>';
	}
}





// register our form css
function mexctrims_register_css() {
	wp_register_style('mexctrims-form-css', get_stylesheet_directory_uri() . '/css/forms.css');
}
add_action('init', 'mexctrims_register_css');






// load our form css
function mexctrims_print_css() {
	global $mexctrims_load_css;

	// this variable is set to TRUE if the short code is used on a page/post
	if ( ! $mexctrims_load_css )
		return; // this means that neither short code is present, so we get out of here

	wp_print_styles('mexctrims-form-css');
}
add_action('wp_footer', 'mexctrims_print_css');





add_action( 'show_user_profile', 'mostrar_clave_medico' );
add_action( 'edit_user_profile', 'mostrar_clave_medico' );

function mostrar_clave_medico( $user ) { ?>

	<h3>Clave Médico</h3>

	<span><?php echo get_user_meta( $user->ID, "clave_medico", true ); ?></span>
<?php }


function revisar_roles() {
	global $current_user;
   $roles_permitidos = array( "medico", "colaborator", "author", "editor", "administrator" );

   $rol_permitido = true;

   foreach( $current_user->roles as $rol ) {
      if( ! in_array( $rol, $roles_permitidos ) ) {
         $rol_permitido = false;
         break;
      }
   }

	return $rol_permitido;
}
