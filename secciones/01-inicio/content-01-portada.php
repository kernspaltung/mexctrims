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

<div class="h_100 text-center rel z1k">
   <div class="row p4 h_75">
      <div class="small-6 large-8 columns">
         <div class="h_100 imgLiquid imgLiquidFill image-fx">

            <?php echo get_the_post_thumbnail( $bienvenida -> ID ); ?>

         </div>
      </div>
      <div class="small-6 large-4 columns fontM h_30vh h_sm_75">
         <div class="vcenter">

            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logotipo-150w.png">

            <h6 class="mt1">
               Comité Mexicano para el
               <br/>Tratamiento e Investigación
               <br/>en Esclerosis Múltiple
            </h6>
         </div>
      </div>
      <div class="small-12 medium-10 large-8 medium-offset-1 large-offset-2 columns pt4 pt_sm_1">
         <h4 class="fontRM p3 text-left">
            <?php echo apply_filters('the_content', $bienvenida -> post_content ); ?>
         </h4>
      </div>
   </div>

</div>
