<?php

$portada = get_page_by_title('Portada');
$portada_id = $portada -> ID;

$bienvenida = get_page_by_title('Bienvenida');

?>

<div id="background" class="h_100 w_100 absUpL z-1">
   <div class="w_100 h_100 imgLiquid imgLiquidFill  abs image-fx z-1">
      <?php echo get_the_post_thumbnail( $portada_id, 'large'); ?>
   </div>
   <div class="curtain w_100 h_100 z-1 p0 abs"></div>
   <div class="img-overlay w_100 h_100 z-1 p0 abs"></div>
</div>

<div class="h_100 rel z1k">
   <div class="row p4 h_70 h_sm_0">

      <div class="small-12 medium-6 columns fontL h_40vh h_sm_50vh">
         <div class="vcenter">

            <div class="mt_sm_2 imgLiquid imgLiquidNoFill h_25vh icono">
               <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logotipo-480w.png">
            </div>

            <h6 class="mt1 mt_sm_0 fontL text-center p2 pt0 pb0">
               Comité Mexicano para el
               <br/>Tratamiento e Investigación
               <br/>en Esclerosis Múltiple

            </h6>
         </div>
      </div>

      <div class="small-12 medium-6 columns h_40vh h_sm_50vh">
         <div class="columns h_a mt1">

            <?php echo apply_filters('the_content', $portada -> post_content ); ?>

         </div>
      </div>


      <div class="small-12 medium-10 large-8 medium-offset-1 large-offset-2 columns p5 p_sm_1 pt_sm_1 mt3">
         <h6 class="fontXL font_sm_M p5 text-left columns medium-10 medium-centered white_bg tarjeta">
            <?php echo apply_filters('the_content', $bienvenida -> post_content ); ?>
         </h6>
      </div>
   </div>

</div>
