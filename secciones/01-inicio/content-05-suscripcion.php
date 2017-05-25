<?php
 
$contacto = get_page_by_title( 'Contáctanos' );
$lista_correo = get_page_by_title( 'Lista de correo' );

?>

<section id="inicio-contacto-datos" class="h_20vh primario_acento_bg black columns text-center rel mt4 p0">
   <!-- .columns.medium-6.large-4.p5>h1{Contacto} -->
   <div class="columns medium-6 large-4 p5 h_100">
      <div class="vcenter">
         <h1>Contacto</h1>
      </div>
   </div>
   <div class="columns medium-6 large-4 p0 h_100 primario_acento_bg">
      <div class="vcenter columns h_a text-center p0">
         <div class="icono text-center columns font2">
            <a href="#">
               <span class="secundario2 font2">
                  mexctrims@mexctrims.com
               </span>
            </a>
         </div>
         <div class="icono text-center columns medium-6 mt1">
            <a href="#">
               <i class="fa fa-twitter secundario2"></i>
            </a>
         </div>
         <div class="icono text-center columns medium-6 mt1">
            <a href="#">
               <i class="fa fa-facebook secundario2"></i>
            </a>
         </div>
      </div>
   </div>
</section>

<section id="inicio-registro" class="columns text-center rel pt0 p0 m0">

   <div id="inicio-contacto-formulario" class="columns h_a p5  p_sm_1 pt1 rel secundario2_bg white">
      <div class="medium-6 columns p5 pt0 pb0">
         <div class="columns fontM text-left p3">
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
