<?php

if( is_front_page() ) :

   get_template_part( 'secciones/01-inicio/content','01-portada');

endif;



if( is_single() ) :

   ?>

   <?php

endif;




if( is_page('Información') ):

   get_template_part('secciones/02-info/content','01-portada');

endif;

if( is_page('Médicos') ):

   get_template_part( 'secciones/05-medicos/content','01-portada');

endif;

if( is_page('Noticias') ):

   get_template_part( 'secciones/03-noticias/content','01-portada');

endif;


if( is_page('Descargables') ):

   get_template_part( 'secciones/04-descargables/content','01-portada');

endif;
