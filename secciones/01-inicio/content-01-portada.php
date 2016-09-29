<?php

$portada = get_page_by_title('Portada');
$ID = $portada -> ID;

$bienvenida = get_page_by_title('Bienvenida');

?>

<div id="background" class="h_100 w_100 absUpL z-1">
   <div class="w_100 h_100 imgLiquid imgLiquidFill  abs image-fx z-1">
      <?php echo get_the_post_thumbnail( $ID, 'large'); ?>
   </div>
   <div class="curtain w_100 h_100 z-1 p0 abs"></div>
   <div class="img-overlay w_100 h_100 z-1 p0 abs"></div>
</div>

<div class="h_100 rel z1k">
   <div class="row p4 h_75">
      <div class="small-12 medium-6 large-5 columns h_40vh h_sm_20vh">
         <div class="h_100 imgLiquid imgLiquidFill image-fx">

            <?php echo get_the_post_thumbnail( $bienvenida -> ID ); ?>

         </div>
      </div>
      <div class="small-12 medium-6 large-7 columns fontL h_40vh h_sm_55">
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
      <div class="small-12 medium-11 large-8 medium-offset-1 large-offset-2 columns p5 pt_sm_1 p_sm_0 mt3">
         <h6 class="fontXL font_sm_L p5 text-left white_bg tarjeta">
            <?php echo apply_filters('the_content', $bienvenida -> post_content ); ?>
         </h6>
      </div>
   </div>

</div>
