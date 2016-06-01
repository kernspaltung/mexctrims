<?php
// Template Name: Médicos

get_header();
if( is_user_logged_in() && revisar_roles() ) {

   get_template_part( 'secciones/05-medicos/content','02-entrada_destacada' );

   get_template_part( 'secciones/05-medicos/content','03-noticias' );

}

get_footer();

?>
