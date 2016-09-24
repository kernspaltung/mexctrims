<?php

$contacto = get_page_by_title( 'Contáctanos' );
$lista_correo = get_page_by_title( 'Lista de correo' );

?>

<section id="inicio-registro" class="small-12 columns text-center rel pt0 mt3 ">

   <div id="inicio-contacto-formulario" class="small-12 row h_a p5 p_sm_1 pt1 rel primario_acento_bd">
      <div class="medium-6 columns p5 pt0 pb0">
         <div class="columns fontS text-left p3">
            <h4 class="mt2">
               <?php echo apply_filters( 'the_title', $lista_correo -> post_title ); ?>
            </h4>
            <?php echo apply_filters( 'the_content', $lista_correo -> post_content ); ?>
         </div>
         <div class="columns p0">
            <?php echo  do_shortcode( '[contact-form-7 id="161" title="Suscripción"]' ); ?>
         </div>
      </div>
      <div class="medium-6 columns p5 pt0">
         <div class="columns fontS text-left p3">
            <h4 class="mt2">
               Escríbenos
            </h4>
            <div class="columns p0">
               <?php echo  do_shortcode( '[contact-form-7 id="144" title="Contacto"]' ); ?>
            </div>
         </div>
      </div>
   </div>
<!--
   <div id="inicio-registro-agradecimiento" class="small-10 medium-8 small-centered h_60vh hidden">


      <div class="vcenter">
         <h1>
            <?php echo apply_filters( 'the_content', $agradecimiento -> post_content ); ?>
         </h1>
      </div>

   </div>
 -->

</section>
