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

   global $block_ads;

   global $current_user;

   if( $current_user -> roles[0] == "medico_pendiente" ) {
      echo '<section id="ingreso_medicos" class="medium-10 large-8 medium-centered columns p5">';

      echo '<h1 class="mt1 mb2">'.apply_filters( 'the_title', get_page_by_title("Registro por Verificar")->post_title ).'</h1>';
      echo apply_filters( 'the_content', get_page_by_title("Registro por Verificar")->post_content );

      echo '</section>';
      $block_ads = true;

   } else if( is_user_logged_in() && revisar_roles() ) {

      get_template_part( 'secciones/05-medicos/content','01-portada');

      $block_ads = false;

   } else {

      ?>
      <!-- .medium-10.large-8.medium-centered.columns.p5 -->
      <section id="ingreso_medicos" class="medium-10 large-8 medium-centered columns p5">
         <h1 class="mb2">Ingreso Médicos</h1>
         <div class="small-12 medium-7 large-8 columns p5 pl0 ">
            <?php
            $ingreso = get_page_by_title( "Ingreso Médicos" );
            echo apply_filters('the_content', $ingreso->post_content );

            ?>
         </div>
         <div class="small-10 medium-5 large-4 columns p5 primario_acento_bg">
            <?php echo mexctrims_login_form(); ?>
         </div>
      </div>
      <?php

      $block_ads = true;

   }

endif;

if( is_page('Noticias') ):

   get_template_part( 'secciones/03-noticias/content','01-portada');

endif;


if( is_page('Descargables') ):

   get_template_part( 'secciones/04-descargables/content','01-portada');

endif;
